<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Add your CSS and JS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Include the dropdown, search form, and header box -->
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
        <div class="lang_box">
            <div class="dropdown-menu">
                <!-- Language selection menu can go here -->
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
                            <i class="fa fa-sign-in"></i> Login
                        </a>
                    </li>
                @endauth
                <li>
                    <a href="{{ route('cart.index') }}">
                        <i class="fa fa-shopping-cart fa-1x"></i> Cart
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li>
                    <a href="{{ route('products.filter') }}">
                        <i class="fa fa-shopping-cart fa-1x"></i> View All
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
