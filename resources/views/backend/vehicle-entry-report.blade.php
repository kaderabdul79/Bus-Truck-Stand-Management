<!doctype html>
<html lang="en">

<head>
  <title>Generating PDF</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Entry Detail's</h4>
            <p class="card-text">Vehicle Type : {{$VehicleType}} </p>
            <p class="card-text">Name : {{$DriverName}}</p>
            <p class="card-text">Mobile Number: {{$DriverMobileNumber}}</p>
            <p class="card-text">{{$VehicleType}} Registration Number : {{$VehicleRegistrationNumber}}</p>
            <p class="card-text">License Number : {{$DriverLicenseNumber}}</p>
            <p class="card-text">Charge : {{$Charge}}</p>
            <p class="card-text">Status : {{$Status == 0 ? 'Out' : 'In'}}</p>
            <p class="card-text text-muted my-5">Bus/Truck Stand Management System</p>
        </div>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>