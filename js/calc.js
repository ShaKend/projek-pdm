$(document).ready(function () {
  //ketika tombol hitung dipencet
  $("#hitung").click(function () {
    event.preventDefault();
    let berat = $("#berat").val();
    let tinggi = $("#tinggi").val() / 100;
    let usia = $("#usia").val();
    let tinggiSqr = Math.pow(tinggi, 2);
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
        if(data < 18.50){
          $("#indexBMI").html(`<h3>${data} <span class=text-warning>underweight</span></h3>`);
        }else if(18.50 <= data && data <= 25.00){
          $("#indexBMI").html(`<h3>${data} <span class=text-success>normal</span></h3>`);
        }else{
          $("#indexBMI").html(`<h3>${data} <span class=text-danger>obese</span></h3>`);
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
