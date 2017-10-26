var a = document.getElementById("rightH");
var b = document.getElementById("midH");
var c = document.getElementById("leftH");
var d = document.getElementById("heart");
function heart() {
    a, b, c = true;
    d = false;

  if (a, b, c == true) {
    document.getElementById("rightH").style.cssText="top: -38px; left: 38px";
    document.getElementById("midH").style.cssText="top: 0px; left: 0px";
    document.getElementById("leftH").style.cssText="top: -38px; left: -38px;";
    a, b, c = false;
  }
}

setTimeout(timeoutBig, 2800);

function timeoutBig() {
  if (a, b, c, d == false) {
    document.getElementById("heart").style.cssText="left: calc(50% - 75px);";
    document.getElementById("rightH").style.cssText="top: -48px; left: 48px; width: 150px; height: 150px; transition: all 1000ms ease-in-out;";
    document.getElementById("midH").style.cssText="top: 0px; left: 0px; width: 150px; height: 150px; transition: all 1000ms ease-in-out;";
    document.getElementById("leftH").style.cssText="top: -48px; left: -48px; width: 150px; height: 150px; transition: all 1000ms ease-in-out;";
    a, b, c, d = true;
  }
  setTimeout(timeoutSmall, 1000);

}
function timeoutSmall() {
  if (a, b, c, d == true) {
    document.getElementById("heart").style.cssText="left: calc(50% - 50px);";
    document.getElementById("rightH").style.cssText="top: -38px; left: 38px; width: 100px; height: 100px; transition: all 1000ms ease-in-out;";
    document.getElementById("midH").style.cssText="top: 0px; left: 0px; width: 100px; height: 100px; transition: all 1000ms ease-in-out;";
    document.getElementById("leftH").style.cssText="top: -38px; left: -38px; width: 100px; height: 100px; transition: all 1000ms ease-in-out;";
    a, b, c, d = false;

  }
  setTimeout(timeoutBig, 1400);
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

// if( $( "#popupProfile" ).is( ":visible" ) || $( "#popupContent" ).is( ":visible" )  )
// {
//     $('html').click(function() {
//         popdown();
//         profilePopdown();
//     });
//
//     $( '#popupContent' ).click( function( event ){
//         event.stopPropagation();
//     } );
//
//     $( '#popupProfile' ).click( function( event ){
//         event.stopPropagation();
//     } );
// }
