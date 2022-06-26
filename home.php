<html>
<style>
.flex-container {
  display: flex;  
}


</style>
<head>  
        
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head> 
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS\homepage  carousel slider.css">
</head>
	<body>
    
		


   

    <class><?php include 'header.php';?></class>
  
     <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
     <div  class="slider">
      <div  class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="PICS\homepage\1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="PICS\homepage\2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="PICS\homepage\3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="PICS\homepage\4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web Design</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web Design</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web Design</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web Design</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
     
     
        <div class="container" style="width:800px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Date</th> 
 
                               <th>Notice </th> 
                              
                               

                          </tr>  
                          <?php   
                          $data = file_get_contents("setnotice.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["date"].'</td>
                               <td>'.$row["name"].'</td>
                               
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>

                 <br><br><hr>

  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Front End Developer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@gmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Fatikchhari, Chittagong, Bangladesh</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  
  <script src="./app.js"></script>
		
	</body>
</html>





<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slider</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

   
    <div class="slider">
      <div class="slides">
       
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
       
        <div class="slide first">
          <img src="1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="4.jpg" alt="">
        </div>
       
        automatic navigation start
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        
      </div>
      
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      
    </div>
   

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

  </body>
</html> -->