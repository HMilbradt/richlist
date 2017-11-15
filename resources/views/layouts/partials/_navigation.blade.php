<nav class="navbar navbar-expand-lg navbar-trans">
    <a class="navbar-brand" href="/">The Rich List</a>
    <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
    </button>
    <script>
        // Look for .hamburger
        var hamburger = document.querySelector(".hamburger");
        // On click
        hamburger.addEventListener("click", function() {
            // Toggle class "is-active"
            hamburger.classList.toggle("is-active");
            // Do something else, like open/close menu
        });
    </script>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-auto">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            @guest
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                    <a class="nav-link ml-auto" href="{{ route('register') }}"><button class="btn btn-outline-danger btn-sm">Join The List</button></a>
            @else
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item ml-auto">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endguest
        </ul>
    </div>
    <script>
        $("input[type=file]").change(function () {
            var fieldVal = $(this).val();
            if (fieldVal != undefined || fieldVal != "") {
                $(this).next(".custom-file-control").attr('data-content', fieldVal);
            }
        });
    </script>
</nav>

