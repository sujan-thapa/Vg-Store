<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">


    <!-- CSS -->
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="/css/site/appp.css" rel="stylesheet">
    <title>@section('title')

    @show</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>

    {{-- for navbar --}}
    @section('navbar')
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">
            <div class="nav-container top">
                <div class="logo-image">
                    <img src="images/vg.jpg" class="img-fluid" alt="Vg">
                </div>
                <a href="/" class="navv">Vg Store</a>

            </div>
        </a>
    </nav>

    @show


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
    <script src="js/app.js"></script>
</body>
</html>
