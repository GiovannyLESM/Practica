const navToggle = document.querySelector(".naver-toggle")
const navMenu = document.querySelector(".naver-menu")
navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("naver-menu_visible");
});