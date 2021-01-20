const script = Object();
script.src = "https://code.jquery.com/jquery-3.5.1.js";
script.integrity = "sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=";
script.crossorigin = "anonymous";
script.defer;

let found = false;

let x = document.createElement("script");
x.src = script.src;
x.integrity = script.integrity;
x.crossOrigin = script.crossorigin;
document.head.insertBefore(x, document.head.firstChild);

$(document).ready(function () {
  let r =
    'Call 123-X2D-Y0Q1 to reserve a table or <a href="contact.html#ReserveATable">reserve online </a> ';
  let p = "Developed By <span id=aurthor></span> for A Web development class";
  let n = "<a href=https://linktr.ee/ohzecodes>Ohzecodes</a>";
  // let $ = jquery;
  $(".important p:first-of-type").html(r);
  $(".important p:last-of-type").html(p);
  $("#aurthor").html(n);
  $("").css();
});
