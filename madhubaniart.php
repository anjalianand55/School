<!DOCTYPE html>
<html class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
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

  <div class="main-container" >
    <header class="page-header">
      <div class="background-image-holder parallax-background"> <img class="background-image" alt="Background Image"
          src='image/p.jpg'>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center"> <span class="text-white alt-font">A Conducive</span>
            <h1 class="text-black">Learning Environment</h1>
            <p class="lead text-black">Take a virtual tour of our campus and witness yourself the energy, encouragement
              and enthusiasm prevailing around</p>
          </div>
        </div>
      </div>

      <!--end of row-->
    </header>
    <center>
      <u><h1 style="margin-bottom:50px; color: #3f72af;">ABOUT MADHUBANI COURSE</h1></u>
    </center>


    <section class="side-image text-heavy clearfix">
      <div class="image-container col-md-5 col-sm-3 pull-left">
        <div class="background-image-holder "
          style='background: transparent url("image/madhubani.jpg") repeat scroll 50% 0%; margin-top:10px;'>
          <img class="background-image" alt="Background Image" src="image/madhubani1.jpg"
            style="display: none; padding-left:20px; margin-right:20px; margin-bottom: 50px;">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 content ltsthppng clearfix">
            <h1>Introduction to Madhubani Painting</h1>
            <hr class="orange">
            <p class="lead">This course is designed to provide an introduction to Madhubani Painting, a traditional art
              form that originated in the Mithila region of Bihar, India. The course will cover the history, techniques,
              and motifs of Madhubani Painting, as well as provide students with the opportunity to create their own
              Madhubani artworks.</p>

          </div>
        </div>
        <!--end of row-->
      </div>
    </section>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
    <center>
      <h1 style="margin-bottom:30px; color: orange;">Course Duration</h1>
      <p><b>The course will be divided into four modules, with each module consisting of four sessions of 2 hours each.
          The course will be conducted over a period of 4 weeks.</b></p>
    </center>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox">

            <h3 class="title">Module 1<br>History and Background of Madhubani Painting</h3>
            <p class="description">
              • Introduction to Madhubani Painting<br>
              • Historical background and origin of Madhubani Painting<br>
              • Types of Madhubani Painting<br>
              • Materials and tools used for Madhubani Painting


              <br>
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox red">

            <h3 class="title">Module 2<br>Techniques of Madhubani Painting</h3>
            <p class="description">• Different styles of Madhubani Painting<br>
              • Basic techniques of Madhubani Painting<br>
              • Preparation of canvas or paper for Madhubani Painting<br>
              • Color mixing and application techniques


            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox green">

            <h3 class="title">Module 3<br>Motifs of Madhubani Painting</h3>
            <p class="description">• Traditional motifs of Madhubani Painting<br>
              • Understanding the symbolism behind the motifs<br>
              • Creating your own motifs and designs<br>
              • Incorporating motifs into your artwork


            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="serviceBox orange">

            <h3 class="title">Module 4<br>Creating your own Madhubani Artwork</h3>
            <p class="description">• Putting all the techniques, motifs and knowledge learned into practice<br>
              • Choosing a subject for your artwork<br>
              • Sketching and outlining your design<br>
              • Painting your artwork in the Madhubani style


            </p>
          </div>
        </div>

        <p><b>Requirements:</b><br>
          • No prior experience in art or painting is required for this course<br>
          • Students will need to have access to basic art supplies such as paper or canvas, paint, and brushes.<br>
          • Access to a computer or tablet with internet connectivity for online classes


          <br><br>

          <b>Learning Outcome:</b> <br>By the end of the course, students will have a basic understanding of Madhubani
          Painting, its history, techniques, and motifs. They will be able to create their own Madhubani artworks, using
          the techniques and motifs learned during the course. Students will also gain an appreciation for the cultural
          significance of Madhubani Painting, and its place in the art world.
        </p> <br>
      </div>
    </div>
    <style>
      :root {
        --main-color: #5EA400;
      }

      .demo {
        background-color: #f1f1f1;
      }

      .serviceBox {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        padding: 25px 35px 40px;
        position: relative;
        z-index: 1;
      }

      .serviceBox:before,
      .serviceBox:after {
        content: "";
        background-color: var(--main-color);
        height: 100px;
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
      }

      .serviceBox:after {
        background-color: #fff;
        height: auto;
        border-radius: 50%/15%;
        top: 0;
        left: 15px;
        right: 15px;
        bottom: 15px;
      }

      .serviceBox .service-icon {
        color: var(--main-color);
        font-size: 40px;
        margin: 0 0 20px;
      }

      .serviceBox .title {
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
        letter-spacing: 0.5px;
        margin: 0 0 10px;
      }

      .serviceBox .description {
        font-size: 13px;
        font-weight: 300;
        line-height: 20px;
        letter-spacing: 0.5px;
        text-align: center;
        margin: 0;
      }

      .serviceBox.red {
        --main-color: #FF4E01;
      }

      .serviceBox.green {
        --main-color: #008B85;
      }

      .serviceBox.orange {
        --main-color: #FF7C19;
      }

      @media only screen and (max-width: 1199px) {
        .serviceBox {
          margin: 0 0 30px;
        }
      }
    </style>
  </div>
  <!--end of row-->
  </div>
  </section>
  <?php include('include/footer.php'); ?>
</body>

</html>