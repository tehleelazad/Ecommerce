<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>E-Commerce</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>
<style>
.buy_bt {

    text-align: center;

}
.fashion-section2{
background-color:red;
}
.card {
    border: none;
    transition: transform 0.2s;
    height: 100%;
    box-shadow:4px 2px 5px 4px#EEEEEE;
}


.card:hover {
    transform: translateY(-5px);
}

/* Center-align card content */
.card-body {
    text-align: center;
    margin:2px;
    
}

/* Limit card title height */
.card-title {
    height: 2rem;
    font-weight:bold;
    overflow: hidden;
    /* margin:12px; */


}
.card-text{
    font-weight:bold;
        height: 3rem;


}

/* Style links inside cards */
.card a {
    text-decoration: none;
    color: #212529;
}

/* Ensure consistent image height */
.card-img-top {
    height: 300px;
    WIDTH: 200PX;

    /* Set a fixed height for all images */

}
.input-group-append .btn-secondary {
    background-color: #f26522;
    border-color: #f26522;
    color: #fff; /* Optional: Ensures the text/icon color contrasts well */
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.input-group-append .btn-secondary:hover {
    background-color: #d9531e; /* Slightly darker shade for hover effect */
    border-color: #d9531e;
}

.input-group-append .btn-secondary:focus,
.input-group-append .btn-secondary:active {
    background-color: #c7461b; /* Slightly darker shade for focus/active effect */
    border-color: #c7461b;
    box-shadow: none; /* Removes default focus shadow */
}

.input-group-append .btn-secondary .fa-search {
    margin-right: 5px; /* Adds some space between the icon and the text */
}

/* Optional: Styling for the input group if needed */
.input-group2  {
display:flex;
border-radius: 5px;
width:105px;
height:30px;
text-align:center;
margin-left:50px;

}
.input-group2  input {
    /* border:none;
    border-bottom:1px solid black; */

}
.input-group2  button {
    border-radius:10%;
    border:none;
    background-color:#E8E8E8;
    text-align:center;
}
.input-group .form-control {
    border-right: 0; /* Removes the border between input and button */
}

.form-holder {
    text-align: center;
    justify-content: space-between;
}

.form-holder input {
    background-color: transparent;
    border: none;
    outline: none;
    padding: 1rem;
    color: white;
}

.form-holder input::placeholder {
    font-size: 0.9rem;
    color: white;
}

.form-holder button {
    padding: 0.5rem 1rem;
    font-weight: 700;
    background-color: transparent;
    color: white;
    font-size: 1.2rem;
}

.search {
    display: flex;
    width: 90%;
}

.banner_bg_main {
    height: 700px;
}
/* Styling for login_menu */
.login_menu {
    display: flex;
    justify-content: flex-end;
    padding: -20px;
}

.login_menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.login_menu ul li {
    margin-left: 15px;
}

.login_menu ul li a {
    text-decoration: none;
    color: #343a40;
    font-size: 16px;
    display: flex;
    align-items: center;
}

.login_menu ul li a i {
    margin-right: 5px;
}

/* Styling for alerts */
.alert {
    padding: 15px;
    margin: 20px 0;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size: 16px;
    display: flex;
    align-items: center;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
 .container{
    max-width: 1069px;
 }
 .form-control{
    width: 89%;
 }

</style>
<body>
    <!-- banner bg main start -->
    <div class="banner_bg_main">
        <!-- header top section start -->
        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top section start -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="index.html"><img src="assets/images/rat1.jpeg"
                                    style="mix-blend-mode: color-burn; width: 300px;"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="">Home</a>
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ url('/contact') }}">Contact Us</a>

                    </div>
                    
<!-- Assuming this is in your Blade template -->
<span class="toggle_icon" onclick="openNav()">
    <img src="assets/images/toggle-icon.png">
</span>
<div class="dropdown">
    <select class="form-control" id="category" name="category_id" required>
        <option value="">Select category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->categories }}</option>
        @endforeach
    </select>
</div>

<!-- Search form -->
<div class="main">
    <div class="input-group">
        <form id="search-form" action="{{ route('search') }}" method="GET" class="search">
            @csrf
            <input type="text" name="search" id="search-input" class="form-control" placeholder="Search for product title">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" style="background-color: #f26522; border-color:#f26522">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
        <ul id="suggestion-list"></ul>
    </div>
</div>
<div id="error-message" style="color: black; display: none;">Please select a category.</div>

<script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        var category = document.getElementById('category').value;
        if (!category) {
            event.preventDefault(); // Prevent form submission
            document.getElementById('error-message').style.display = 'block'; // Show error message
        } else {
            document.getElementById('error-message').style.display = 'none'; // Hide error message
        }
    });
