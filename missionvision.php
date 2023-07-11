<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Anjul Art Academy</title>
    <?php include('include/head.php'); ?>
</head>

<body>
    <?php include('include/header.php'); ?>

    <div class="main-container">
        <header class="page-header">
            <div class="background-image-holder parallax-background"> <img class="background-image"
                    alt="Background Image" src="assets/frontend/img/campus.jpg">
            </div>
            <div class="container">
                <div class="row">

                    <h1 class="text-white text-center">Anjul Art Academy</h1>


                </div>
            </div>
            <!--end of row-->
        </header>
        <center>
            <h1 style="margin-bottom:50px;">Our Mission and Vision</h1>

        </center>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
        <section class="side-image text-heavy clearfix">
            <div class="image-container col-md-5 col-sm-3 pull-left">
                <!-- <div class="img-part" data-aos="fade-right" data-aos-offset="100"> -->
                <div class="background-image-holder "
                    style='background: transparent url("image/mission3.jpg") repeat scroll 50% 0%; margin-top:10px;'>

                    <img class="background-image" alt="Background Image" src="image/mission3.jpg"
                        style="display: none; padding-left:10px; margin-right:10px;">
                    <!-- </div> -->
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 content ltsthppng clearfix">
                        <div class="serviceBox">
                            <h3 class="title">Our Mission</h3>
                            <p class="description">To provide a comprehensive and challenging education in the arts,
                                with a
                                focus on developing the technical skills, critical thinking abilities, and creativity of
                                our
                                students. We strive to foster a community of artists who are committed to exploring
                                diverse
                                perspectives and pushing boundaries in their artistic practice.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--end of row-->
    </div>
    </section>

    <section class="side-image clearfix abtnew">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content col-sm-8 clearfix ltsthppng">
                    <div class="serviceBox cyan">
                        <h3 class="title">Our Vision</h3>
                        <p class="description">Our vision is to be a leading institution in the arts, recognized for
                            our
                            excellence in teaching, scholarship, and artistic innovation. We aspire to inspire a
                            lifelong passion for the arts in our students and to prepare them to become leaders and
                            innovators in the creative industries. We are dedicated to creating a diverse and
                            inclusive
                            community that celebrates artistic expression and promotes social change through the
                            power
                            of the arts.</p>

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <div class="image-container col-md-5 col-sm-3 pull-right ">
                <!-- <div class="img-part" data-aos="fade-right" data-aos-offset="50"> -->
                <div class="background-image-holder"><img class="background-image" alt="Background Image"
                        src="image/vision.png"> </div>
                <!-- </div> -->
            </div>
    </section>

        <br><br><br>

        <style>
           :root{ --main-color: #0B697E; }
.serviceBox{
    color: var(--main-color);
    background-color: var(--main-color);
    font-family: 'Raleway', sans-serif;
    text-align: center;
    padding: 35px 15px 40px;
    margin: 0 10px;
    position: relative;
    z-index: 1;
}
.serviceBox:before{
    content: '';
    background: repeating-linear-gradient(#fff,#fff 15px,#f5f5f5 15px, #f5f5f5 30px);
    border-radius: 0 50px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    position: absolute;
    left: -10px;
    right: -10px;
    top: 20px;
    bottom: 20px;
    z-index: -1;
}
.serviceBox .service-icon{
    font-size: 50px;
    margin: 0 0 15px;
}
.serviceBox .title{
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.serviceBox .description{
    color: #888;
    font-size: 14px;
    line-height: 25px;
    margin: 0;
}
.serviceBox.green{ --main-color: #5EB25D; }
.serviceBox.orange{ --main-color: #dd711f; }
.serviceBox.blue{ --main-color: #2084db; }
@media only screen and (max-width: 1199px){
    .serviceBox{ margin: 0 10px 40px; }
}

        </style>
        <?php include('include/footer.php'); ?>

</body>

</html>