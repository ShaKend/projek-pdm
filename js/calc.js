$(document).ready(function () {
  //ketika tombol hitung dipencet
  $("#hitung").click(function () {
    $("#changed").text("BMI Anda");
  });

  //hanya numbers only
  $(".numbers").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
});
