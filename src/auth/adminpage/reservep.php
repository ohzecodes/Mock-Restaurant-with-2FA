<?php
  session_start();
  echo $_SESSION["loggedin2"];
  if (($_SESSION["loggedin"] && $_SESSION["loggedin2"])) {
      include_once "../connect.php";
      $link = mysqli_connect($host, $user, $pass, $db_name , $port);

      ?>
    <!DOCTYPE html>
      <html lang='en'>

      <head>
      
        <meta charset="utf-8">
        <title>menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/stylesheet.css">
        <link rel="icon" href="/assets/logo.png" type="image/gif">

        <style>

        </style>
        <script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script type="application/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

        <style>
        table,
        th,
        td {
          border: 1px solid;
        }

        th {
          text-transform: capitalize;
        }
        </style>

        <script type="application/javascript" src="/scripts/script.js" defer></script>
      </head>

      <body>
        <?php include "./head.html";?>

        <main class="top-100">
        
          <table class="table table-borderless">
            <th>

            <th>
              <a href="/contact.html#ReserveATable" class='btn btn-success' target="_blank"> add new reservation</a>
            </th>
            </th>


          </table> <br><br>
          <table class="table">
            <tr>
              <th id="id">reservation id</th>
              <th id="name">name </th>
              <th id="phone">Phone</th>
              <th id="email">email</th>
              <th id="date">date</th>
              <th id="at">attendees</th>
              <th id="pref">contact preference</th>
              <th id="comments">comment</th>

              <th id="del">delete</th>
            </tr>
            <tbody>
              <?php
                $select = 'SELECT * FROM reserve';

                $results = mysqli_query($link, $select);

                while ($record = mysqli_fetch_assoc($results)) {
                    $id = $record['reservationid'];
                    $name = $record['name'];
                    $phone = $record['phone'];
                    $email = $record['email'];
                    $date = $record['date'];
                    $at = $record['attendees'];
                    $pref = $record['preference'];
                    $c = $record['comments'];

                    $delete = "<form>
                        <input type='text' name='operation'  value='delete' hidden />
                        <input type='text' name='id'  value='$id' hidden/>
                        <button  class='btn btn-danger'>Delete</button>
                        </form> ";
                    echo ('<tr><td headers=id>' . $id . '</td><td headers=name>' . $name . '</td><td headers=price>' . $phone . '</td><td headers=email>' . $email . '</td><td headers=date>' . $date . '</td><td headers=at>' . $at . '</td><td headers=pref>' . $pref . '</td><td headers=comment>' . $c . '</td><td headers=del>' . $delete . '</td>');

                }
                if (isset($_REQUEST['operation'])) {
                    if ($_REQUEST['operation'] == 'delete') {
                        echo (' <script type="application/javascript">alert(' . 'this enteree with' . $_REQUEST['id'] . 'will be deleted)</script>');
                        $sqldel = "DELETE FROM reserve WHERE reservationid=" . $_REQUEST['id'];
                        $delt = mysqli_query($link, $sqldel);

                        print("item deleted: " . $_REQUEST['id']);
                        unset($_REQUEST['operation']);
                    }

                }

          ?>
            </tbody>
          </table>
        </main>

      <body>
    </html>    
    <?php
  }

        mysqli_free_result($results);
        mysqli_close($link);
?>