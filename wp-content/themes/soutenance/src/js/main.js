window.addEventListener("DOMContentLoaded", (event) => {
  const buttons = [
    document.getElementById('closebtn'),
    document.getElementById('burgerMenu'),
  ];
  console.log(buttons)
  buttons.forEach(button => {
    button.addEventListener('click', () => {
      const mySidebar = document.getElementById('hidden-menu');
      mySidebar.classList.toggle('--open');
    });
  });
});