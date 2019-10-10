(function () {
  let heightOffsetVal;
  const navToggle = document.getElementById('navToggle');
  const htmlTag = document.getElementsByTagName('html');
  const bodyTag = document.getElementsByTagName('body');
  const navContent = document.getElementById('navContent');
  const navContainer = document.getElementById('navContainer');
  const announcement = document.getElementsByClassName("gc-header-announcement")[0];

  if (!!announcement) {
    const announcementHeight = announcement.offsetHeight;
    const currentHeight = parseInt($(navContent).css('top').split("px")[0]);
    heightOffsetVal = currentHeight + announcementHeight;
  }

  if (navToggle) {

    navToggle.addEventListener('click', () => {
      navToggle.classList.toggle('is-active');
      htmlTag[0].classList.toggle('-nav-open');
      bodyTag[0].classList.toggle('-nav-open');
      navContainer.classList.toggle('-nav-active');
      navContent.classList.toggle('-show');

      if (!!announcement) {
        const topVal = heightOffsetVal + "px";
        const heightVal = 'calc(100vh - ' + heightOffsetVal + "px)";
        $(navContent).css({
          'top': topVal,
          'height': heightVal
        });
      }
    });

    // Ensure classes limiting scrolling are removed if window is sized bigger when nav is open
    window.addEventListener('resize', () => {
      if (document.documentElement.clientWidth > 990) {
        htmlTag[0].classList.remove('-nav-active');
        bodyTag[0].classList.remove('-nav-active');
        navContainer.classList.remove('-nav-active');
        navContent.classList.remove('-show');
        navToggle.setAttribute('aria-expanded', 'false');
      }
    })
  }
})();
