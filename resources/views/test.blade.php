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
/* Add your styles here */
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

.row.centered {
    display: flex;
    justify-content: center;
    align-items: center;
}

@media only screen and (max-width: 600px) {
    .imageholder img {
        max-height: 150px;
        max-width: 150px;
    }
}

/* Add this to your CSS */
#suggestion-list {
    border: 1px solid #ddd;
    display: none;
    position: absolute;
    background-color: #fff;
    z-index: 1000;
    max-height: 200px;
    overflow-y: auto;
    width: 100%;
    list-style-type: none;
    padding-left: 0;
}

#suggestion-list li {
    padding: 8px;
    cursor: pointer;
}

#suggestion-list li:hover {
    background-color: #f0f0f0;
}
    </style>
    <!-- JavaScript code to handle the suggestion list -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search-input');
    const suggestionList = document.getElementById('suggestion-list');

    searchInput.addEventListener('input', function () {
        const query = this.value;

        if (query.length > 2) { // Start fetching suggestions after 3 characters
            fetch(`/suggestions?q=${query}`)
                .then(response => response.json())
                .then(data => {
                    suggestionList.innerHTML = '';
                    if (data.length > 0) {
                        suggestionList.style.display = 'block';
                        data.forEach(item => {
                            const listItem = document.createElement('li');
                            listItem.textContent = item;
                            listItem.addEventListener('click', function () {
                                searchInput.value = item;
                                suggestionList.style.display = 'none';
                            });
                            suggestionList.appendChild(listItem);
                        });
                    } else {
                        suggestionList.style.display = 'none';
                    }
                });
        } else {
            suggestionList.style.display = 'none';
        }
    });

    document.addEventListener('click', function (event) {
        if (event.target !== searchInput) {
            suggestionList.style.display = 'none';
        }
    });
});
</script>


</body>

</html>
