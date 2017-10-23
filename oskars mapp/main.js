function heart() {
  document.getElementById("rightH").style.cssText="top: -38px; left: 38px";
  document.getElementById("midH").style.cssText="top: 0px; left: 0px";
  document.getElementById("leftH").style.cssText="top: -38px; left: -38px;";
}

function Scroll() {
  var top = document.getElementById('button');
  var ypos = window.pageYOffset;

  if (ypos > 540) {
    top.style.cssText="display: inherit; border-bottom: 1px solid black";
  }
  else {
    top.style.cssText ="display: none;";
  }
}
window.addEventListener("scroll", Scroll);
