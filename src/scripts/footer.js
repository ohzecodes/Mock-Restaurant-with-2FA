$(document).ready(function () {
  let r =
    'Call 123-X2D-Y0Q1 to reserve a table or <a href="contact.html#ReserveATable">reserve online </a> ';
  let p = "Developed By <span id=Author></span> for A Web development class";
  let n = "<a href=https://linktr.ee/ohzecodes>Ohzecodes</a>";
  // let $ = jquery;
  $(".important p:first-of-type").html(r);
  $(".important p:last-of-type").html(p);
  $("#Author").html(n);
});
