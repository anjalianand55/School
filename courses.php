<!DOCTYPE html>
<html class="no-js">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses - Anjul Art Academy</title>
  <?php include('include/head.php'); ?>
</head>

<body>
  <?php include('include/header.php'); ?>

 
  <style type="text/css">
    .sidebar-widget li::after {
      content: "\7d";
      font-family: 'ElegantIcons';
      float: right;
    }

    .sidebar-widget li:last-child {
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
      padding-bottom: 16px;
    }

    @media only screen and (max-device-width: 480px) {
      .sidebar-widget li:last-child {
        border-bottom: none;
        padding-bottom: 0px;
      }
    }
  </style>

  <div class="main-container">
    <header class="page-header">
      <div class="background-image-holder parallax-background"> <img class="background-image" alt="Background Image" src='image/p.jpg'>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center"> <span class="text-white alt-font">A Conducive</span>
            <h1 class="text-black">Learning Environment</h1>
            <p class="lead text-black">Take a virtual tour of our campus and witness yourself the energy, encouragement and enthusiasm prevailing around</p>
          </div>
        </div>
      </div>

      <!--end of row-->
    </header>

    <center>
      <h1 style="margin-bottom:0px;">ABOUT COURSES</h1>
    </center>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox">
            <div class="service-image">
              <a href="watercolor.php">
                <img src="image/watercolor.jpg" alt="">
              </a>
            </div>
            <div class="service-content">
              <h3>WATERCOLOR</h3>
              <p>
              Watercolors are typically applied to paper, and the technique involves layering and blending colors to create subtle and nuanced effects.
              </p>
            </div>
            <div class="read">
              <a href="watercolor.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox">
            <div class="service-image">
              <a href="sketching.php">
                <img src="image/sketching.jpg" alt="">
              </a>
            </div>
            <div class="service-content">
              <h3>SKETCHING</h3>
              <p>
              Sketching is the process of drawing a rough or unfinished outline of an object or scene using various drawing tools such as pencils, charcoal, or pen. 
              </p>
            </div>
            <div class="read">
              <a href="sketching.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox">
            <div class="service-image">
              <a href="oilpastel.php">
                <img src="image/oilpastel2.jpg" alt="">
              </a>
            </div>
            <div class="service-content">
              <h3>OIL PASTEL</h3>
              <p>
              Oil pastels can be applied to a variety of surfaces such as paper, canvas, or board, and they are known for their vibrant colors and ability to blend easily.
              </p>
            </div>
            <div class="read">
              <a href="oilpastel.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox">
            <div class="service-image">
              <a href="madhubaniart.php">
                <img src="image/madhubani.jpg" alt="">
              </a>
            </div>
            <div class="service-content">
              <h3>MADHUBANI PAINTING</h3>
              <p>
              Madhubani art often depicts scenes from Hindu mythology or local folklore, and the style is known for its intricate patterns and bold use of color.
              </p>
            </div>
            <div class="read">
              <a href="madhubaniart.php">learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .serviceBox {
        text-align: center;
        margin: 20px 0 30px 0;
      }

      .serviceBox .service-image>a>img {
        width: 180px;
        height: auto;
        border-radius: 50%;
        transition: all 0.2s ease-in-out 0s;
      }

      .serviceBox .service-content h3 {
        text-transform: uppercase;
        font-size: 17px;
        font-weight: bold;
        letter-spacing: 1.25px;
        margin-bottom: 16px;
        color: #373e44;
        transition: all 0.21s ease 0s;
      }

      .serviceBox .service-content p {
        padding: 0 35px;
        color: #616161;
        line-height: 1.7;
      }

      .serviceBox .read {
        margin-top: 20px;
      }

      .serviceBox .read>a {
        text-transform: uppercase;
        color: #dc005a;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 1px;
        text-decoration: none;
        position: relative;
        transition: all 0.16s ease 0s;
      }

      .serviceBox .read>a:hover:after {
        content: "\f061";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 8px;
        position: absolute;
        right: -13px;
        top: 0px;
      }

      .serviceBox:hover .service-image>a>img {
        padding: 8px;
        border: 3px solid #7a4b94;
        transition: all 0.2s ease-in-out 0s;
      }

      .serviceBox:hover .service-content h3,
      .serviceBox:hover .read>a {
        color: #7a4b94;
      }
    </style>
    <!-- About Section Start -->
    <section class="pricing-1 bg-secondary-1" style="margin-top:0px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1 style="margin-bottom:0px;">COURSES</h1>
            <h6>Time</h6>
          </div>
        </div>
        <!--end of row-->
        <div class="row clearfix pricing-tables" style="margin-bottom: 10px; margin-right: 20px; border-radius: 5px !important; border: 0px solid rgba(51, 51, 51, 0.2) !important;">
          <div class="col-md-3  col-sm-6 no-pad-right">
            <div class="pricing-table mfa-price">
              <div class="price"><span class="amount">Watercolor Painting</span></div>
              <ul class="features">
                <li>Duration : <strong>2 Years</strong></li>
                <li>Qualification : <strong>12th Pass</strong></li>
                <li>Timing : <strong>09:00 AM to 01:00 PM</strong></li>
                <!--<li>Fee : <strong>Rs. 11,250 /month</strong></li> -->
              </ul>

            </div>
          </div>
          <div class="col-md-3  col-sm-6 no-pad">
            <div class="pricing-table mfa-price">
              <div class="price"><span class="amount">Sketching</span></div>
              <ul class="features">
                <li>Duration : <strong>2 Years</strong></li>
                <li>Qualification : <strong>12th Pass</strong></li>
                <li>Timing : <strong>09:00 AM to 01:00 PM</strong></li>
              </ul>

            </div>
          </div>
          <div class="col-md-3 col-sm-6 no-pad">
            <div class="pricing-table mfa-price">
              <div class="price"><span class="amount">Oil Pastel Painting</span></div>
              <ul class="features">
                <li>Duration : <strong>2 Years</strong></li>
                <li>Qualification : <strong>12th Pass</strong></li>
                <li>Timing : <strong>09:00 AM to 01:00 PM</strong></li>
              </ul>

            </div>
          </div>
          <div class="col-md-3 col-sm-6 no-pad-left">
            <div class="pricing-table mfa-price">
              <div class="price"><span class="amount">Madhunani Painting</span></div>
              <ul class="features">
                <li>Duration : <strong>2 Years</strong></li>
                <li>Qualification : <strong>12th Pass</strong></li>
                <li>Timing : <strong>09:00 AM to 01:00 PM</strong></li>
              </ul>

            </div>
          </div>
        </div>
        <!--end of row-->
      </div>
    </section>

    <?php include('include/footer.php'); ?>
</body>

</html>