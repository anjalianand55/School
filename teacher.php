<style>
    .our-team {
        box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.15);
        text-align: center;
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease-in-out 0s;
        
    }

    .our-team .pic:before {
        content: "";
        background: #716a9e;
        position: absolute;
        top: 10px;
        left: 10px;
        bottom: 10px;
        right: 10px;
        opacity: 0.78;
        transform: scale(0);
        transition: all 0.3s ease-in-out 0s;

    }

    .our-team:hover .pic:before {
        transform: scale(1);
    }

    .our-team .pic img {
        width: 100%;
        height: auto;
    }

    .our-team .social {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 100%;
        position: absolute;
        top: 40%;
        opacity: 0;
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team:hover .social {
        opacity: 1;
    }

    .our-team .social li {
        display: inline-block;
        position: relative;
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team .social li:nth-child(1) {
        transform: translate3d(22px, -19px, 0px);
    }

    .our-team:hover .social li:nth-child(1) {
        transform: translate3d(62px, -19px, 0px);
    }

    .our-team .social li:nth-child(2) {
        transform: translate3d(36px, 38px, 0px);
    }

    .our-team:hover .social li:nth-child(2) {
        transform: translate3d(36px, 8px, 0px);
    }

    .our-team .social li:nth-child(3) {
        transform: translate3d(-18px, -75px, 0px);
    }

    .our-team:hover .social li:nth-child(3) {
        transform: translate3d(-18px, -46px, 0px);
    }

    .our-team .social li:nth-child(4) {
        transform: translate3d(-5px, -19px, 0px);
    }

    .our-team:hover .social li:nth-child(4) {
        transform: translate3d(-43px, -19px, 0px);
    }

    .our-team .social li a {
        display: block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: #333;
        font-size: 16px;
        color: #fff;
        margin: 0 15px 0 0;
        transform: rotate(45deg);
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team .social li a:hover {
        line-height: 35px;
        background: #fff;
        color: #333;
        transform: rotate(-45deg);
    }

    .our-team .social li a i {
        transform: rotate(-45deg);
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team .social li a:hover i {
        transform: rotate(45deg);
    }

    .our-team .team-content {
        padding: 15px 10px;
        background: #fff;
        position: relative;
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team .title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        text-transform: uppercase;
        margin: 0 0 12px 0;

    }

    .our-team small {
        display: block;
        font-size: 14px;
        color: #999;
        margin-bottom: 8px;

    }

    .our-team .team-layer {
        width: 100%;
        padding: 34px 10px;
        background: #f7f7f7;
        border-bottom: 2px solid #716a9e;
        position: absolute;
        bottom: -50px;
        left: 0;
        opacity: 0;
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team:hover .team-layer {
        bottom: 0;
        opacity: 1;
    }

    .our-team .team-layer a {
        display: inline-block;
        font-size: 18px;
        font-weight: 700;
        color: #333;
        text-transform: uppercase;
        margin: 0 0 12px 0;
        transition: all 0.3s ease-in-out 0s;
    }

    .our-team .team-layer a:hover {
        color: #716a9e;
    }

    .our-team .post {
        display: block;
        font-size: 14px;
        color: #999;
        text-transform: capitalize;
    }

    @media only screen and (max-width: 990px) {
        .our-team {
            margin-bottom: 35px;
        
        }
    }
</style>

<h1 style="text-align:center; margin-bottom:0px;">Excellent Teachers</h1>
			<hr class="orange" style="margin:15px auto 15px auto">
<div class="container">
    
    <div class="row">
        <div class="col-md-3 col-sm-6">

            
                <div class="our-team">
                    <div class="pic">
                        <img src="image/teacher1.jpeg" alt="">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/groups/435340276647009"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/BJP4Bihar"><i class="fa brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="anandanjali520@gmail.com"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Deepak</h3>
                        <small class="post">Artist</small>
                        <small>Email: <b>deepak@gmail.com.com</b></small>
                    </div>
                    <div class="team-layer">
                        <a href="#">Deepak</a>
                        <span class="post">Artist</span>
                    </div>
                </div>
            
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="image/teacher2.jpg" alt="">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Menaka</h3>
                    <small class="post">Artist</small>
                    <small>Email: <b>menaka@gmail.com</b></small>
                </div>
                <div class="team-layer">
                    <a href="#">Menaka</a>
                    <span class="post">Artist</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="image/teacher3.jpg" alt="">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Neha</h3>
                    <small class="post">Artist</small>
                    <small>Email: <b>neha@gmail.com</b></small>
                </div>
                <div class="team-layer">
                    <a href="#">Neha</a>
                    <span class="post">Artist</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="image/teacher4.jpg" alt="">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Adarsh</h3>
                    <small class="post">Artist</small>
                    <small>Email: <b>Adarsh@gmail.com</b></small>
                </div>
                <div class="team-layer">
                    <a href="#">Adarsh</a>
                    <span class="post">Artist</span>
                </div>
            </div>
        </div>
    </div>
</div>