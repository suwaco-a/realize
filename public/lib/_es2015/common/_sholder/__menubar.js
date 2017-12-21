export default function () {

  const body = document.querySelector('body');
  const gnav = document.querySelector('.gnav');
  const menubar = document.querySelector('.menubar');
  const smenu = document.querySelector('.smenu');

  smenu.addEventListener("pointerdown", function(ev) {
    menubar.classList.toggle('js-active');
    smenu.classList.toggle('js-active');
    gnav.classList.toggle('js-active');
    gnavSlide_in(gnav);
  });




  function gnavSlide_in(el){

    const bg = el.animate([
      {opacity: 0},
      {opacity: 1}
    ], {
      direction: 'alternate',
      duration: 300,
      easing: 'ease'
    });
    const nav = el.children[0].animate([
      {opacity: 0},
      {opacity: 1}
    ], {
      direction: 'alternate',
      duration: 300,
      easing: 'ease'
    });

    body.style.pointerEvents = "none";
    bg.play();
    nav.play();
    bg.addEventListener('finish', (ev) => {
      body.style.pointerEvents = "auto";
    });

  };

};
