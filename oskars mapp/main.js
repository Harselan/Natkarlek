function heart() {
  document.getElementById("rightH").style.cssText="top: calc(35% - 150px);";
  document.getElementById("leftH").style.cssText="left: calc(50% - 150px);";
}
function Scroll() {
  var top = document.getElementById('nav');
  var ypos = window.pageYOffset;

  if (ypos > 540) {
    top.style.cssText="display: inherit;";
  }
  else {
    top.style.cssText ="display: none;";
  }
}
window.addEventListener("scroll", Scroll);
