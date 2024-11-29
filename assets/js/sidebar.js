document.querySelector(".close-sidebar").addEventListener("click", () => {
  document.querySelector(".sidebar").classList.remove("active");
});

document.querySelector(".open-sidebar").addEventListener("click", () => {
  document.querySelector(".sidebar").classList.add("active");
});