$(document).ready(function () {
  //terima input
  let berat = $("#berat");
  let tinggi = $("#tinggi");
  let usia = $("#usia");

  $("#hitung").prop("disabled", true);

  function validate() {
    if (berat.val() == "" || tinggi.val() == "") {
      $("#hitung").prop("disabled", true);
    } else {
      $("#hitung").prop("disabled", false);
    }
  }

  berat.on("input", validate);
  tinggi.on("input", validate);

  //ketika tombol hitung dipencet
  $("#hitung").click(function () {
    event.preventDefault();
    let beratVal = berat.val();
    let tinggiVal = tinggi.val();
    let usiaVal = usia.val();
    let tinggiMtr = tinggiVal / 100;
    let tinggiSqr = Math.pow(tinggiMtr, 2);
    let hasil = (beratVal / tinggiSqr).toFixed(2);

    //ajax
    $.ajax({
      url: "query/postTest.php",
      type: "post",
      data: {
        hasil: hasil,
      },
      success: function (data) {
        console.log(data);
        if (data < 18.5) {
          $("#indexBMI").html(`<h3>${data} <span class=text-warning>underweight</span></h3>`);
          $("#details").html("<p>Anda berada dalam kategori kekurangan berat badan. Hubungi dokter lebih lanjut mengenai pola makan dan gizi yang baik untuk meningkatkan kesehatan.</p>");
        } else if (18.5 <= data && data <= 25.0) {
          $("#indexBMI").html(`<h3>${data} <span class=text-success>normal</span></h3>`);
          $("#details").html("<p> Anda berada dalam kategori berat badan yang normal. Tetap pertahankan berat badan Anda dan jaga berat badan Anda dengan mengatur keseimbangan antara pola makan dan aktivitas fisik Anda. </p>");
        } else {
          $("#indexBMI").html(`<h3>${data} <span class=text-danger>obese</span></h3>`);
          $("#details").html("<p>Anda berada dalam kategori obesitas. Segera kunjungi dokter untuk dilakukan pemeriksaan kesehatan lanjutan untuk mengetahui risiko yang Anda miliki terkait berat badan Anda.</p>");
        }
        console.log("data kamu segitu!");
      },
    });
  });

  //hanya numbers only
  $(".numbers").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
});
