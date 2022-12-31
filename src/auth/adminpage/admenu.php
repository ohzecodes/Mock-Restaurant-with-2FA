<?php
  session_start();
  if (($_SESSION["loggedin"] && $_SESSION["loggedin2"])) {
      include_once "../connect.php";
      $link = mysqli_connect($host, $user, $pass, $db_name);
      ?>
    <!DOCTYPE html>
      <html lang='en'>
      <head>
        <meta charset="utf-8">
        <title>menu</title>
        <link rel="icon" href="/assets/logo.png" type="image/gif">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/stylesheet.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>
          table, th, td {border: 1px solid;}
          th{text-transform: capitalize;}
          .menutitle{justify-content: center;display: flex;}
          table{margin:20px auto; text-align:center;}
          th, td {width:150px}
        </style>

      </head>
      <body>
        <?php include "./head.html";?>
        <main class="top-100">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <th>
                  <button style="width:100%;" type="button" class="btn btn-success" data-toggle="modal"
                    data-target="#exampleModal">ADD NEW ITEM
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Insert</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="">
                            <div class="row">
                              <div class="col">
                                <label for=food>Food item </label>
                              </div>
                              <div class="col">
                                <input id=food name=ifood required type="text" class="form-control">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="price">price </label>
                              </div>
                              <div class="col">
                                <input type="number" required name=iprice class="form-control" id="price">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="CustomSelect">Category</label>
                              </div>
                              <div class="col-sm">
                                <select class="form-control" required name="icat" id="CustomSelect">
                                  <option disabled selected value> -- select an option -- </option>
                                  <option value="Grilled on a volcano rock">Grilled on a volcano rock
                                  </option>
                                  <option value="sushi">Sushi</option>
                                  <option value="Caviars">Caviars</option>
                                  <option value="Oysters">Oysters</option>
                                  <option value="Platers/Towers">Platers/Towers</option>
                                  <option value="Chefs choice">Chef's choice</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name='insert' class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>
            </tbody>
          </table>
          <?php
            if (isset($_REQUEST['insert'])) {
                $ifood = $_REQUEST['ifood'];
                $iprice = $_REQUEST['iprice'];
                $icat = $_REQUEST['icat'];
                $sqlin = "INSERT INTO menu(Foodname,Price,Category) VALUE(" . "'$ifood'" . ",$iprice," . "'$icat'" . ");";
                mysqli_query($link, $sqlin);

            }
            unset($_REQUEST['insert']);
          ?>
          <?php
            function modal($id, $name, $price, $cat){
                    $modal = '<div class="modal fade" id="' . $cat . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">update item ' . $id . '</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div><div class="modal-body"> <form id=modalformupdate> <input type="text" name="operation" class="form-control" value=update2 hidden/> <label>Id<input type="text" name="itid" class="form-control" value=' . $id . ' readonly/> </label> <br><label>Name of Menu item<input type="text" class="form-control" name="foodnameup" value="' . $name . '"/> </label> <br><label>Price<input type="text" name="priceup" class="form-control" value=' . $price . '/> </label> <br><label>Category<input type="text" name="category" class="form-control" readonly value=' . $cat . '/> </label> <br></div><div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="submit" name="submittoupdate" class="btn btn-primary">Save changes</button> </div></form> </div></div></div>';
                    echo ($modal);
            }
            function reveal($id, $name, $price, $cat){
              modal($id, $name, $price, $cat);
              echo (' <script type="application/javascript"> $("#' . $cat . '").modal("show");  </script>');
            }

          ?>
              <?php
                function head($catname){
                        echo ('<div class="menutitle clearfix" id="TG">
                                <h2 style="float:clear">' . $catname . '</h2>
                            </div>');
                }
                function table($link, string $catname){
                  echo ('<table class="table"><tr><th id="id">id</th><th id="meal">Meal </th><th id="price">Price</th><th id="price">Category</th><th id="update">update </th><th id="del">delete</th></tr>');
                  $select = 'SELECT * FROM menu WHERE Category="' . $catname . '" ORDER BY  Price asc';
                  $results = mysqli_query($link, $select);
                  while ($record = mysqli_fetch_assoc($results)) {
                    $id = $record['Itemid'];
                    $name = $record['Foodname'];
                    $price = $record['Price'];
                    $cat = $record['Category'];
                    $thisid = $id;
                    $update = '<form action="" method=post id=up><input type="text" name="operation"  value=update hidden /><input type="text" name=tid  value="' . $id . '"  hidden/><input type="text" name="foodname"  value="' . $name . '" hidden/><input type="text" name="price"  value=' . $price . ' hidden/><input type="text" name="category"  value=' . $cat . ' hidden /><button type="" name="update"   data-toggle="modal" data-target="#exampleModal" class= "btn btn-primary"> update</button></form>';
                    $delete = "<form><input type='text' name='operation'  value='delete' hidden  /><input type='text' name='id'  value=$thisid  hidden/><button  class='btn btn-danger'>Delete</button></form> ";
                    echo ('<tr><td headers=meal>' . $id . '</td><td headers=meal>' . $name . '</td><td headers=price>' . $price . '</td><td headers=del>' . $cat . '</td><td headers=update>' . $update . '</td><td headers=del>' . $delete . '</td>');
                  }
                  if (isset($_REQUEST['operation'])) {
                    if ($_REQUEST['operation'] == 'delete') {
                      // echo(' <script>alert('.'this enteree with'. $_REQUEST['id']. 'will be deleted)</script>');
                      $sqldel = "DELETE FROM menu WHERE Itemid=" . $_REQUEST['id'];
                      $delt = mysqli_query($link, $sqldel);
                      // echo($sqldel);
                      unset($_REQUEST['submittoupdate']);
                    }
                    if ($_REQUEST['operation'] == 'update') {
                      $name = $_REQUEST['foodname'];
                      $id = $_REQUEST['tid'];
                      $price = $_REQUEST['price'];
                      reveal($id, $name, $price, $_REQUEST['category']);
                    }
                    if ($_REQUEST['operation'] == 'update2') {
                      $id = $_REQUEST['itid'];
                      $fn = $_REQUEST['foodnameup'];
                      $p = $_REQUEST['priceup'];
                    //   echo($p.".\n. ".$fn );
                      //   echo("\n\n\n");
                      $sqlup = "UPDATE menu SET Foodname='$fn',Price=$p WHERE Itemid=$id";
                      $sqlupd = mysqli_query($link, $sqlup);
                      // echo ($sqlupd);
                      // echo("\n");
                      // print("item updated: ".$id);
                    } else {
                    unset($_REQUEST['submittoupdate']);
                    unset($_REQUEST['operation']);
                    }
                  }
                  ?>
                  <tr> <td colspan=6> <a href="#top">Back to the top</a> </td> </tr>
                  </table>
              <?php
               }
              ?>
          <?php
            head("Grilled on a volcano rock");
            table($link, "Grilled on a volcano rock");
            head("Sushi");
            table($link, "sushi");
            head("Caviars");
            table($link, "Caviars");
            head("Oysters");
            table($link, "Oysters");
            head("Platers/Towers");
            table($link, "Platers/Towers");
            head("Chef's choice");
            table($link, "Chefs choice");
          ?>
        </main>
      </body>
    </html>
  <?php
  }
  mysqli_free_result($results);
  mysqli_close($link);
?>