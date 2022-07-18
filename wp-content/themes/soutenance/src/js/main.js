const buttons = [
  document.getElementById('closebtn'),
  document.getElementById('burgerMenu'),
];
buttons.forEach(button => {
  button.addEventListener('click', () => {
    const mySidebar = document.getElementById('hidden-menu');
    mySidebar.classList.toggle('--open');
  });
});