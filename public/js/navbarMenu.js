// var y const
const profilePicture = document.querySelector('#user-menu-button-profile');
const dropMenuPanel = document.querySelector('#user-dropdown-panel');

// event listeners
profilePicture.addEventListener('click', togglePanelMenu);

// toggle dropdown user panel
function togglePanelMenu() {
    dropMenuPanel.classList.toggle('hidden');
}