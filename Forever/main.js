window.addEventListener("DOMContentLoaded", () => {
   // ———————————————— AUDIO & MUTE ————————————————
   const audio = document.getElementById("bg-audio");
   const muteBtns = document.querySelectorAll(".mute");

   if (!audio || muteBtns.length === 0) {
      console.error("Не нашёл audio или кнопки mute");
   } else {
      audio.volume = 0.5;
      audio.play().catch((err) => console.warn("Autoplay failed:", err));

      muteBtns.forEach((btn) => {
         btn.addEventListener("click", (e) => {
            // отменяем переход по ссылке и всплытие, чтобы .computer-клик не перебивал
            e.preventDefault();
            e.stopPropagation();

            audio.muted = !audio.muted;
            // обновляем иконки сразу на всех .mute, чтобы при смене медиа-запросов было консистентно
            muteBtns.forEach((b) => {
               const icon = b.querySelector("img");
               icon.src = audio.muted ? "./image/muted.png" : "./image/mute.png";
               icon.alt = audio.muted ? "Unmute" : "Mute";
            });
         });
      });
   }

   // ————————————— CHART NUMBER STATE —————————————
   const chartNumberSpan = document.querySelector(".chart__number");
   const match = chartNumberSpan.textContent.match(/^(\d+)(.*)$/);
   let chartValue = match ? parseInt(match[1], 10) : 0;
   const chartSuffix = match ? match[2] : "";

   // —————————————— HAND ANIMATION ——————————————
   const btn = document.querySelector(".chart__button");
   const notHand = document.querySelector(".not-hand");
   const hand = document.querySelector(".hand");

   function animateForward() {
      // отменяем все предыдущие анимации и сразу запускаем «вперёд»
      notHand.getAnimations().forEach((a) => a.cancel());
      hand.getAnimations().forEach((a) => a.cancel());

      const from = notHand.getBoundingClientRect();
      const to = hand.getBoundingClientRect();
      const dx = to.left - from.left;
      const dy = to.top - from.top;
      const dur = 300; // 300ms, чтобы успеть с синхронизацией свечек
      const ease = "ease-out";

      notHand.animate(
         [
            { transform: "translate(0,0)", opacity: 1 },
            { transform: `translate(${dx}px, ${dy}px)`, opacity: 0 },
         ],
         { duration: dur, easing: ease, fill: "forwards" }
      );
      hand.animate(
         [
            { transform: `translate(${-dx}px, ${-dy}px)`, opacity: 0 },
            { transform: "translate(0,0)", opacity: 1 },
         ],
         { duration: dur, easing: ease, fill: "forwards" }
      );
   }

   function resetHand() {
      // сбросить всё, чтобы рука вернулась в начальное состояние
      notHand.getAnimations().forEach((a) => a.cancel());
      hand.getAnimations().forEach((a) => a.cancel());
      notHand.style.opacity = "1";
      hand.style.opacity = "0";
   }

   // ————————————— CANDLES & SCROLLABLE VIEW —————————————
   const candlesContainer = document.querySelector(".candles");
   candlesContainer.style.overflow = "hidden";

   const inner = document.createElement("div");
   inner.classList.add("inner");
   inner.style.position = "relative";
   inner.style.width = "max-content";
   inner.style.height = "100%";
   inner.style.transition = "transform 0.3s ease";
   candlesContainer.appendChild(inner);

   //const heights = [60, 80, 100, 120, 140, 160, 180, 200, 220, 240];
   //const candleWidth = 16.5;
   let heights, candleWidth;
   function updateCandleSettings() {
      if (window.matchMedia("(max-width:500px)").matches) {
         candleWidth = 8; // узкий экран — свечка тоньше
         heights = [30, 40, 50, 60, 70, 80, 90, 100, 110, 120]; // поменьше по высоте
      } else {
         candleWidth = 16.5;
         heights = [60, 80, 100, 120, 140, 160, 180, 200, 220, 240];
      }
   }
   updateCandleSettings();
   window.addEventListener("resize", updateCandleSettings);

   let lastTotalH = 0;
   let offsetX = 0;
   let shiftX = 0;
   let shiftY = 0;
   let accumulatedY = 0;
   let count = 0;

   const gap = 5;
   const viewWidth = candlesContainer.clientWidth;
   const viewHeight = candlesContainer.clientHeight;
   const startScrollAfter = 10;
   const maxCandles = 80;

   function addCandle() {
      count++;
      // размеры и цифры
      const idx = Math.floor(Math.random() * heights.length);
      const bodyH = heights[idx] / 3;
      chartValue += (idx + 1) * 100;
      chartNumberSpan.textContent = chartValue + chartSuffix;

      const topWick = (Math.random() < 0.5 ? 5 + Math.random() * 10 : 0) / 2;
      const bottomWick = (Math.random() < 0.5 ? 5 + Math.random() * 10 : 0) / 2;
      const totalH = bodyH + topWick + bottomWick;

      // подъём на 50% предыдущей
      accumulatedY += lastTotalH * 0.5;

      // обёртка
      const wrap = document.createElement("div");
      Object.assign(wrap.style, {
         position: "absolute",
         left: `${offsetX}px`,
         bottom: `${accumulatedY}px`,
         width: `${candleWidth}px`,
         height: `${totalH}px`,
         transform: "rotate(0.8deg)",
         transformOrigin: "bottom center",
      });

      if (topWick) {
         const wTop = document.createElement("div");
         Object.assign(wTop.style, {
            position: "absolute",
            left: "50%",
            top: "0",
            transform: "translateX(-50%)",
            width: "2px",
            height: `${topWick}px`,
            background: "#00ff04",
         });
         wrap.appendChild(wTop);
      }

      const body = document.createElement("div");
      Object.assign(body.style, {
         position: "absolute",
         left: "0",
         bottom: `${bottomWick}px`,
         width: `${candleWidth}px`,
         height: `${bodyH}px`,
         background: "#00ff04",
         borderRadius: "2px",
         boxShadow: "0 2px 6px rgba(0,0,0,0.3)",
      });
      wrap.appendChild(body);

      if (bottomWick) {
         const wBot = document.createElement("div");
         Object.assign(wBot.style, {
            position: "absolute",
            left: "50%",
            bottom: "0",
            transform: "translateX(-50%)",
            width: "2px",
            height: `${bottomWick}px`,
            background: "#00ff04",
         });
         wrap.appendChild(wBot);
      }

      inner.appendChild(wrap);

      offsetX += candleWidth + gap;
      lastTotalH = totalH;

      if (count > startScrollAfter) {
         const overflowX = offsetX + candleWidth - viewWidth;
         if (overflowX > shiftX) shiftX = overflowX;

         const highestPoint = accumulatedY + totalH;
         const overflowY = highestPoint - viewHeight;
         if (overflowY > shiftY) shiftY = overflowY;

         inner.style.transform = `translateX(-${shiftX}px) translateY(${shiftY}px)`;
      }

      if (inner.children.length > maxCandles) {
         inner.removeChild(inner.firstChild);
      }
   }

   // ————————————— ОБЩАЯ ЛОГИКА КЛИКА —————————————
   function handleClick() {
      animateForward();
      addCandle();
      // через 300ms сбросим руку
      setTimeout(resetHand, 300);
   }

   btn.addEventListener("click", handleClick);
   document.querySelector(".computer").addEventListener("click", (e) => {
      if (!e.target.closest(".chart__button")) {
         handleClick();
      }
   });
});
