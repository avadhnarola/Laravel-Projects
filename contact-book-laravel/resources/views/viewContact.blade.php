<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="view.css">

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

    <div class="container text-center mt-5">
        <i><h3 class="yuji-mai-regular">View Contact</h3></i>
    </div>

    <div class="main">
        <table class="table">
            <thead class="header">
                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>Saved</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $values) { ?>
                <tr>
                    <td>{{$values->id}}</td>
                    <td>{{$values->name}}</td>
                    <td>{{$values->contact}}</td>
                    <td>{{$values->save}}</td>
                    <td>
                        <a href="{{url('/updateContact/' . $values->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="{{url('/delete/' . $values->id)}}"><i class="fa-regular fa-trash-can"
                                style="margin-left:7px;"></i></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
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