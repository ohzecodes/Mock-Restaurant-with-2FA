<!doctypehtml>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Confirm your reservation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
    <link href="../../css/stylesheet.css" rel="stylesheet">
    <link href="../assets/logo.png" rel="icon" type="image/gif">
    <style>
    #backtomain {
      display: block;
      margin-top: auto;
      margin-right: auto;
      margin-bottom: 30px;
      margin-left: auto;
    }

    #backtomain:hover {
      border: 3px solid var(--gray-dark);
      background-color: white;
      color: var(--gray-dark);
    }

    .confirm:hover {
      border: 3px solid var(--blue);
      background-color: white;
      color: var(--blue);
    }

    .reservation {
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }

    .reservation.error {
      color: white;
      background-color: red;
    }

    .reservation.success {
      color: rgb(108, 107, 78);
      background-color: rgb(233, 240, 216);
    }

    .p-center {
      text-align: center
    }

    .full {
      width: 70%
    }

    #btntd {
      justify-content: center;
      display: flex
    }

    table {
      margin: auto;
    }
    </style>
    <script defer src="../../scripts/script.js" type="application/javascript"></script>
  </head>

  <body>
    <header>
      <nav class="navbar-nav navbar-expand-xl"><a href="../index.html">
          <figure class="navbar-brand"><img alt="logo" src="../../assets/logo.png" id="logo">
            <figcaption>ERCENCI</figcaption>
          </figure>
        </a><button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
          class="custom-toggler ml-auto navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse"
          type="button"></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="../menu.html" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="../About.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="../reach.html" class="nav-link">Reach Us</a></li>
            <li class="nav-item"><a href="../contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="php/login.php" class="nav-link">login</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="top-100">
      <?php  include_once "./connect.php";
      $link = mysqli_connect($host, $user, $pass, $db_name , $port);
      if (!$link) {
          echo "Error: Unable to connect to MySQL." . PHP_EOL;
          echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
          echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
          exit();
      }
      $name = strip_tags($_REQUEST["name"]);
      $phone = strip_tags($_REQUEST["phone"]);
      $email = strip_tags($_REQUEST["email"]);
      $sel = $_REQUEST["select"];
      $preference = $_REQUEST["select1"];
      $date = $_REQUEST["date"];
      $c = strip_tags($_REQUEST["Comments"]);
      if (isset($_REQUEST["confirm"])) {
          $d = $sd;
          $query =
              'INSERT INTO reserve( name, phone, email, date, attendees, preference, comments) VALUES ("'.
              $sn .'","' .$sp .'","' .$se . '","' .$sd .'","' .$sat .'","' .$spref .'","' .$scom .'");';
          $m = mysqli_query($link, $query);
          if (!$m) {
              echo "<span class='reservation error'>" .
                  "Error:" .
                  mysqli_error($link) .
                  "</span>";
          } else {
              echo "<span class='reservation success'>Sucessful Reservation</span>";
          }
      }
      ?>
      <p class="p-center">Dear Guest,</p>
      <p class="p-center">We are honoured to have you on board. Please confirm the following information:</p>
      <?php
      echo "<table class='table container'> <tr> <th>Name</th> <td>" .
          $name .
          "</td></tr><tr> <th>Phone</th> <td>" .
          $phone .
          "</td></tr><tr> <th>Email</th> <td>" .
          $email .
          "</td></tr><tr> <th>Date</th> <td>" .
          $date .
          "</td></tr><tr> <th>Attendees</th> <td>" .
          $sel .
          "</td></tr><tr> <th>Contact Preference</th> <td>" .
          $preference .
          "</td></tr><tr><th>Comments</th><td>" .
          $c .
          "</td></tr></table>";
      if (!isset($_REQUEST["confirm"])) {
          echo "<form action=''> <input type='text' name='name' hidden value='$name'> 
          <input type='text' name='phone' hidden value='$phone'> <input type='text' name='email' hidden value='$email'>
           <input type='date' name='date' hidden value='$date'> <input type='text' name='select' hidden value='$sel'>
            <input type='text' name='select1' hidden value='$preference'> <input type='text' name='Comments' hidden value='$c'>
         <table class='table table-borderless'><tbody><tr> <td id=btntd><button class='btn  btn-primary confirm full' type=submit name='confirm'>Confirm</button> </td></tr></tbody></table></form>";
      }
      $sn = mysqli_real_escape_string($link, strip_tags($name));
      $sp = mysqli_real_escape_string($link, strip_tags($phone));
      $se = mysqli_real_escape_string($link, strip_tags($email));
      $sd = mysqli_real_escape_string($link, $date);
      $sat = mysqli_real_escape_string($link, $sel);
      $spref = mysqli_real_escape_string($link, $preference);
      $scom = mysqli_real_escape_string($link, strip_tags($c));
      ?>

      <a href="../contact.html#ReserveATable" class="btn btn-dark full" id="backtomain">Back to Main</a>


      <footer>
        <div class="footernav"><img src="../../assets/halflogo.png" width="150" alt="Ercenci">
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