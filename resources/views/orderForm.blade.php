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
		{{-- <div class='preloader'><div class='loaded'>&nbsp;</div></div>
            <div class="header_top_menu clearfix">	
                <div class="container">
                    <div class="row">	
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
								<a href=""><i class="fa fa-clock-o"></i> Order Foods 24/7</a>
								<a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
							</div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                                <a href=""><i class="fa fa-camera"></i></a>
                            </div>	
                        </div>

                    </div>			
                </div>
            </div> --}}

            <!-- End navbar-collapse-->
        <header id="home">
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
                                        <a href="/"><h3><span id="tempe">keripik tempe</span><br><span id="suyud">Pak Suyud</span></h3></a>
                                    </div>
                                    <ul class="nav navbar-nav navbar-right nav-custom">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/#abouts">About</a></li>
                                        <li><a href="/#portfolio">Products</a></li>
                                        <li><a href="/#ourPakeg">Price List</a></li>
                                        <li><a href="" class="booking">Order Now</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>

        </header> <!-- End Header Section -->
        <main class="forms">

            <h3>Form Pemesanan</h3>
    
            <section class="form-container" id="buyer-form">
                <div class="form" id="item-form">
                    <form action="{{ route('submit.form') }}" method="POST">
                    @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>harga</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td><input type="number" name="{{$item->id}}" id="" value="0" min="0"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <label for="name">Nama</label>
                        <input name="name" type="text">
                        <label for="phone">Nomor Telefon</label>
                        <input name="phone" type="tel">
                        <label for="address">Alamat Pengiriman</label>
                        <textarea name="address" style="resize: none" id="" cols="30" rows="3"></textarea>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </section>

        </main>
 


        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-easing/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/wow/wow.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
