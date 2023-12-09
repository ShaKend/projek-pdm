$(document).ready(function () {
  //ketika tombol hitung dipencet
  $("#hitung").click(function () {
    event.preventDefault();
    let berat = $("#berat").val();
    let tinggi = $("#tinggi").val() / 100;
    let tinggiSqr = Math.pow(tinggi, 2).toFixed(2);
    let hasil = (berat / tinggiSqr).toFixed(2);
    //console.log(hasil);

    //ajax
    $.ajax({
      URL: "query/postTest.php",
      type: "post",
      data: {
        berat: berat,
        tinggi: tinggi,
        hasil: hasil,
      },
      success: function (data) {
        console.log(data);
      },
    });
  });

  //hanya numbers only
  $(".numbers").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
});
