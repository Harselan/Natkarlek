var a = document.getElementById("rightH");
var b = document.getElementById("midH");
var c = document.getElementById("leftH");
var d = document.getElementById("heart");

function heart() {
  a, b, c = true;
  d = false;

  if (a, b, c == true) {
    a.style.cssText="top: -38px; left: 38px";
    b.style.cssText="top: 0px; left: 0px";
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
  setTimeout(timeoutBig, 1000);
}

//##### POP #####
function popUp() {
  document.getElementById("messagePopup").style.cssText="display: inherit";
}

function popDown() {
  document.getElementById("messagePopup").style.cssText="display: none";
}

function profilePopup() {
  document.getElementById("profilePopup").style.cssText="display: inherit";
}

function profilePopdown() {
  document.getElementById("profilePopup").style.cssText="display: none";
}

function loginPopup() {
  document.getElementById("loginPopup").style.cssText="display: inherit";
}

function loginPopdown() {
  document.getElementById("loginPopup").style.cssText="display: none";
}

$( document ).mouseup( function( e )
{
    var container = [ $( "#loginPopup" ), $( "#profilePopup" ), $( "#messagePopup" ) ];
    for( var i = 0; i < container.length; i++ )
    {
        // if the target of the click isn't the container nor a descendant of the container
        if ( !container[i].is( e.target ) && container[i].has( e.target ).length === 0)
        {
            container[i].css( "display", "none" );
        }
    }
});

function Scroll() {
  var top = document.getElementById("buttons");
  var ypos = window.pageYOffset;

  if (ypos > 545) {
    top.style.cssText="position: fixed; top: 0px;";
  }
  else {
    top.style.cssText ="position: absolute";
  }
}
window.addEventListener("scroll", Scroll);

//################ SLIDE ####################
