/*LOANDING PAGE*/

const i = setInterval(function () {
        
  clearInterval(i);

  // O código desejado é apenas isto:
  document.getElementsByClassName("loading")[0].style.display = "none";
  document.getElementsByClassName("conteudo")[0].style.display = "block";

}, 2000);

/*MENU ATIVADO*/

const currentLocation = window.location.href;
const menuItem = document.querySelectorAll('.navbar .menu a');
const menuLength = menuItem.length;

for(let i = 0; i < menuLength; i++) {
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "active";
  }
}