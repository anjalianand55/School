<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox">
                    <div class="pic">
                        <h3 class="title">watercolor</h3>
                        <p class="description">Watercolor paint is a translucent art medium. Watercolor is basically a
                            colored pigment in a water-soluble binder. The paint dissolves when you add water allowing
                            the
                            pigment to spread with a brush.</p>
                        <img src="image/watercolor.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="serviceBox">
                    <div class="pic">
                        <h3 class="title">Sketching</h3>
                        <p class="description">A sketch is a rapidly
                            executed freehand drawing that is not usually intended as a finished work. Sketching also
                            helps us to discover best innovating ideas. Sketching can be used in preparation for a large
                            piece of art</p>
                        <img src="image/sketching.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="serviceBox">
                    <div class="pic">
                        <h3 class="title">Oil Pastel</h3>
                        <p class="description">An oil pastel is a painting and drawing medium formed into a stick which
                            consists of pigment mixed with a binder mixture of non-drying oil and wax.Oil pastels are
                            considered a fast medium because they are easy to paint</p>
                        <img src="image/oilpastel2.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="serviceBox">
                    <div class="pic">
                        <h3 class="title">Madhubani painting</h3>
                        <p class="description">MADHUBANI ART is commonly known as MITHILA ART It is tradition played a
                            role in the conservation
                            efforts in India in 2012. Mamta Devi from the village Jitwarpur has got National Award.</p>
                        <img src="image/madhubani.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<style>
    .serviceBox {
        padding: 25px 30px;
        text-align: center;
        background: #58341800;
        /* border-top: 3px solid #eed956; */
        border-bottom: 3px solid #c5b65b00;
        position: relative;
        margin-top: 20px;
    }

    .serviceBox h3 {
        color: beige;
    }

    .serviceBox .pic img {
        width: 101%;
        height: 108%;
        border-radius: 50%;
        position: absolute;
        top: -21px;
        left: -1px;
        transition: all 0.6s ease 0s;
    }

    .serviceBox .description {
        font-size: 14px;
        color: #fff;
    }

    .pic img:hover {
        transform: rotate(-120deg);
        transform-origin: 95% 40% 0;
    }

    .serviceBox .title {
        font-size: 20px;
        font-weight: 700;
        color: #eed956;
        letter-spacing: 1px;
        margin: 0 0 12px 0;
        text-transform: uppercase;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .serviceBox:hover .title {
        letter-spacing: 3px;
    }

    .serviceBox .description {
        font-size: 15px;
        color: black;
        letter-spacing: 1px;
        line-height: 27px;
        margin: 0;
    }

    @media only screen and (max-width: 990px) {
        .our-team {
            margin-bottom: 30px;
        }
    }

    @media only screen and (max-width: 767px) {
        .our-team {
            overflow: hidden;
        }
    }
</style>