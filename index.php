<!doctype html>
<html lang="en">

<head>
    <!--  Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--  fontawesome -->
    <script src="https://kit.fontawesome.com/b73881b7c2.js" crossorigin="anonymous"></script>

    <!--  owl-carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="scss/custom.css">

    <title>Unique World</title>
</head>

<body>

    <section class="cards-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="row item-cont">
                        <?php   
                       $string = file_get_contents("data.json");
                       $arr = json_decode($string,true);
                       foreach($arr as $item) { ?>

                        <div class="col-md-6">
                            <div class="card-item">
                                <div class="image">
                                    <img src="img/<?php echo $item['img']; ?>.jpg" class="card-img-top">
                                    <div class="star-rating">
                                        <span><span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="icon-text-body d-flex align-items-center justify-content-between px-2">
                                    <div class="time">
                                        <?php echo $item['time']; ?>
                                    </div>
                                    <div class="d-flex align-items-center votes theme-color">
                                        <div class="d-flex align-items-center mr-4">
                                            <i class="far fa-smile  mr-2"></i> <span class="counter">224</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-frown    mr-2"></i> <span class="counter">10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <h4 class="card-title"><?php echo $item['title']; ?></h4>
                                    <p class="card-text"></p> Some quick
                                    example text to build on the card title and make up the bulk
                                    of the card's content.The card title and make up the bulk
                                    of the card's content.</p>
                                </div>
                                <div class="card-foot">
                                    <div class="icons d-flex align-items-center">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <i class="fas fa-save    "></i>
                                        <i class="fas fa-tag    "></i>
                                    </div>
                                    <a href="#" class="btn card-link">watch video</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="text-block">
                        <h1>Watch Entertaining Videos </h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus cupiditate labore cum
                            explicabo. Odio illum distinctio laboriosam, vel sint assumenda fugit doloribus officia eos
                            optio deleniti ad ullam cupiditate consectetur!</p>

                        <div class="info d-flex align-items-center">
                            <div>
                                X-Ray
                            </div>
                            <div>
                                16+
                            </div>
                            <div class="cta">
                                <i class="fas fa-envelope    "></i>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="key">Genres</div>
                                <div class="value">Comedy</div>
                            </li>

                            <li>
                                <div class="key">Subtitles</div>
                                <div class="value">English [CC], हिन्दी</div>
                            </li>
                            <li>
                                <div class="key">
                                    Audio languages
                                </div>
                                <div class="value">English, हिन्दी</div>
                            </li>
                        </ul>
                        <a href="#" class="link-more">Watch more <i class="fas fa-caret-right    "></i></a>
                        <p class="terms">By clicking play, you agree to our Terms of Use.
                        </p>
                    </div>
                </div>
            </div>
            <div class="heading">Newest Similar Addition</div>
            <div class="owl-carousel">
                <?php for ($i=1; $i < 10; $i++) {  ?>
                <div class="item-2">
                    <img src="img/img<?php echo $i ?>.jpg" class="card-img-top">
                    <div class="item-text">
                        <a href="#" class="title"> algorithms work</a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum eum quae distinctio libero
                            est id?</p>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <!--  Optional JavaScript -->
    <!--  jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js "
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 5,
            time: 1000
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            margin: 30,
            loop: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },
        });

        $(".customNextBtn").click(function(e) {
            e.preventDefault();
            owl.trigger("next.owl.carousel", [300]);
            return false;
        });

        $(".customPrevBtn").click(function(e) {
            e.preventDefault();
            owl.trigger("prev.owl.carousel", [300]);
            return false;
        });
    });
    </script>

</body>