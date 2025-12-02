// Highlight current page in nav
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("nav a");
    const path = window.location.pathname.split("/").pop() || "index.html";

    links.forEach(link => {
        link.classList.remove("active");
        link.removeAttribute("aria-current");
        if (link.getAttribute("href") === path) {
            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        }
    });

    // Form submission handling
    const form = document.getElementById("repairForm");
    const successMsg = document.getElementById("successMessage");

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            this.style.display = "none";
            successMsg.style.display = "block";
        });
    }
});
