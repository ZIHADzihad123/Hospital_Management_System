<?php include('Model/DATABASE.php') ?>
<!DOCTYPE HTML>  
<html>
<body>
<p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         
          <fieldset>
            <legend><strong>FORGOT PASSWORD</strong></legend>

            Enter Email : <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>

            <br>
            <hr>
            <input type="submit" name="forgot_pass" value="Submit">
            <input type="reset" value="Reset"> 

          </fieldset>
          <br>

        </form>

        <?php require 'footer.php';?>
      </body>
      </html>