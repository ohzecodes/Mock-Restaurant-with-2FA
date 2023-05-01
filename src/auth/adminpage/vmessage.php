<?php
  session_start();
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
              table, th, td {
                border: 1px solid;
              }
              td, th{
                  width:100px;
              }
              th{
                  text-transform: capitalize;
              }
          </style>

          <script type="application/javascript" src="../../scripts/script.js" defer></script>
        </head>
        <body>
          <?php include "./head.html";?>
          <main class="top-100">
            <table>
              <tr>
                <th id="id">Message id</th>
                <th id="name">name </th>
                <th id="email">email</th>
                  <th id="msg">msg</th>
                <th id="date">msg recieved on</th>
                <th id="del">delete</th>
              </tr>
              <tbody>
                <?php
                  $select = 'SELECT * FROM msg';

                      $results = mysqli_query($link, $select);

                      while ($record = mysqli_fetch_assoc($results)) {
                          $id = $record['msgid'];
                          $name = $record['name'];
                          $email = $record['email'];
                          $msg = $record['msg'];
                          $date = $record['recievedat'];

                          $delete = "<form>
                              <input type='text' name='operation'  value='delete' hidden />
                              <input type='text' name='id'  value='$id' hidden/>
                              <button  class='btn btn-danger'>Delete</button>
                              </form> ";
                          echo ('<tr>
                              <td headers=id>' . $id . '</td>
                              <td headers=name>' . $name . '</td>
                              <td headers=email>' . $email . '</td>
                              <td headers=msg>' . $msg . '</td>
                              <td headers=date>' . $date . '</td>
                              <td headers=del>' . $delete . '</td>');

                      }
                      if (isset($_REQUEST['operation'])) {
                          if ($_REQUEST['operation'] == 'delete') {
                              echo (' <script type="application/javascript">alert(' . 'this enteree with' . $_REQUEST['id'] . 'will be deleted)</script>');
                              $sqldel = "DELETE FROM msg WHERE msgid=" . $_REQUEST['id'] . ';';
                              $delt = mysqli_query($link, $sqldel);
                              echo ('the msg was deleted');
                              unset($_REQUEST['operation']);
                          }
                      }
                  
                ?>
              </tbody>
            </table>
          </main>
            
        </body>
      </html> 
    <?php
  }
        mysqli_free_result($results);
        mysqli_close($link);
?> 