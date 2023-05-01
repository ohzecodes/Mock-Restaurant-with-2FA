<?php
  include_once '../connect.php';
  include_once '../findme.php';
  session_start();



    if (($_SESSION["loggedin"])) {
        
        function random($min, $max)
    {

        // code stay on server for 60s
        $interval = 60 * 2;
        srand(floor(time() / $interval));

        $c = rand($min, $max);
        return $c;
    }

          $code = random(10000, 99999);
            $_SESSION["code"]=$code;  
          unset($code);
          mail($myemail, "Your Code", "Your Code is". $_SESSION["code"]);
        
        
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
#but,#userinput{width:90%;padding:.5rem;border:1px solid #ddd}#but,#userinput,form{border:1px solid #ddd}#but,label{font-size:1.2rem;font-weight:700;color:#fff}
#but,#userinput,label{color:#fff}body{background:#1a2b48}input[disabled]{background:#cfd8dc!important;outline:white!important;border-color:transparent!important}
form{padding:1rem;width:fit-content;margin:100px auto;background-color: #212121;}
label{display:block;margin-bottom:.5rem;text-transform: capitalize;}
#userinput{background-color:transparent;outline: transparent;}
#but{color:black; background-color:#add8e6;border-radius:0;margin: 20px 0;text-transform:uppercase;}
a.btn{
    color:white;
}
a.btn:hover{
       color:white;
       text-decoration:underline;
}
a.toHome::before{
    content:"<-";
}
a.btn.btn-success::after{
     content:"->";
}
    </style>


  </head> 
  <body>
<?php echo $pass?>
  <form method="post" action="">
      <a class="btn toHome" href="../login.php">back to login</a>
    <label for="userinput"> Please enter your code here </label>
    <input type="password" id="userinput" value="<?php
    
      if(trim(getenv('DISABLE_2FA')) ==="true")  {
        echo ($_SESSION["code"]);
      }
      ?>" />
    <input type="button" value="submit" id="but" class="btn btn-primary" />
    <div id="response"></div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
  <script>
      function ajaxcall(url, data, targetDivId) {
        $.ajax({
          type: "POST",
          url: url,
          data: data,
          success: function(returnedData) {
            $("#" + targetDivId).html(returnedData);
               $("#but").attr("disabled",true);   
               $("#but").off('click');
            console.log(returnedData.match("danger"))
           if(returnedData.match("danger")!=null){
              $("#userinput").addClass("danger")
              $("#but").addClass("danger")
              $("#userinput").attr("disabled",true)
              $("#but").attr("disabled",true)
              $("#but").off('click');
            }

          },
        });
      }

      $("#but").click((e) => {
        let a = ajaxcall("two.php", {
          num: $("#userinput").val()
        }, "response");
      });
      $("#userinput").keypress(function(e) {
        if (e.key === "Enter") {
          e.preventDefault();
        }
    });
  </script>
</body>
</html>


<?php
} else {
    echo ("you are not logged in");
}

?>