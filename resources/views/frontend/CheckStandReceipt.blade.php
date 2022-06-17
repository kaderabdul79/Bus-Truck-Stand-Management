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
        .search{
            border-color: #0dcaf0 !important;
            color: #0dcaf0 !important;
        }
        .search:hover{
            background-color: #0dcaf0 !important;
            color: #ffffff !important;
            border-color: #0dcaf0 !important;
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
    <div class="container my-5">
        <div class="row my-5">
            <form class="d-flex my-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Search by name or mobile number" aria-label="Search">
                <button class="btn btn-outline-success search" type="submit">Search</button>
            </form>
        </div>
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