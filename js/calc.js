$(document).ready(function () {
  //ketika tombol hitung dipencet
  $("#hitung").click(function () {
    event.preventDefault();
    let berat = $("#berat").val();
    let tinggi = $("#tinggi").val() / 100;
    let usia = $("#usia").val();
    let tinggiSqr = Math.pow(tinggi, 2).toFixed(2);
    let hasil = (berat / tinggiSqr).toFixed(2);
    //console.log(hasil);

    //ajax
    $.ajax({
      url: "query/postTest.php",
      type: "post",
      data: {
        hasil: hasil,
      },
      success: function (data) {
        console.log(data);
        $("#berat").val("");
        $("#tinggi").val("");
        $("#usia").val("");
        $("#indexBMI").html(`<h3>${data}<h3>`);
      },
    });
  });

  //hanya numbers only
  $(".numbers").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
});
