@extends('../layouts.user')

@section('content')


<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-right">
                <ul>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="/login"> Create Account </a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="heder-bottom">
        <div class="container">
            <div class="logo-nav">
                <div class="logo-nav-left">
                    <h1><a href="index.html">SIG UMKM <span>Bogor Utara</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                                data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html" class="act">Home</a></li>
                                <!-- Mega Menu -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="products.html">Clothing</a></li>
                                                    <li><a href="products.html">Wallets</a></li>
                                                    <li><a href="products.html">Shoes</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html"> Underwear </a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="products.html">Sunglasses</a></li>
                                                    <li><a href="products.html">Wallets,Bags</a></li>
                                                    <li><a href="products.html">Footwear</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                    <li><a href="products.html">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="user/images/woo.jpg" alt=" " /></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="user/images/woo1.jpg" alt=" " /></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="products.html">Clothing</a></li>
                                                    <li><a href="products.html">Wallets</a></li>
                                                    <li><a href="products.html">Shoes</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html"> Underwear </a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="products.html">Sunglasses</a></li>
                                                    <li><a href="products.html">Wallets,Bags</a></li>
                                                    <li><a href="products.html">Footwear</a></li>
                                                    <li><a href="products.html">Watches</a></li>
                                                    <li><a href="products.html">Accessories</a></li>
                                                    <li><a href="products.html">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="user/images/woo3.jpg" alt=" " /></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="user/images/woo4.jpg" alt=" " /></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="codes.html">Short Codes</a></li>
                                <li><a href="mail.html">Mail Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                                        class="simpleCart_quantity"></span> items)
                                </div>
                                <img src="user/images/bag.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--header-->
<!--banner-->
<div class="banner-w3">
    <div class="demo-1">
        <div id="example1" class="core-slider core-slider__carousel example_1">
            <div class="core-slider_viewport">
                <div class="core-slider_list">
                    <div class="core-slider_item">
                        <img src="user/images/SIG_1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="user/images/SIG_2.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="core-slider_nav">
                <div class="core-slider_arrow core-slider_arrow__right"></div>
                <div class="core-slider_arrow core-slider_arrow__left"></div>
            </div>
            <div class="core-slider_control-nav"></div>
        </div>
    </div>
    <link href="css/coreSlider.css" rel="stylesheet" type="text/css">
    <script src="js/coreSlider.js"></script>
    <script>
    $('#example1').coreSlider({
        pauseOnHover: false,
        interval: 3000,
        controlNavEnabled: true
    });
    </script>

