<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Happy Book Store</title>


    <!-- STYLE -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif !important
        }

        img {
            width: 100%;
        }

        .h5_Title {
            font-size: 15px;
        }

        p {
            font-size: 13px;
        }

        .categoryMenu {
            font-size: 12px;
        }

    </style>


    <!-- STYLE -->

</head>

<body>

    <img src="../assets/backgroundHBS.png" alt="" class="logohbs">

    <nav class="navbar navbar-dark navbar-expand-lg text-center" style="background-color: #1E90FF;">
        <div class="container-fluid center">
            <div class="justify-content-center">
                <button class="navbar-toggler btn-outline-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active text-center">
                        <a class="nav-link text-white {{ Request::Path() === '/' ? : ''}}" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white text-white" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item categoryMenu" href="/category?id=1">Fiction</a></li>
                            <li><a class="dropdown-item categoryMenu" href="/category?id=2">Science</a></li>
                            <li><a class="dropdown-item categoryMenu" href="/category?id=3">Comedy</a></li>
                            <li><a class="dropdown-item categoryMenu" href="/category?id=4">Horror</a></li>
                            <li><a class="dropdown-item categoryMenu" href="/category?id=5">Computer</a></li>
                        </ul>
                    </li>

                    <li class="nav-item text-center">
                        <a class="nav-link text-white {{ Request::Path() === 'contact' ? : ''}}"
                            href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-md-7 p-1">
                <h5 class="p-2 font- fw-bolder" style="background-color:#F2B645;">Book Detail</h5>
                <div class="pl-2 pt-1">
                    <p><strong>Title : </strong><span>{{$bookdetail->book->title}}</span></p>
                    <p><strong>Author : </strong><span>{{$bookdetail->author}}</span></p>
                    <p><strong>Publisher : </strong><span>{{$bookdetail->publisher}}</span></p>
                    <p><strong>Year : </strong><span>{{$bookdetail->year}}</span></p>
                    <p><strong>Description : </strong></p>
                    <p><span>{{$bookdetail->description}}</span></p>
                </div>
                
               
            </div>

            <div class="col-md-2 p-1">
                <h5 class="p-2 fw-bolder" style="background-color:#F2B645;">Category</h5>
                <a class="d-block p-2 text-decoration-none categoryMenu" href="/category?id=1">Fiction</a>
                <a class="d-block p-2 text-decoration-none categoryMenu" href="/category?id=2">Science</a>
                <a class="d-block p-2 text-decoration-none categoryMenu" href="/category?id=3">Comedy</a>
                <a class="d-block p-2 text-decoration-none categoryMenu" href="/category?id=4">Horror</a>
                <a class="d-block p-2 text-decoration-none categoryMenu" href="/category?id=5">Computer</a>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">

        <div class="text-center p-3" style="background-color: #0D243C;">
            © Happy Book Store 2021
        </div>

    </footer>

</body>

</html>
