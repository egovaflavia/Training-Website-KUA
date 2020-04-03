<?php
session_start();
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Login</title>
  <link rel="icon" type="image/png" href="../images/logokua.png">
  <?php include("komponen/head.php");  ?>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6   ">
                <div class="p-5">
                  <img width="300" src="../images/logokua.png" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                  </div>
                  <form class="user" action="" method="POST">
                    <div class="form-group">
                      <input name="uname" type="text" class="form-control form-control-user" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input name="pass" type="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <button name="login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>

                  <?php
                  if (isset($_POST['login'])) {
                    $ambil = $koneksi->query("SELECT * FROM tbl_admin WHERE username='$_POST[uname]' AND password='$_POST[pass]' ");
                    $a = $ambil->fetch_array();
                    $cek = mysqli_num_rows($ambil);
                    if ($cek == 1) {
                      $_SESSION['admin'] = $a['nama_admin'];
                      echo "<script>
                      alert('Anda Berhasil Login');
                      window.location='index.php';
                      </script>";
                    } else {
                      echo "<script>
                      alert('Anda Gagal Login');
                      window.location='login.php';
                      </script>";
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("komponen/script.php");  ?>

</body>

</html>