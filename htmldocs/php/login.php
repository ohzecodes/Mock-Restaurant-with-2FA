<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/stylesheet.css">


     <script type="application/javascript" type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"
        defer></script>
     <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"
        defer></script>
     <script type="application/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"
        defer></script>

    <link rel="icon" href="../../assets/logo.png" type="image/gif">
</head>

<body>
    <header>

        <nav class="navbar-nav navbar-expand-xl">
            <figure class="navbar-brand">
                <img id="logo" src="../../assets/logo.png" alt="logo">
                <figcaption>ERCENCI</figcaption>
            </figure>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <img src="../../assets/menu-icon.png" width="20" height="20"> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.html"> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php"> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="../About.html"> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../reach.html"> Reach Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact.html"> Contact</a></li>
                    <li class="nav-item" id='reserve'><a class="nav-link" href="../contact.html#ReserveATable"> Reserve A Table</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="login.php"> login</a></li>
                </ul>

        </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <figure class="text-center">
                            <img id="logo" src="../../assets/logo.png" alt="logo">
                            <figcaption>ERCENCI</figcaption>
                        </figure>


                        <form class="form-signin" method="POST" action="processes.php">
                            <div class="form-label-group">
                                <label for="inputEmail">Username</label>
                                <input type="text" id="inputEmail" name="username" class="form-control"
                                    placeholder="username" required autofocus>

                            </div><br>
                            <div class="form-label-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" name="userpass" class="form-control"
                                    placeholder="Password" required>

                            </div><br>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign
                                in</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
     <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
     <script type="application/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
