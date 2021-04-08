<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>document</title>
  <meta content="" name="description">

  <meta content="" name="keywords">


</head>

<body>
  <!-- start Header -->
  <header id="header" class="header fixed-top">
    <div class=" container d-flex justify-content-between   ">

      <div class="logo d-flex align-items-center mt-3">
        <span></span>
      </div>

      <!-- .navbar -->
      <nav id="navbar" class="navbar mx-ul ">
        <ul>
          <li><a href="/ex4/create.php">New User</a></li>
          <li><a href="/ex4/list.html">list Users</a></li>


        </ul>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <html>

  <head>
    <meta charset="UTF-8">


  </head>

  <body>


    <!-- ======= Contact Section ======= -->
    <header class="section-header">
      <h2>Create</h2>
      <p>New User</p>
    </header>
    <div class="container">
      <form method="post" action="create.php">


        <div class="form-group">
          <div id="input_name" class="input">
            <input class="form-control p-2" id="name" type="text" Placeholder="Name" name="name" required>
          </div>


          <br>
          <div class="form-group">
            <div id="input_class" class="input">
              <input class="form-control p-2" type="text" placeholder="last name" name="lastname" required>
            </div>
          </div>

          <br>

          <div class="form-group">
            <div id="input_year" class="input">
              <input class="form-control p-2" id="Tele" type="tele" name="tele" placeholder="Tele">
            </div>
          </div>
          <br>

          <center>
            <div class="id input">
              <input class="btn btn-primary btn-get-started p-2" id="submit" type="submit" name="submit" value="submit">
            </div>
          </center>
      </form>
    </div>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      function get_data()
      {
        $name = $_POST['name'];
        $file_name = 'users' . '.json';

        if (file_exists("$file_name")) {
          $current_data = file_get_contents("$file_name");
          $array_data = json_decode($current_data, true);

          $extra = array(
            'Name' => $_POST['name'],
            'lname' => $_POST['lastname'],
            'Tele' => $_POST['tele'],
          );
          $array_data[] = $extra;
          echo "file exist<br/>";
          return json_encode($array_data);
        } else {
          $datae = array();
          $datae[] = array(
            'Name' => $_POST['name'],
            'lname' => $_POST['lastname'],
            'Tele' => $_POST['tele'],
          );
          echo "file not exist<br/>";
          return json_encode($datae);
        }
      }

      $file_name = 'users' . '.json';

      if (file_put_contents("$file_name", get_data())) {
        echo 'success';
      } else {
        echo 'There is some error';
      }
    }

    ?>

  </body>

  </html>












  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>