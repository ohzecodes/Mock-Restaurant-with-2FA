<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="../../css/stylesheet.css">
  <script type="application/javascript" type="application/javascript"
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer>
  </script>
  <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" defer>
  </script>
  <script type="application/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" defer>
  </script>
  <link rel="icon" href="../../assets/logo.png" type="image/gif">
</head>

<body>
  <header>

    <nav class="navbar-nav navbar-expand-xl">
      <a href="../index.html">
        <figure class="navbar-brand">
          <img id="logo" src="../../assets/logo.png" alt="logo">
          <figcaption>ERCENCI</figcaption>
        </figure>
      </a>
      <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="white" class="bi bi-list"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="../index"> Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../menu"> Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="../About"> About</a></li>
          <li class="nav-item"><a class="nav-link" href="../reach"> Reach Us</a></li>
          <li class="nav-item"><a class="nav-link" href="../contact"> Contact</a></li>
          <li class="nav-item" id='reserve'><a class="nav-link" href="../contact#ReserveATable"> Reserve A
              Table</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="login.php"> login</a></li>
        </ul>

    </nav>
    </div>
  </header>
  <main class="top-100">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <figure class="text-center">
                <img id="logo" class="with_bg" src="../../assets/logo.png" alt="logo">
                <figcaption>ERCENCI</figcaption>
              </figure>
              <form class="form-signin" method="POST" action="processes.php">
                <div class="form-label-group">
                  <label for="inputEmail">Username</label>
                  <input type="text" id="inputEmail" name="username" class="form-control" placeholder="username"
                    required autofocus>
                </div><br>
                <div class="form-label-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" name="userpass" class="form-control" placeholder="Password"
                    required>
                </div><br>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign
                  in</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footernav">
      <img src="../../assets/halflogo.png" width="150" alt="Ercenci">
      <ul>
        <li><a href="../index">Home</a></li>
        <li><a href="../menu">Menu</a></li>
        <li><a href="../About">About</a></li>
        <li><a href="../reach">Reach Us</a></li>
        <li><a href="../contact">Contact</a></li>
        <li><a href="../contact#ReserveATable" id="reserve">Reserve A Table</a></li>
        <li><a href="./login">login</a></li>
        <li><a href="../photocredits">Photocredits</a></li>
        <li><a href="../photocredits#license">License</a></li>
      </ul>
    </div>
    <div class="important">
      <p id="Credits_to_Author">Developed By <span id="Author"></span> for A Web development class</p>
    </div>
  </footer>

</body>

</html>