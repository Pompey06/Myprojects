window.addEventListener("DOMContentLoaded", () => {
   // ———————————————— AUDIO & MUTE ————————————————
   const audio = document.getElementById("bg-audio");
   const btnOn = document.getElementById("sound-on"); // muted → вкл звук
   const btnOff = document.getElementById("sound-off"); // звук включён → заглушить

   if (!audio || !btnOn || !btnOff) {
      console.error("Не нашёл audio или кнопки mute");
   } else {
      audio.volume = 0.3;
      audio.play().catch(() => {
         /* автоплей мог заблокироваться */
      });

      function updateIcons() {
         if (audio.muted) {
            btnOn.style.display = "";
            btnOff.style.display = "none";
         } else {
            btnOn.style.display = "none";
            btnOff.style.display = "";
         }
      }

      [btnOn, btnOff].forEach((btn) =>
         btn.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            audio.muted = !audio.muted;
            updateIcons();
         })
      );

      updateIcons();
   }

   // ————————————— TV OVERLAY & PAUSE ANIMATIONS —————————————
   const wrapper = document.querySelector(".wrapper");
   const tvImg = wrapper.querySelector("img.tv");
   const tvLink = tvImg.closest("a");

   if (getComputedStyle(wrapper).position === "static") {
      wrapper.style.position = "relative";
   }

   const overlay = document.createElement("div");
   Object.assign(overlay.style, {
      position: "absolute",
      top: "0",
      left: "0",
      width: "100%",
      height: "100%",
      background: "rgba(0,0,0,0.78)",
      pointerEvents: "none",
      zIndex: "999",
      opacity: "0",
      transition: "opacity 0.3s ease",
   });
   wrapper.appendChild(overlay);

   tvImg.style.zIndex = "1000";

   const animElems = wrapper.querySelectorAll(".door_light, .lamp_light, .lamp__wrapper, .person");

   tvLink.addEventListener("mouseenter", () => {
      overlay.style.opacity = "1";
      animElems.forEach((el) => {
         el.style.animationPlayState = "paused";
      });
   });

   tvLink.addEventListener("mouseleave", () => {
      overlay.style.opacity = "0";
      animElems.forEach((el) => {
         el.style.animationPlayState = "running";
      });
   });

   // ————————————— ADAPTIVE TV POSITION —————————————
   const desktopBreakpoints = [
      { w: 1900, l: 25 },
      { w: 1800, l: 23 },
      { w: 1700, l: 22 },
      { w: 1600, l: 20 },
      { w: 1500, l: 18 },
      { w: 1400, l: 16 },
      { w: 1300, l: 13 },
      { w: 1200, l: 10 },
      { w: 1100, l: 6 },
      { w: 1000, l: 2 },
      { w: 900, l: -4 },
      { w: 800, l: -11 },
      { w: 700, l: -20 },
   ];

   const mobileLeftBPs = [
      { w: 650, l: 33.2 },
      { w: 600, l: 33.2 },
      { w: 475, l: 33.2 },
      { w: 400, l: 30.2 },
      { w: 360, l: 28.2 },
      { w: 320, l: 25.2 },
   ];

   const mobileTopBPs = [
      { w: 650, t: 60 },
      { w: 550, t: 58.2 },
      { w: 475, t: 57.2 },
   ];

   function interpolate(value, A, B) {
      // A and B have form {w: ..., l or t: ...}
      const ratio = (value - B.w) / (A.w - B.w);
      return B.key + ratio * (A.key - B.key);
   }

   function interpPoint(w, points, keyName) {
      // keyName is 'l' or 't'
      if (w >= points[0].w) {
         return points[0][keyName];
      }
      if (w <= points[points.length - 1].w) {
         return points[points.length - 1][keyName];
      }
      for (let i = 0; i < points.length - 1; i++) {
         const A = points[i],
            B = points[i + 1];
         if (w <= A.w && w >= B.w) {
            const t = (w - B.w) / (A.w - B.w);
            return B[keyName] + t * (A[keyName] - B[keyName]);
         }
      }
   }

   function updateTvPosition() {
      const w = window.innerWidth;

      if (w > 650) {
         // desktop: only adjust left
         let left;
         if (w >= desktopBreakpoints[0].w) {
            left = desktopBreakpoints[0].l;
         } else if (w <= desktopBreakpoints[desktopBreakpoints.length - 1].w) {
            left = desktopBreakpoints[desktopBreakpoints.length - 1].l;
         } else {
            for (let i = 0; i < desktopBreakpoints.length - 1; i++) {
               const A = desktopBreakpoints[i],
                  B = desktopBreakpoints[i + 1];
               if (w <= A.w && w >= B.w) {
                  const t = (w - B.w) / (A.w - B.w);
                  left = B.l + t * (A.l - B.l);
                  break;
               }
            }
         }
         tvImg.style.left = left + "%";
         tvImg.style.removeProperty("top");
      } else {
         // mobile: adjust both top and left
         const left = interpPoint(w, mobileLeftBPs, "l");
         const top = interpPoint(w, mobileTopBPs, "t");
         tvImg.style.left = left + "%";
         tvImg.style.top = top + "%";
      }
   }

   updateTvPosition();
   window.addEventListener("resize", updateTvPosition);
});
