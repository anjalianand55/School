<?php include "connectivity.php";
if (isset($_POST['save_btnn'])) {
  // $id=$_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];


  $query = "INSERT INTO `contact`(`name`, `email`, `mobile`, `message`) VALUES ('	$name','$email','$mobile','$message')";
  // $data = mysqli_query($myconn, $query);


  if (mysqli_query($myconn, $query)) {
    echo "new record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($myconn);
  }
}
?>


<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - Anjul Art Academy</title>

  <?php include('include/head.php'); ?>


</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWM9ZX" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <?php include('include/header.php'); ?>
  <div class="main-container">
  <header class="page-header">
        <div class="background-image-holder parallax-background"> <img class="background-image" alt="Background Image" src="image/p.jpg">
        </div>
        <div class="container">
        <div class="col-sm-12 text-center">
                 
                  <h1 class="text-black">Anjul Art Academy</h1>
                  <p class="lead text-black">We are located from all over India </p>
               </div>
        </div>
    <!--end of row-->
    </header>


  </div>

  <div class="container animated fadeIn">

    <div class="row">
      <u><h1 class="header-title"> Contact us </h1></u>
      <hr>
      <div class="col-sm-12" id="parent">
        <div class="col-sm-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14386.799869016406!2d85.05669219696355!3d25.648081561098422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57e9cd996829%3A0x4444875b39054e9b!2sschool%20of%20arts%20and%20crafts!5e0!3m2!1sen!2sin!4v1682837487709!5m2!1sen!2sin"
            width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-sm-6">
          <form action=" " class="contact-form" method="post">

            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
            </div>


            <div class="form-group form_left">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="phone" name="mobile" placeholder="Mobile No." required="">
            </div>
            <div class="form-group">
              <textarea class="form-control textarea-contact" rows="5" id="comment" name="message"
                placeholder="Type Your Message/Feedback here..." required=""></textarea>
              <br>
              <button class="btn btn-default btn-send" name="save_btnn"> Send Message </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container second-portion">
      <div class="row">
        <!-- Boxes de Acoes -->
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-envelope" aria-hidden="true"> <a
                    href="mailto:anandanjali520@gmail.com"></i></div>
              <div class="info">
                <h3 class="title">MAIL</h3>
                <p>
                  <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:anandanjali520@gmail.com"></a>&nbsp
                  anandanjali520@gmail.com
                  <br>
                  <br><br>
                </p>

              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-phone" aria-hidden="true"> <a href="tel:08709602821"></i></div>
              <div class="info">
                <h3 class="title">CONTACT</h3>
                <p>
                  <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:8709602821"></a>&nbsp 08709602821
                  <br>
                  <br>
                  <br>
                </p>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fas fa fa-map-marker" aria-hidden="true"><a href="Unit 5, Nelson Mandela Avenue, Windhoek,
                  Namibia"></i></div>
              <div class="info">
                <h3 class="title">ADDRESS</h3>
                <p>
                  <i class="fas fa fa-map-marker" aria-hidden="true"></i><a
                    href="https://goo.gl/maps/R7Wbm1C9ugx8Rixi6"></a>WARD NO.36 NASRIGANJ <br>
                  J3XF+63Q, Near Birla Instute, Danapur Nizamat, Patna, Bihar 800018
                  <br>

                </p>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>
        <!-- /Boxes de Acoes -->
      </div>
    </div>
    <style>
      /* Conatct start */

      .header-title {
        text-align: center;
        color: #34888c;
      }

      #tip {
        display: none;
      }

      .fadeIn {
        animation-duration: 3s;
      }

      .form-control {
        border-radius: 0px;
        border: 1px solid #EDEDED;
      }

      .form-control:focus {
        border: 1px solid #34888c;
      }

      .textarea-contact {
        resize: none;
      }

      .btn-send {
        border-radius: 0px;
        border: 1px solid #34888c;
        background: #00bfff;
        color: #fff;
      }

      .btn-send:hover {
        border: 1px solid #00bfff;
        background: #fff;
        color: #00bfff;
        transition: background 0.5s;
      }

      .second-portion {
        margin-top: 50px;
      }

      @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
      @import "http://fonts.googleapis.com/css?family=Roboto:400,500";

      .box>.icon {
        text-align: center;
        position: relative;
      }

      .box>.icon>.image {
        position: relative;
        z-index: 2;
        margin: auto;
        width: 88px;
        height: 88px;
        border: 8px solid white;
        line-height: 88px;
        border-radius: 50%;
        background: #34888c;
        vertical-align: middle;
      }

      .box>.icon:hover>.image {
        background: #333;
      }

      .box>.icon>.image>i {
        font-size: 36px !important;
        color: #fff !important;
      }

      .box>.icon:hover>.image>i {
        color: white !important;
      }

      .box>.icon>.info {
        margin-top: -24px;
        background: rgba(0, 0, 0, 0.04);
        border: 1px solid #e0e0e0;
        padding: 15px 0 10px 0;
        min-height: 163px;
      }

      .box>.icon:hover>.info {
        background: rgba(0, 0, 0, 0.04);
        border-color: #e0e0e0;
        color: white;
      }

      .box>.icon>.info>h3.title {
        font-family: "Robot", sans-serif !important;
        font-size: 16px;
        color: #222;
        font-weight: 700;
      }

      .box>.icon>.info>p {
        font-family: "Robot", sans-serif !important;
        font-size: 13px;
        color: #666;
        line-height: 1.5em;
        margin: 20px;
      }

      .box>.icon:hover>.info>h3.title,
      .box>.icon:hover>.info>p,
      .box>.icon:hover>.info>.more>a {
        color: #222;
      }

      .box>.icon>.info>.more a {
        font-family: "Robot", sans-serif !important;
        font-size: 12px;
        color: #222;
        line-height: 12px;
        text-transform: uppercase;
        text-decoration: none;
      }

      .box>.icon:hover>.info>.more>a {
        color: #fff;
        padding: 6px 8px;
        background-color: #63B76C;
      }

      .box .space {
        height: 30px;
      }

      @media only screen and (max-width: 768px) {
        .contact-form {
          margin-top: 25px;
        }

        .btn-send {
          width: 100%;
          padding: 10px;
        }

        .second-portion {
          margin-top: 25px;
        }
      }

      /* Conatct end */
    </style>



  </div>

  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU2GugB0vLWaXp8SyG9k0nIy24AsWW048"></script>

  <?php include('include/footer.php'); ?>

  <section class="social-bar no-pad">

    <div class="col-md-12 col-sm-12 col-xs-3 no-pad">
      <a href="https://www.instagram.com/anjul_art/">
        <div class="link bg-instagram">
          <div class="initial">
            <i class="icon social_instagram"></i>
          </div>
          <div class="hover-state hidden-xs">
            <span class="text-white">Follow On Instagram</span>
          </div>
        </div>
      </a>
    </div><!--end of individual link-->

    <div class="col-md-12 col-sm-12 col-xs-3 no-pad">
      <a href="https://www.facebook.com/anjaliii.anand">
        <div class="link bg-facebook">
          <div class="initial">
            <i class="icon social_facebook"></i>
          </div>

          <div class="hover-state hidden-xs">
            <span class="text-white">Friends on Facebook</span>
          </div>
        </div>
      </a>
    </div><!--end of individual link-->

    <div class="col-md-12 col-sm-12 col-xs-3 no-pad">
      <a href="https://www.youtube.com/@ArtWithAnjali">
        <div class="link bg-youtube">
          <div class="initial">
            <i class="icon social_youtube"></i>
          </div>

          <div class="hover-state hidden-xs">
            <span class="text-white">Shots on Youtube</span>
          </div>
        </div>
      </a>
    </div><!--end of individual link-->

    <div class="col-md-12 col-sm-12 col-xs-3 no-pad">
      <a href="https://wa.me/8709602821" target="_blank">
        <div class="link bg-twitter">
          <div class="initial">
            <i class="icon fa fa-whatsapp"></i>
          </div>

          <div class="hover-state hidden-xs">
            <span class="text-white">send message on Whatsaap</span>
          </div>
        </div>
      </a>
    </div><!--end of individual link-->
  </section>

  <style type="text/css">
    #whathapp {
      position: fixed;
      bottom: 60px;
      right: 20px;
      z-index: 99;
    }

    #whathapp img {
      -webkit-filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, .4));
      filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, .4));
    }
  </style>
</body>

</html>