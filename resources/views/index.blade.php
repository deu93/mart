@extends('layouts.app')
@section('content')
<section class="slider-section">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators slider-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/slider.jpg" width="1648" height="600" alt="">
                <div class="carousel-caption">
                    <h2>DRESSES <b>&</b> JEANS</h2>
                    <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                    <a href="#">Buy Now</a>
                </div>
            </div>
            <div class="item">
                <img src="images/slider.jpg" width="1648" height="600" alt="">
                <div class="carousel-caption">
                    <h2>DRESSES <b>&</b> JEANS</h2>
                    <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                    <a href="#">Buy Now</a>
                </div>
            </div>
            <div class="item ">
                <img src="images/slider.jpg" width="1648" height="600" alt="">
                <div class="carousel-caption">
                    <h2>DRESSES <b>&</b> JEANS</h2>
                    <h3>FROM OURFAMOUS BRANDS <Span>SALE</Span></h3>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</section>

<section class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.1s">
                <div class="service-item">
                    <i class="pe-7s-settings"></i>
                    <h3>SETTING</h3>
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.2s">
                <div class="service-item">
                    <i class="pe-7s-safe"></i>
                    <h3>MONEY BACK</h3>
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.3s">
                <div class="service-item">
                    <i class="pe-7s-global"></i>
                    <h3>WORLDWIDE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="service-item">
                    <i class="pe-7s-headphones"></i>
                    <h3>Online support</h3>
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>NEW COLLECTION</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.2s">
                <div class="product-item">
                    <img src="images/1.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Blue Tshirt</h3>
                            <span>$26</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="product-item">
                    <img src="images/2.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>WOMAN shirt</h3>
                            <span>$31</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.6s">
                <div class="product-item">
                    <img src="images/3.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>YELLOW Tshirt</h3>
                            <span>$21</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="images/4.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Cool lingerie</h3>
                            <span>$56</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="offer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInDown animated ">
                <h1>END OF SEASON SALE</h1>
                <h2>Up to 35% off Women's Denim</h2>
            </div>
        </div>
    </div>
</section>

<section class="best-seller-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>BEST SELLERS</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.2s">
                <div class="product-item">
                    <img src="images/1.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Blue Tshirt</h3>
                            <span>$26</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.4s">
                <div class="product-item">
                    <img src="images/2.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>WOMAN shirt</h3>
                            <span>$31</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.6s">
                <div class="product-item">
                    <img src="images/3.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>YELLOW Tshirt</h3>
                            <span>$21</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="images/4.png" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Cool lingerie</h3>
                            <span>$56</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>customer review</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="feedback" class="carousel slide feedback" data-ride="feedback">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/member1.png" width="320" height="439" alt="">
                        <div class="carousel-caption">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                            <h3>- Olivia -</h3>
                            <span>Melbour, Aus</span>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/member2.png" width="320" height="439" alt="">
                        <div class="carousel-caption">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                            <h3>- Olivia -</h3>
                            <span>Melbour, Aus</span>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/member3.png" width="320" height="439" alt="">
                        <div class="carousel-caption">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                            <h3>- Olivia -</h3>
                            <span>Melbour, Aus</span>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators review-controlar">
                    <li data-target="#feedback" data-slide-to="0" class="active">
                        <img src="images/member1.png" width="320" height="439" alt="">
                    </li>
                    <li data-target="#feedback" data-slide-to="1">
                        <img src="images/member2.png" width="320" height="439" alt="">
                    </li>
                    <li data-target="#feedback" data-slide-to="2">
                        <img src="images/member3.png" width="320" height="439" alt="">
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="news-letter-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section white wow fadeInDown animated ">
                    <h1>NEWSLETTER</h1>
                </div>
                <p>Follow a collection of news & promotions</p>
            </div>
        </div>
        <div class="row subscribe-from">
            <form class="form-inline col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1  wow fadeInDown animated">
                <div class="form-group">
                    <input type="email" class="form-control subscribe" id="email" placeholder="Enter your email">
                    <button class="suscribe-btn" ><i class="pe-7s-next"></i></button>
                </div>
            </form><!-- end /. form -->
        </div><!-- end of/. row -->
    </div><!-- end of /.container -->
</section><!-- end of /.news letter section -->

<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>our partner</h1>
                </div>
            </div>
        </div>
        <div id="client" class="row owl-carousel owl-theme client-area">
            <div class="flex">
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
            </div>
            <div class="flex">
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_03.jpg" class="img-responsive" width="350" height="200" alt="">
                    </a>
                </div>
                <div class="w-3/12 item">
                    <a href="#">
                        <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="customNavigation works-navigation">
            <a class="btn-work works-prev"><i class="pe-7s-angle-left"></i></a>
            <a class="btn-work works-next"><i class="pe-7s-angle-right"></i></a>
        </div><!-- end of /.client navigation -->
    </div>
</section>

<section class="news-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Latest News</h1>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.2s">
                <div class="blog-item">
                    <a href="#"><img src="images/blog1.jpg" width="350" height="262" alt=""></a>
                    <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                    <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.4s">
                <div class="blog-item">
                    <a href="#"><img src="images/blog2.jpg" width="350" height="262" alt=""></a>
                    <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                    <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                    <a href="#">Read More</a>

                </div>
            </div>
            <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.6s">
                <div class="blog-item">
                    <a href="#"><img src="images/blog3.jpg" width="350" height="262" alt=""></a>
                    <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                    <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>GET IN TOUCH</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeInLeft animated">
                <div class="left-content">
                    <h1><span>M</span>art</h1>
                    <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                    <div class="contact-info">
                        <p><b>Main Office:</b> 123 Elm St. New York City, NY</p>
                        <p><b>Phone:</b> 1.555.555.5555</p>
                        <p><b>Email:</b> info@yourdomain.com</p>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight animated">
                <form action="" method="" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Website URL">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="submit" class="contact-submit" value="Send" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection