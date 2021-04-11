<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">


    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- bootstrap css --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    {{-- css lin --}}
    <link rel="stylesheet" href=@section('css') @show>


    {{-- <link href="/css/site/app.css" rel="stylesheet"> --}}
    <title>@section('title')
    @show</title>

    {{-- lin for favicon image --}}
    <link rel="shortcut icon" href="images/faviconn.ico" type="image/x-icon">

</head>
<body>
    @section('body')

    <video autoplay muted loop id="viddeo">
        <source src="video/cosmetics.mp4" type="video/mp4">

    </video>

    {{-- for testing remove it later --}}
    {{-- <p class="pp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde minima inventore fugit. Dolorum reprehenderit aliquid cupiditate dolorem nulla ab dicta sint labore accusantium. Totam possimus dolores id eveniet doloribus, impedit, voluptates quia harum voluptas a, dolorum numquam laudantium voluptatibus iusto?
        </p> --}}




    @show

    <div class="container">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
    <script src="js/dashboard/app.js"></script>
</body>
</html>
