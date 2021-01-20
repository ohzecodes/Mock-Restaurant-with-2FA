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
const r = JSON.parse(AjaxGet("../htmldocs/php/menu.php"));
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

  $("#grill .con .food ul").html(grillF);
  $("#sushi .con .food ul").html(sushi);
  $("#caviar .con .food ul").html(caviar);
  $("#platters .con .food ul").html(platter);
  $("#chef .con .food ul").html(chef);
});
