<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    .height{
        max-height: 650px;
        background-position: center;
    }
    a.nav-link{
        font-size: 16px !important;
        color: #000000 !important;
    }
    a.nav-link:hover{
        color: #0dcaf0 !important;
    }
</style>
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Bus/Truck Stand Management System</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('CheckStandReceipt')}}">Check Stand Receipt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}">Admin</a>
                </li>
            </ul>
        </div>
      </div>
  </nav>
  </header>
  <main>
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
          <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <img src="{{asset('bus-1.jpg')}}" class="w-100 height d-block" alt="First slide">
          </div>
          <div class="carousel-item">
              <img src="{{asset('truck-.jpg')}}" class="w-100 height d-block" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img src="{{asset('bus-2.jpg')}}" class="w-100 height d-block" alt="Third slide">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
    <div class="container">
      <div class="row">
          <p class="text-center pt-3 text-uppercase">BUS/Truck STAND MANAGEMENT SYSTEM | DESIGN BY <a class="d-inline-block text-decoration-none" href="https://github.com/kaderabdul79/Bus-Truck-Stand-Management">Abdul Kader</a></p>
      </div>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>