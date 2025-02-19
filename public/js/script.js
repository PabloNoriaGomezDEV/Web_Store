// script.js

document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const menuDropdown = document.getElementById("menuDropdown");

    menuButton.addEventListener("click", function () {
        if (menuDropdown.classList.contains("d-none")) {
            menuDropdown.classList.remove("d-none");
        } else {
            menuDropdown.classList.add("d-none");
        }
    });

    document.addEventListener("click", function (event) {
        if (!menuButton.contains(event.target) && !menuDropdown.contains(event.target)) {
            menuDropdown.classList.add("d-none");
        }
    });
});
