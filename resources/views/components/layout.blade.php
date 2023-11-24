<!DOCTYPE html>

<head>
    <title>PT | @yield('title')</title>
</head>

<body>
    {{-- Belajar bootstrap grid di https://www.petanikode.com/bootstrap-grid/ --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <h2 class="d-inline-block align-text-top">
            Home
          </a>
        </div>
      </nav>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        @include('components/message')
                        @yield('content')
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
