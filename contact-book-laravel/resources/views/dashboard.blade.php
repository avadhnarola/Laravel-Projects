<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Book </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="header.css">
    <style>
        .yuji-mai-regular {
            font-family: "Yuji Mai", serif;
            font-weight: 400;
            font-style: normal;
        }

        .main-div {
            width: 100%;
            height: 505px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-space-between">
        <div class="container">
            <a class="navbar-brand heading" href="/dashboard">
                <i class="fa-regular fa-address-book"></i>
                <i>Contact Book</i>
            </a>
            <form class="form-inline  ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between;">
                <div class="mr-auto"></div>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="/dashboard">Home </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/addContact">Add Contact </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/viewContact">View Contact </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/manageAccount">Manage Account </a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right p-0" aria-labelledby="navbarDropdown">
                            <?php foreach ($data as $key => $value) { ?>
                            <div class="card text-center" style="border:none; padding:20px;">
                                <div class="image">
                                    <img src="https://avatars.mds.yandex.net/i?id=ad1f8ba294799802cab08ac374a914d8aec61944-10877191-images-thumbs&n=13"
                                        alt="{{$value->name}}" class="rounded-circle" style="width:50px;height:50px;">
                                </div>
                                <h4>{{$value->name}}</h4>
                                <p class="">{{$value->email}}</p>
                                <p>{{$value->gender}}</p>
                                <p>Contact : {{$value->contact}}</p>
                            </div>
                            <?php } ?>
                        </div>

                    </li>

                    <li class="nav-item logout">
                        <a href="{{URL('/logout')}}" class="btn btn-outline-danger nav-link l-btn"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-div">
        <i>
            <h3 class="yuji-mai-regular">Welcome to my Contact Book</h3>
            <hr style="width:100%;text-align:center;">
        </i>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>