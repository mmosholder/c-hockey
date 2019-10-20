(function() {
  console.log('alive');
  let navToggle = document.getElementById('navToggle');
  let htmlTag = document.getElementsByTagName('html');
  let bodyTag = document.getElementsByTagName('body');
  let navContent = document.getElementById('navContent');
  let navContainer = document.getElementById('navContainer');

  if (navToggle) {
    navToggle.addEventListener('click', () => {
      console.log('click');
      navToggle.classList.toggle('is-active');
      htmlTag[0].classList.toggle('-nav-open');
      bodyTag[0].classList.toggle('-nav-open');
      navContainer.classList.toggle('-nav-active');
      navContent.classList.toggle('-show');
    });

    window.addEventListener('resize', () => {
      if (document.documentElement.clientWidth > 900) {
        navToggle.setAttribute('aria-expanded', 'false');
        htmlTag[0].classList.remove('-nav-open');
        bodyTag[0].classList.remove('-nav-open');
        navContainer.classList.remove('-nav-active');
        navContent.classList.remove('-show');
      }
    });
  }
}());