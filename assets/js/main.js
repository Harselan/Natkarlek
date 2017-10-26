function heart() {
  document.getElementById("rightH").style.cssText="top: -38px; left: 38px";
  document.getElementById("midH").style.cssText="top: 0px; left: 0px";
  document.getElementById("leftH").style.cssText="top: -38px; left: -38px;";
}
// function Scroll() {
//   var top = document.getElementById('');
//   var ypos = window.pageYOffset;
//
//   if (ypos > 540) {
//     top.style.cssText="background: green";
//   }
//   else {
//     top.style.cssText ="background: red";
//   }
// }
// window.addEventListener("scroll", Scroll);

//################ SLIDE ####################


function popup() {
    var popup = document.getElementById("popupContent");
    popup.style.visibility='visible';
}

function popdown()
{
    var popup = document.getElementById("popupContent");
    popup.style.visibility='hidden';
}

function profilePopup() {
    var popup = document.getElementById("popupProfile");
    popup.style.visibility='visible';
}

function profilePopdown()
{
    var popup = document.getElementById("popupProfile");
    popup.style.visibility='hidden';
}
