let leftNav = document.querySelector('nav.left-nav');

function showHideNav() {
  if (leftNav.style.left == ' ' || leftNav.style.left == '0px') {
    leftNav.style.left = '-100vw';
  } else {
    leftNav.style.left = '0';
  }
}

document.querySelector('nav.left-nav .button-mobile')
.addEventListener('click', function() {
  showHideNav();
});

document.querySelector('nav.left-nav .stub-mobile')
.addEventListener('click', function() {
  showHideNav();
});