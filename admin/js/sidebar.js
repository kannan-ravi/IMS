document.querySelector(".close-sidebar").addEventListener("click", () => {
  document.querySelector(".sidebar").classList.remove("active");
  document.querySelector(".sidebar-overlay").classList.remove("active");
});

document.querySelector(".sidebar-overlay").addEventListener("click", () => {
  document.querySelector(".sidebar").classList.remove("active");
  document.querySelector(".sidebar-overlay").classList.remove("active");
});

document.querySelector(".open-sidebar").addEventListener("click", () => {
  document.querySelector(".sidebar").classList.add("active");
  document.querySelector(".sidebar-overlay").classList.add("active");
});

document
  .querySelector(".sidebar-sub-list-button")
  .addEventListener("click", () => {
    document.querySelector(".sidebar-sub-lists-container").classList.toggle("active");
  });
