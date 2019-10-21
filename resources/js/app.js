/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */
global.$ = global.jQuery = require('jquery');

$(document).ready(function() {
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName('showitem');
    for (i = 0; i < x.length; i++) {
      x[i].style.display = 'none';
    }
    myIndex++;
    if (myIndex > x.length) {
      myIndex = 1;
    }
    x[myIndex - 1].style.display = 'block';
    setTimeout(carousel, 3000);
  }

  const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navlinks');

    burger.addEventListener('click', () => {
      nav.classList.toggle('nav-active');
    });
  };

  navSlide();
});
