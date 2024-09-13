const hamburguerMenu = document.querySelector('.hamburguer-menu')
const menu = document.querySelector('.headerBtnGroup');


hamburguerMenu.addEventListener('click', function () {
  menu.classList.toggle('show');
});
