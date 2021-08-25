import "bootstrap/js/dist/util";
import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/collapse";

window.onload = function onLoad() {

  if (document.querySelector(".accordeon-section") !== null) {
    const accordionItems = document.querySelectorAll(".accordeon-item__card");

    accordionItems.forEach((accordion) => {
      accordion.addEventListener("click", (e) => {
        e.currentTarget.parentElement.classList.toggle(
          "accordeon-item--active"
        );
        const content = e.currentTarget.nextElementSibling;

        if (content.style.maxHeight) {
          // accordion is open
          content.style.maxHeight = null;
        } else {
          // accordion is currently closed
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    });

    const queryHash = window.location.hash;
    const anchoredId = queryHash.slice(1);

    if (anchoredId) {
      const anchoredItem = document.querySelector(
        `.accordeon-item[data-category-id="${anchoredId}"`
      );
      anchoredItem.classList.toggle("accordeon-item--active");
      const anchoredCollapse = anchoredItem.querySelector(
        ".accordeon-item__collapsing"
      );

      if (anchoredCollapse.style.maxHeight) {
        // accordion is open
        anchoredCollapse.style.maxHeight = null;
      } else {
        // accordion is currently closed
        anchoredCollapse.style.maxHeight = anchoredCollapse.scrollHeight + "px";
      }
    }
  }
};
