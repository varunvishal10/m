    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 500,
        interval: 2300
      });

    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    $(document).ready(function () {
  $('.menu-toggler').on('click',function () {
    $(this).toggleClass('open');
    $('.top-nav').toggleClass('open');
  });
});
