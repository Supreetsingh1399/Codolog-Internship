/* Dropdown Toggle */ 
const dropdown_icon = document.querySelector('.dropdown-button');
dropdown_icon.addEventListener("click", dropdownToggle);

const dropdown_menu = document.querySelector('.navbar-dropdown-list');
function dropdownToggle() {
    if (dropdown_menu.style.display === "" || dropdown_menu.style.display === "none") {
        dropdown_menu.style.display = "block";
    } else {
        dropdown_menu.style.display = "none";
    }
}