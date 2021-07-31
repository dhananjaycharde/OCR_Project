

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online OCR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v2.2.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.php"><span>Online</span>OCR</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <!-- <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul> -->
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Result Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Result Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<style>
    .row {
  display: flex;
  margin-left:-5px;
  margin-right:-5px;
}

.column {
  flex: 50%;
  padding: 5px;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
</style>
    <section class="inner-page pt-4">
      <div class="container">
      <?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_name);
echo '<div class="row">';
echo '<div class="column">';
echo "<table>";
echo "<h3>Image Upload Success</h3>";
echo '<img src="images/'.$file_name.'" style="width:100%">';
echo "</table>";
echo "</div>";

echo '<div class="column">';
echo "<table>";
echo "<br><h3>OCR after reading</h3><br><pre>";

shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\OCRproject\\images\\'.$file_name.'" out');
$myfile = fopen("out.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("out.txt"));
fclose($myfile);
echo "</pre>";
echo "</table>";
echo "</div>";
echo "</div>";
}
?>
<center>

    <a class="btn btn-success" href="index.php" role="button">Go Back</a>
</center>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/modal-video/js/modal-video.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>