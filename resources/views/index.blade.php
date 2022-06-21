<!doctype html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Keripik Tempe Pak Suyud</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('css/animate/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home">
            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="nav-container collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="logo">
                                        <h3><span id="tempe">keripik tempe</span><br><span id="suyud">Pak Suyud</span></h3>
                                    </div>
                                    <ul class="nav navbar-nav navbar-right nav-custom">
                                        <li><a href="#slider">Home</a></li>
                                        <li><a href="#abouts">About</a></li>
                                        <li><a href="#portfolio">Products</a></li>
                                        <li><a href="#ourPakeg">Price List</a></li>
                                        <li><a href="/orderForm" class="booking">Order Now</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>Pak Suyud</h1>
                                    <p>Berdiri sejak tahun 2000, Tempe Kripik Pak Suyud merupakans alah satu<br>jajanan khas asli Trenggalek yang masih produksi sampai saat ini </p>
                                    <button class="btn-lg"><a href="#portfolio">Lihat Produk Kami</a></button>
                                </div>
                            </div>	
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-6">
                            <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                                <img src="{{ asset('images/aboutus.jpeg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="single_abouts_text wow slideInRight" data-wow-duration="1s">
                                <h4>About us</h4>
                                <h3>PAK SUYUD</h3>
                                <p>Pak suyud menyediakan makanan khas trenggalek yaitu keripik tempe yang memiliki cita rasa yang enak dan gurih</p>
                                <p>Usaha Keripik tempe pak suyud menyediakan dua varian rasa yaitu keripik tepe varian daun jeruk yang memiliki aroma daun jeruk yang khas.  Sedangkan untuk keripik tempe bawang memiliki rasa yang gurih khas bawang.  Kedua keripik tersebut bertekstur renyah</p>

                                <a href="#portfolio" class="btn btn-primary">Produk Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area  wow fadeIn" data-wow-duration="3s">
                            <h4>Etalase</h4>
                            <div class="gallery">
                                <div class="gallery-item">
                                    <img onclick="expand(0)" src="{{ asset('images/produk1.jpeg') }}" alt="">
                                </div>
                                <div class="gallery-item">
                                    <img onclick="expand(1)" src="{{ asset('images/produk3.jpeg') }}" alt="">
                                </div>
                                <div class="gallery-item">
                                    <img onclick="expand(2)" src="{{ asset('images/produk2.jpeg') }}" alt="">
                                </div>
                                <div class="gallery-item">
                                    <img onclick="expand(3)" src="{{ asset('images/produk4.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                        <div class="col-md-12">
                            <div class="head_title text-center">
                                <h4>Varian Rasa</h4>
                                <h3>Keripik Tempe Pak Suyud</h3>
                            </div>
                            <div class="main_portfolio_content">
                                <div class="single_portfolio_text">
                                    <img src="{{ asset('images/bawang.png') }}" alt="" />
                                    <div class="desc">
                                        <h3>Bawang</h3>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <img src="{{ asset('images/daunjeruk.png') }}" alt="" />
                                    <div class="desc">
                                        <h3>Daun Jeruk</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="order text-center">
                                <a href="/orderForm">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ourPakeg" class="ourPakeg">
            <div class="container">
                <div class="main_pakeg_content">
                    <div class="row">
                        <div class="head_title text-center">
                            <h4>Price List</h4>
                            <h3>Keripik Tempe</h3>
                        </div>

                        <div class="single_pakeg_one text-right wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Keripik Tempe Bawang</h4>
                                    </div>
                                    <ul>
                                        @forelse ($kt_bawang as $item)
                                        <li><span>{{ $item->name }}</span><br><span class="price">{{ 'Rp.'.$item->price }}</span></li>
                                        @empty
                                        <li>no item available</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single_pakeg_two text-left wow rotateInDownLeft">
                            <div class="col-md-6 col-sm-8">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Keripik Tempe Daun Jeruk</h4>
                                    </div>

                                    <ul>
                                        @forelse ($kt_daunjeruk as $item)
                                        <li><span>{{ $item->name }}</span><br><span class="price">{{ 'Rp.'.$item->price }}</span></li>
                                        @empty
                                        <li>no item available</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @if(count($others) != 0)
                        <div class="single_pakeg_three text-right wow rotateInDownRight">
                            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                                <div class="single_pakeg_text">
                                    <div class="pakeg_title">
                                        <h4>Produk Lain</h4>
                                    </div>
                                    <ul>
                                        @foreach ($others as $item)
                                        <li><span>{{ $item->name }}</span><br><span class="price">{{ 'Rp.'.$item->price }}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="footer-row">
                <div class="column logo">
                    <h3>Keripik Tempe</h3>
                    <h1>Pak Suyud</h1>
                    
                </div>
                <div class="column location">
                    <h3>Alamat</h3>
                    <p>Jl. Yos Sudarso No.69, Sosutan, Ngantru,<br>Kec. Trenggalek, Kabupaten Trenggalek,<br>Jawa Timur 66311</p>
                </div>
                <div class="column hours">
                    <h3>Jam Buka</h3>
                    <p>Buka Setiap Hari<br>08:00 - 21:00</p>
                    <div class="footer_socail_icon">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>		


        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/jquery-easing/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/wow/wow.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
