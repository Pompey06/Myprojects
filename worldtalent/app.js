const LINK = "https://worldtalentradar.com/create-player/";
const redirectBtns = document.querySelectorAll("[data-redirect]");

redirectBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const dataRedirect = btn.getAttribute("data-redirect");

    const currentUrl = new URL(window.location.href);
    const searchParams = new URLSearchParams(currentUrl.search);

    const segments = currentUrl.pathname.split("/");
    const landId = segments.find((segment) => /^\d+$/.test(segment));

    if (landId) {
      searchParams.set("land_id", landId);
      if (dataRedirect == "2") searchParams.set("step", 1);

      const redirectUrl = `https://worldtalentradar.com/?${searchParams.toString()}`;
      window.location.href = redirectUrl;
    } else {
      console.error("Не удалось определить land_id из URL");
    }
  });
});
