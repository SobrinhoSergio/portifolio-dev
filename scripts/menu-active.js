/*MENU ATIVADO*/

const currentLocation = window.location.href;
const menuItem = document.querySelectorAll('.navbar .menu a');
const menuLength = menuItem.length;

for(let i = 0; i < menuLength; i++) {
if(menuItem[i].href === currentLocation){
    menuItem[i].className = "active";
}
}