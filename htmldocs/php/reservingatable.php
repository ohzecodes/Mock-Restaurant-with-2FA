<!DOCTYPE html>
<html lang='en'>

<head>
    <meta name="description" content="Ways to the world largest underwater restuarant." />
    <meta charset="utf-8">
    <title>reach</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    <link rel="icon" href="../assets/logo.png" type="image/gif">
    <style>
    h2 {
        margin-bottom: 70px;
    }

    #pdiv {
        text-align: center;
    }

    .full {
        width: 70%;

    }

    #btntd {
        justify-content: center;
        display: flex;
    }

    table {
        margin: auto;

    }
    </style>
    <script type="application/javascript" src="../../scripts/script.js" defer></script>
</head>

<body>

    <main>
        <header>

            <nav class="navbar-nav navbar-expand-xl">
                <figure class="navbar-brand">
                    <img id="logo" src="../../assets/logo.png" alt="logo">
                    <figcaption>ERCENCI</figcaption>
                </figure>
                <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="../index.html"> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../menu.html"> Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="../About.html"> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="../reach.html"> Reach Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact.html"> Contact</a></li>

                        <li class="nav-item"><a class="nav-link" href="php/login.php"> login</a></li>
                    </ul>

            </nav>
            </div>
        </header>
        <?php
include "./connect.php";
$link = mysqli_connect($host, $user, $pass, $db_name);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// if(!isset($name)&&!isset($phone)){
$name = strip_tags($_REQUEST['name']);
$phone = strip_tags($_REQUEST['phone']);
$email = strip_tags($_REQUEST['email']);
$sel = $_REQUEST['select'];
$preference = $_REQUEST['select1'];
$date = $_REQUEST['date'];
$c = strip_tags($_REQUEST['Comments']);

echo ("<p id=pdiv>Dear Guest, </p>");

echo ("<p id=pdiv> We are honoured to have you on board.  Please confirm the following information:</p>");

echo "<br><br>";

echo ('

                        <table>
                            <tr>
                            <th>Name</th>
                            <td>' . $name . '</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>' . $phone . '</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>' . $email . '</td>
                        </tr>
                        <tr>
                        <th>Date</th>
                        <td>' . $date . '</td>
                        </tr>
                        <tr>
                            <th>Attendees</th>
                            <td>' . $sel . '</td>
                        </tr>

                        <tr>
                            <th>Contact Preference</th>
                            <td>' . $preference . '</td>
                        </tr>
                        <tr>
                            <th>Comments</th>
                            <td>' . $c . '</td>
                        </tr>


                        </table>');
echo ("<form action=''>
                        <input type='text' name='name'  hidden value='$name'>
                        <input type='text' name='phone' hidden value='$phone'>
                        <input type='text' name='email' hidden  value='$email'>
                        <input type='date' name='date'  hidden value='$date'>
                        <input type='text' name='select' hidden  value='$sel'>
                        <input type='text' name='select1' hidden value='$preference'>
                        <input type='text' name='Comments' hidden value='$c'>
                        <table class='table table-borderless'><tbody><tr><td id=btntd><button class='btn btn-dark full' type=submit name='confirm'>Confirm</button>
                        </td></tr></tbody></table>

                        </form>");

$sn = mysqli_real_escape_string($link, strip_tags($name));
$sp = mysqli_real_escape_string($link, strip_tags($phone));
$se = mysqli_real_escape_string($link, strip_tags($email));
$sd = mysqli_real_escape_string($link, $date);
$sat = mysqli_real_escape_string($link, $sel);
$spref = mysqli_real_escape_string($link, $preference);
$scom = mysqli_real_escape_string($link, strip_tags($c));

if (isset($_REQUEST['confirm'])) {
    # ("name","123456789","aa@.com","0034-12-12","1","Email","asfdghjhk");

    $d = $sd;
    $query = 'INSERT INTO reserve( name, phone, email, date, attendees, preference, comments)
                                                VALUES ("' . $sn . '","' . $sp . '","' . $se . '","' . $sd . '","' . $sat . '","' . $spref . '","' . $scom . '");';

    $m = mysqli_query($link, $query);
    if (!$m) {
        printf("Error: %s\n", mysqli_error($link));

    } else {
        printf("sucessful");
    }

}

?>
        <br><br>
        <a href="../contact.html#ReserveATable">Back to Reservations</a>
        <footer>
            <div class=Photocredits>
                <h1>Photo Credits</h1>
                <ul>

                    <li><a href="../photocredits.html#licence">license</a></li>
                </ul>
            </div>
            <div class="footernav">
                <img src="../../assets/halflogo.png" width="150" alt="Ercenci">
                <ul>
                    <li><a href="../index.html"> Home</a></li>
                    <li><a href="../menu.html"> Menu</a></li>
                    <li><a href="../About.html"> About</a></li>
                    <li><a href="../reach.html"> Reach Us</a></li>
                    <li><a href="../contact.html"> Contact</a></li>

                </ul>
            </div>
            <div class="important">
                <p>Call 123-X2D-Y0Q1 to reserve a table or <a href="../contact.html#ReserveATable"> reserve online </a> </p>
                <p id=Credits_to_Author>Designed and produced by <span id=aurthor></span> as a project for A Web
                    development class </p>
            </div>
        </footer>
</body>

</html>