<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> @yield('title') </title>

  <link rel="stylesheet" href=" {{ asset("backend/css/font-awesome.min.css") }} ">
  <link rel="stylesheet" href=" {{ asset("backend/css/bootstrap.css") }}">
  <link rel="stylesheet" href=" {{ asset("backend/css/style.css") }} ">
</head>
<body>
<!-- START NAVBAR -->

 @include('admin/layout.navbar')

<!-- END NAVBAR -->

<!-- START CONTENT -->

@yield('content')

<!-- END CONTENT -->

</div>
<footer id="main-footer" style="bottom: 0; position: absolute; width: 100%; height: 100px; " class="bg-dark text-white mt-5 p-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="lead text-center">
          Copyright &copy; 2024 BlogeLaravel
        </p>
      </div>
    </div>
  </div>
</footer>
  <script src=" {{ asset("backend/js/jquery.min.js") }}"></script>
  <script src=" {{ asset("backend/js/popper.min.js") }} "></script>
  <script src=" {{ asset("backend/js/bootstrap.min.js") }} "></script>
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  <script>
		CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>