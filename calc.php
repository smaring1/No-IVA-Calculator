<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   
   <head>
      <title>No IVA Calculator</title>
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #3AA7F0;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: #ddff00;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter the original product price (with IVA)</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['price'])) {
               $price = (int) $_POST['price'];
               if ($price > 2800000) {
                  echo "This product doesn't have IVA exception.\nThe price is $". $price;
               } else {
                  echo "The price without IVA is: $".round($price/1.19);
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "price" placeholder = "enter the price"
               required autofocus></br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "inputprice">Calculate</button>
         </form>
      </div> 
   </body>
</html>