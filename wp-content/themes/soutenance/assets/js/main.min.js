window.addEventListener("DOMContentLoaded", function (event) {
  var buttons = [document.getElementById('closebtn'), document.getElementById('burgerMenu')];
  console.log(buttons);
  buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      var mySidebar = document.getElementById('hidden-menu');
      mySidebar.classList.toggle('--open');
    });
  });
});
