<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/Logo.svg')}}" alt="" width="150" height="74" class="d-inline-block align-text-center">
        Astonish</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          </ul>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          </form>

          <div class="text-end">
            <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
            <a class="btn btn-primary" href="{{ route('register') }}" role="button">Register</a>
          </div>
      </div>
    </div>
  </nav>
