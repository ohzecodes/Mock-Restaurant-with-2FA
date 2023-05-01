console.log("ajax menu fetch running");

AjaxGet = function (url) {
  var result = $.ajax({
    type: "GET",
    url: url,
    param: "{}",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    async: false,
    success: function (data) {
      // nothing needed here
    },
  }).responseText;
  return result;
};
const r = JSON.parse(AjaxGet("../htdocs/auth/menu.php"));
console.log(r.Grill);
$(document).ready(function () {
  var grillF = $.map(r.grill, function (x) {
    return `<li> ${x} </li>`;
  });

  var sushi = $.map(r.sushi, function (x) {
    return `<li> ${x} </li>`;
  });
  var caviar = $.map(r.caviar, function (x) {
    return `<li> ${x} </li>`;
  });
  var platter = $.map(r.platter, function (x) {
    return `<li> ${x} </li>`;
  });

  var chef = $.map(r.chef, function (x) {
    return `<li> ${x} </li>`;
  });

  $("#grill  .food ul").html(grillF);
  $("#sushi  .food ul").html(sushi);
  $("#caviar .food ul").html(caviar);
  $("#platters .food ul").html(platter);
  $("#chef .food ul").html(chef);
});
