/* Dropdown Toggle */
let dropdown_icon = document.querySelector('.dropdown-button');
dropdown_icon.addEventListener("click", dropdownToggle);

const dropdown_menu = document.querySelector('.navbar-dropdown-list');
function dropdownToggle() {
    if (dropdown_menu.style.display === "" || dropdown_menu.style.display === "none") {
        dropdown_menu.style.display = "block";
    } else {
        dropdown_menu.style.display = "none";
    }
}
//profile dropdown
const profile_icon = document.querySelector('.profile-btn');
profile_icon.addEventListener("click", showProfileBox);
function showProfileBox() {
    var profileBox = document.querySelector('.profile-details');
    if (profileBox.style.display === "none" || profileBox.style.display === "") {
        profileBox.style.display = "flex"; // Set to flex instead of block
    } else {
        profileBox.style.display = "none";
    }
}


// Fetch the user details
