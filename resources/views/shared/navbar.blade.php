<nav class="navbar navbar-expand-lg navbar-light bg-light no-margin" style="border-radius: 0px; box-shadow: none !important; border-bottom: 1px solid lightgray;">
    <div class="container">
        <a class="navbar-brand" href="{{ route("home.index") }}"> <img height="30px" src="{{ asset("images/logo.png") }}" alt="FIREAIOT logo"> FIREAIOT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <div class="form-inline ml-auto">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("dashboard.index") }}">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>