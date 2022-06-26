<!DOCTYPE html>  
 <html>  

 <class style="float:right;color:blue;">&nbsp;<a href='welcome.php'>Backpage</a>&nbsp;</class>
    <h2 style="color:green";>Azex Company</h2>
    <br><br><hr><br><br>
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>Email</th>  
                               <th>User Name</th> 
                               <th>Password</th> 
                               <th>Gender</th> 
                               <th>Date Of Birth</th> 
                               
                               <th>blood group</th>

                          </tr>  
                          <?php   
                          $data = file_get_contents("Registration.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["password"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dateOfBirth"].'</td>
                               <td>'.$row["blood group"].'</td>
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>

                 <br><br><hr>
  <center><?php include 'footer.php';?></center>
      </body>  
 </html>  