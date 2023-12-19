$(document).ready(function () {
  //untuk registrasi
  $("#regisBtn").click(function () {
    event.preventDefault();
    let regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}/i;
    let usernameReg = $("#regName").val();
    let useremailReg = $("#regEmail").val();
    let userpassReg = $("#regPass").val();
    console.log("clicked!");

    if (!regex.test(useremailReg) && useremailReg.trim() != "") {
      $("#regisStatus2").html("<small class='text-danger'> Invalid email</small>");
      return false;
    } else if (usernameReg.trim() == "") {
      $("#regisStatus1").html("<small class='text-danger'> Please put name</small>");
      alert("username ga boleh kosong!");
      return false;
    } else if (useremailReg.trim() == "") {
      $("#regisStatus2").html("<small class='text-danger'> Please put email</small>");
      return false;
    } else if (userpassReg.trim() == "") {
      $("#regisStatus3").html("<small class='text-danger'> Please put password</small>");
      return false;
    } else {
      $.ajax({
        url: "query/userQuery.php",
        type: "post",
        data: {
          usernameReg: usernameReg,
          useremailReg: useremailReg,
          userpassReg: userpassReg,
        },
        success: function (data) {
          console.log(data);
          if (data == 1) {
            $("#errorMsg").html("<span class='spinner-border text-success'></span>");
            setTimeout(() => {
              window.location.href = "./konsult.php";
            }, 900);
          } else if (data == 0) {
            $("#errorMsg").html("<span class='text-danger'> Error query</span>");
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log("AJAX Error: " + textStatus, errorThrown);
        },
      });
    }
  });

  //untuk validasi email
  $("#regEmail").on("keypress", function () {
    let useremailReg = $("#regEmail").val();

    $.ajax({
      url: "query/userQuery.php",
      type: "post",
      data: {
        useremailRegValid: useremailReg,
      },
      success: function (data) {
        console.log(data);
        if (data == 1) {
          $("#regisStatus2").html("<small class='text-danger'> Email used!</small>");
        } else if (data == 0) {
          $("#regisStatus2").html("<small class='text-success'> good</small>");
        }
      },
    });
  });

  //login
  $("#loginBtn").click(function () {
    event.preventDefault();
    let emailLog = $("#logEmail").val();
    let passLog = $("#logPass").val();

    $.ajax({
      url: "query/userQuery.php",
      type: "post",
      data: {
        emailLog: emailLog,
        passLog: passLog,
      },
      success: function (data) {
        console.log(data);
        if (data == 1) {
          $("#errorMsg").html("<span class='spinner-border text-success'></span>");
          setTimeout(() => {
            window.location.href = "./konsult.php";
          }, 900);
        } else if (data == 0) {
          $("#errorMsg").html("<span class='text-danger'> Error query</span>");
        }
      },
    });
  });
});
