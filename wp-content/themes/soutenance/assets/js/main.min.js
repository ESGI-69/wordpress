var buttons = [document.getElementById('closebtn'), document.getElementById('burgerMenu')];
buttons.forEach(function (button) {
  button.addEventListener('click', function () {
    var mySidebar = document.getElementById('hidden-menu');
    mySidebar.classList.toggle('--open');
  });
});
