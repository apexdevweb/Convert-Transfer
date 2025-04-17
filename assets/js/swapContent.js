const ongletNav = document.querySelectorAll(".nav__li--link");
const sections = document.querySelectorAll(".main_content");

function showSection(target) {
  sections.forEach((section) => (section.style.display = "none"));
  document.getElementById(target).style.display = "block";
}
showSection("home");
ongletNav.forEach((navLink) => {
  navLink.addEventListener("click", (e) => {
    e.preventDefault();
    const target = navLink.getAttribute("href").substring(1);
    showSection(target);
  });
});