</script>



                    <div class="header_box">
                        <div class="lang_box ">
                            <div class="dropdown-menu ">

                                </a>
                            </div>
                        </div>
                        <div class="login_menu">
                            <ul>
                                @auth
                                <!-- If user is authenticated (logged in) -->
                                <li>
          <a href="{{ route('orders.index') }}">
            <i class="fa fa-shopping-bag"></i> Orders
        </a>
    </li>
                                @else
                                <!-- If user is not authenticated (not logged in) -->

                                <li>
                                    <a href="{{ route('register') }}">
                                        <i class="fa fa-user-plus"></i> Register
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">
                                        <i class="fa fa-sign-in"></i> login
                                    </a>
                                </li>
                                @endauth


                                <li>
                                    <a href="{{ route('cart.index') }}">
                                        <i class="fa fa-shopping-cart fa-1x"></i> Cart
                                    </a>
                                </li>
                             




                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <li>
                <li>
            <a href="{{ route('products.filter') }}">
            <i class="fa fa-shopping-cart fa-1x"></i>View All
             </a>
             </li>
          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                    <!-- <div class="buynow_bt"><a href="#">Buy Now</a></div> -->

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                    <div class="buynow_bt"><a href="#">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->

    <style>
    .imageholder {
        display: flex;
        justify-content: center;
    }

        .imageholder img {
    max-height: 200px;
    max-width: 220px;
    object-fit: contain;
}

.fashion_taital{
text-align:center;
margin-left:1%;

}

/* .carousel {
        margin-right:48px; 
     }  */
    .center-text {
    text-align: center;

}

    </style>
    <!-- products.blade.php -->
    <<div id="electronic_section" class="fashion_section">
    <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-item active">
            <div class="carousel">

                <div class="container">
                    @foreach ($categories as $category)
                        <h1 class="fashion_taital">{{ $category->categories }}</h1>
                        <div class="fashion_section_2">

                            <div class="row">
                                @php
                                    // Limit the number of products to 4
                                    $categoryProducts = $products->where('category_id', $category->id)->take(4);
                                    $productCount = 0;
                                @endphp
                                @foreach ($categoryProducts as $product)
                                    @php $productCount++; @endphp
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="card">
                                        <div class="imageholder">

                                            <a href="{{ route('product.details', ['id' => $product->id]) }}">
                                                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                                            </a>
</div>
                                            <div class="card-body">
                                                <h2 class="card-title">
                                                    <a href="{{ route('product.details', ['id' => $product->id]) }}" class="text-decoration-none">{{ $product->title }}</a>
                                                </h2>
                                                <b class="card-text text-muted">Price: ₹{{ $product->price }}</b>
                                                <div class="d-grid gap-2">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <div class="input-group2 cart mb-2">
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                        <button type="button" class="btn btn-outline-secondary" onclick="decrementQuantity(this)">-</button>
                                                            <input type="text" name="quantity" value="1" class="form-control text-center" min="1">
                                                            <button type="button" class="btn btn-outline-secondary" onclick="incrementQuantity(this)">+</button>
                                                        </div>
                                                        <button type="submit" class="btn btn-info">Add to Cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($productCount % 4 == 0)
                                    <div class="col-12 mb-4 center-text">
                                    <a href="{{ route('all.products', ['category_id' => $category->id]) }}" class="btn btn-secondary btn-sm"  style="background-color: #F97300; height:39px;padding-top:8px;border-color:#F97300;border-radius:33px 22px ;box-shadow:2px 9px 2px 2px #F5EFE6">View More </a>
                               
                                        </div>
                                    @endif
                                @endforeach
                                @if ($productCount % 4 != 0)
                                <div class="col-12 mb-4 center-text">
                                <a href="{{ route('all.products', ['category_id' => $category->id]) }}" class="btn btn-secondary btn-sm"  style="background-color: #F97300; height:39px;padding-top:8px;border-color:#F97300;border-radius:33px 22px ;box-shadow:2px 9px 2px 2px #F5EFE6">View More </a>

                                        <!-- <a href="{{ route('all.products', ['category_id' => $category->id]) }}" class="btn btn-primary btn-sm">View  {{ $category->categories }}</a> -->
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- <div class="loader_main">
            <div class="loader"></div>
        </div> -->
        </div>
        </div>




        <!-- fashion section end -->

        <!-- footer section start -->
        <div class="footer_section layout_padding">
            <div class="container">

                <form action="{{ route('store_contact') }}" method="POST" class="w-100">
                    @csrf
                    <div class="form-holder">
                        <input type="text" class="" placeholder="Your Contact" name="contact">
                        <button type="submit" class="" id="basic-addon2">Add Contact</button>
                    </div>
                </form>
                <div class="footer_menu">
                    <!-- <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul> -->
                </div>
                <div class="location_main">Help Line Number : <a href="#">6006772494</a></div>
            </div>
        </div>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">© 2024 All Rights Reserved. Design by Laravel Team</a></p>
            </div>
        </div>

        <script src="{{ asset('path/to/jquery.min.js') }}"></script>



        
        <script>
            document.getElementById('search-input').addEventListener('input', function() {
    const searchTerm = this.value;
    const categoryId = document.getElementById('category').value;

    // Make an AJAX request to fetch suggestions
    fetch(`/search-suggestions?search=${searchTerm}&category_id=${categoryId}`)
        .then(response => response.json())
        .then(data => {
            const suggestionList = document.getElementById('suggestion-list');
            suggestionList.innerHTML = '';
            data.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item.title;
                suggestionList.appendChild(li);
            });
        });
});

        </script>
        <script>
        function incrementQuantity(button) {
            var input = button.parentNode.querySelector('input[name="quantity"]');
            input.value = parseInt(input.value) + 1;
        }

        function decrementQuantity(button) {
            var input = button.parentNode.querySelector('input[name="quantity"]');
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }
        </script>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>
</body>

</html>