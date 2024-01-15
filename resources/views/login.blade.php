<!doctype html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets_login/fonts/icomoon/style.css">

  <link rel="stylesheet" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets_login/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets_login/css/bootstrap.min.css">

  <!-- Style -->
  <link id="css-link" rel="stylesheet" href="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets_login/css/style.css?v=999999">

  <title>Login #2</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2 bg-red d-flex justify-content-end">
      <img src="http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets/img/Frame 98699.png" alt="" width="470">
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h4 class="text-center"><strong>SIMS Web App</strong></h4>
            <h3 class="text-center mt-3 mb-3"><strong>Masuk atau buat akun untuk memulai</strong></h3>
            <div class="form-group first">
              <label for="username">Username</label>
              <input type="text" class="form-control" placeholder="Your Username" id="username_val">
            </div>
            <div class="form-group last mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Your Password" id="password_val">
            </div>

            <button onclick="loginUserACC()" class="btn btn-block btn-red">Log In</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<script>
  function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  var version = getRandomNumber(100000, 999999);

  $("#css-link").attr("href", "http://localhost/nutech_integrasi_dio_wijaya_putra/public/assets_login/css/style.css?v=" + version);

  function loginUserACC() {
    var userHelps = $("#username_val").val();
    var passHelps = $("#password_val").val();

    if (userHelps != "" && passHelps != "") {
      var formData = new FormData();

      formData.append('username', userHelps);
      formData.append('password', passHelps);

      $.ajax({
        type: "GET",
        url: "/logIn/" + userHelps + "/" + passHelps,
        data: formData,
        enctype: 'multipart/form-data',
        cache: false,
        processData: false,
        async: false,
        contentType: false,
        success: function(response) {
          console.log(response);

          if (response == 0 || response == 1) {
            Swal.fire({
              title: 'Incorrect username or password!',
              icon: 'error'
            })
          } else {
            userData(response);
          }
        },
        error: function(response) {
          alert("LOGIN FAILED!");
        }
      });
    } else {
      Swal.fire({
        title: 'Please fill the required form!',
        icon: 'error'
      });
    }
  }

  function userData(id_user) {
    var formData = new FormData();

    $.ajax({
      type: "GET",
      url: "/logInData/" + id_user,
      data: formData,
      enctype: 'multipart/form-data',
      cache: false,
      processData: false,
      async: false,
      contentType: false,
      success: function(response) {
        window.location.href = "/index?id_user=" + response[0].id_user;
      },
      error: function(response) {
        alert("LOGIN DATA FAILED");
      }
    });
  }
</script>