</div>
<!--banner-->
<!--content-->
<div class="content">
    <!--banner-bottom-->
    <div class="ban-bottom-w3l">
        <div class="container">
            <div class="col-md-6 ban-bottom">
                <div class="ban-top">
                    <img src="user/images/category1.jpg" class="img-responsive" alt="" />
                    <div class="ban-text">
                        <h4>Makanan</h4>
                    </div>
                    <div class="ban-text2 hvr-sweep-to-top">
                        <h4>50% <span>Off/-</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ban-bottom3">
                <div class="ban-top">
                    <img src="user/images/category2.jpg" class="img-responsive" alt="" />
                    <div class="ban-text1">
                        <h4>Kerajinan Tangan</h4>
                    </div>
                </div>
                <div class="ban-img">
                    <div class=" ban-bottom1">
                        <div class="ban-top">
                            <img src="user/images/category3.jpg" class="img-responsive" alt="" />
                            <div class="ban-text1">
                                <h4>Minuman</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ban-bottom2">
                        <div class="ban-top">
                            <img src="user/images/category4.jpg" class="img-responsive" alt="" />
                            <div class="ban-text1">
                                <h4>Hand Bag</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--banner-bottom-->
    <!--new-arrivals-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h2 class="tittle">New Arrivals</h2>
            <div class="arrivals-grids">
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                    <div class="grid-img">
                                        <img src="user/images/p6.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/p5.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal2">
                                    <div class="grid-img">
                                        <img src="user/images/p7.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/p8.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben2">
                            <p>OUT OF STOCK</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class=" my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal3">
                                    <div class="grid-img">
                                        <img src="user/images/p10.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/p9.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                    <div class="grid-img">
                                        <img src="user/images/p11.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/p12.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
    <!--accessories-->
    <div class="accessories-w3l">
        <div class="container">
            <h3 class="tittle">20% Discount on</h3>
            <span>TRENDING DESIGNS</span>
            <div class="button">
                <a href="#" class="button1"> Shop Now</a>
                <a href="#" class="button1"> Quick View</a>
            </div>
        </div>
    </div>
    <!--accessories-->
    <!--Products-->
    <div class="product-agile">
        <div class="container">
            <h3 class="tittle1"> New Products</h3>
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <div class="caption">
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p14.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p13.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p15.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p16.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p18.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p17.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="ribben1">
                                            <p>SALE</p>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user//p20.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p19.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="ribben">
                                            <p>-20%</p>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="caption">
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p21.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p22.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p24.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p23.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p26.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p25.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="ribben">
                                            <p>-75%</p>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 cap-left simpleCart_shelfItem">
                                    <div class="grid-arr">
                                        <div class="grid-arrival">
                                            <figure>
                                                <a href="single.html">
                                                    <div class="grid-img">
                                                        <img src="user/images/p10.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="grid-img">
                                                        <img src="user/images/p9.jpg" class="img-responsive" alt="">
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="women">
                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                            <span class="size">XL / XXL / S </span>
                                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Products-->
    <div class="latest-w3">
        <div class="container">
            <h3 class="tittle1">Latest Fashion Trends</h3>
            <div class="latest-grids">
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img src="user/images/l1.jpg" class="img-responsive" alt="">
                        <div class="latest-text">
                            <h4>Men</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-50%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img src="user/images/l2.jpg" class="img-responsive" alt="">
                        <div class="latest-text">
                            <h4>Shoes</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-20%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img src="user/images/l3.jpg" class="img-responsive" alt="">
                        <div class="latest-text">
                            <h4>Women</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-50%</h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="latest-grids">
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img src="user/images/l4.jpg" class="img-responsive" alt="">
                        <div class="latest-text">
                            <h4>Watch</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-45%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img src="user/images/l5.jpg" class="img-responsive" alt="">
                        <div class="latest-text">
                            <h4>Bag</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-10%</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-grid">
                    <div class="latest-top">
                        <img src="user/images/l6.jpg" class="img-responsive" alt="">
                        <div class="latest-text">
                            <h4>Cameras</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4>-30%</h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Best Sellers</h3>
            <div class="arrivals-grids">
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img src="user/images/p28.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/p27.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img src="user/images/p30.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/p29.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben2">
                            <p>OUT OF STOCK</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img src="user/images/s2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/s1.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben1">
                            <p>SALE</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div class="grid-arrival">
                            <figure>
                                <a href="single.html">
                                    <div class="grid-img">
                                        <img src="user/images/s4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="grid-img">
                                        <img src="user/images/s3.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price">$70.00</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
</div>
<!--content-->
<!---footer--->
<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <div class="social-icon">
                    <a href="#"><i class="icon"></i></a>
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <a href="#"><i class="icon3"></i></a>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>My Account</h4>
                <ul>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="registered.html"> Create Account </a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="mail.html">Mail Us</a></li>
                    <li><a href="products1.html">products1</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd,
                            Westby, USA</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a>
                    </li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                            href="mailto:example@mail.com"> example@mail.com</a></li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; 2016 New Shop . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <div class="copy-right">
            <img src="user/images/card.png" alt="" />
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="user/images/p5.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) + 1;
                                    divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) - 1;
                                    if (newVal >= 1) divUpd.text(newVal);
                                });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3"
                                    data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00"
                                    data-quantity="1" data-image="user/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="user/images/p7.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) + 1;
                                    divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) - 1;
                                    if (newVal >= 1) divUpd.text(newVal);
                                });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3"
                                    data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00"
                                    data-quantity="1" data-image="user/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="user/images/p10.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) + 1;
                                    divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) - 1;
                                    if (newVal >= 1) divUpd.text(newVal);
                                });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3"
                                    data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00"
                                    data-quantity="1" data-image="user/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="user/images/p12.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                $('.value-plus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) + 1;
                                    divUpd.text(newVal);
                                });

                                $('.value-minus1').on('click', function() {
                                    var divUpd = $(this).parent().find('.value1'),
                                        newVal = parseInt(divUpd.text(), 10) - 1;
                                    if (newVal >= 1) divUpd.text(newVal);
                                });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3"
                                    data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00"
                                    data-quantity="1" data-image="user/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@endsection