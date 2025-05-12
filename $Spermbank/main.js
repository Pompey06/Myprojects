// main.js

document.addEventListener("DOMContentLoaded", () => {
   // ЭЛЕМЕНТЫ
   const weeklyInput = document.getElementById("weeklyExchanges");
   const realSelect = document.getElementById("periodSelect");
   const totalInvestedEl = document.getElementById("totalInvested");
   const approxRevenueEl = document.getElementById("approxRevenue");
   const btnCalculate = document.getElementById("calculateBtn");

   const wrapper = document.querySelector(".custom-select-wrapper");
   const trigger = wrapper.querySelector(".custom-select-trigger");
   const triggerText = document.getElementById("periodTriggerText");
   const optionEls = wrapper.querySelectorAll(".custom-option");

   // КОНСТАНТЫ МОДЕЛИ
   const AMOUNT_PER_EXCHANGE = 20; // $ за одну операцию
   const ANNUAL_MULTIPLIER = 1000; // ×1000 в год

   // Форматирование валюты
   function formatMoney(x) {
      return (
         "$" +
         x.toLocaleString(undefined, {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
         })
      );
   }

   // Собственно расчёт
   function recalc() {
      const weeklyCnt = parseFloat(weeklyInput.value) || 0;
      const weeks = parseFloat(realSelect.value) || 0;

      // вложено за весь период
      const invested = weeklyCnt * AMOUNT_PER_EXCHANGE * weeks;
      // период в годах
      const years = weeks / 52;
      // итог по сложному
      const revenue = invested * Math.pow(ANNUAL_MULTIPLIER, years);

      totalInvestedEl.textContent = formatMoney(invested);
      approxRevenueEl.textContent = formatMoney(revenue);
   }

   // Сброс выводов
   function clearResults() {
      totalInvestedEl.textContent = "--";
      approxRevenueEl.textContent = "--";
   }

   // Инициализация: очистим выводы
   clearResults();

   // --- ОБРАБОТЧИКИ ---

   // 1) Триггер открытия / закрытия кастом-селекта
   trigger.addEventListener("click", (e) => {
      e.stopPropagation();
      wrapper.classList.toggle("open");
   });

   // 2) Выбор опции в списке
   optionEls.forEach((opt) => {
      opt.addEventListener("click", (e) => {
         // снять выделение у всех
         optionEls.forEach((o) => o.classList.remove("selected"));
         // выделить текущую
         opt.classList.add("selected");
         // обновить видимый текст
         triggerText.textContent = opt.textContent;
         // записать в реальный select
         realSelect.value = opt.dataset.value;
         // закрыть меню
         wrapper.classList.remove("open");
         // сбросить результаты (новые данные ещё не посчитаны)
         clearResults();
      });
   });

   // 3) Событие изменения числа в поле — сбросить результаты
   weeklyInput.addEventListener("input", clearResults);

   // 4) Клик в любом месте вне селекта — закрыть его
   document.addEventListener("click", () => {
      wrapper.classList.remove("open");
   });

   // 5) Нажатие на кнопку Calculate — выполнить расчёт
   btnCalculate.addEventListener("click", recalc);
});
