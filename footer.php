<html>
<style>
  @import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  font-family: 'Montserrat', sans-serif;
  scroll-behavior: smooth;
}
a {
  text-decoration: none;
}
.container {
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
p {
  color: black;
  font-size: 1.4rem;
  margin-top: 5px;
  line-height: 2.5rem;
  font-weight: 300;
  letter-spacing: .05rem;
}
.section-title {
  font-size: 4rem;
  font-weight: 300;
  color: black;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: .2rem;
  text-align: center;
}
.section-title span {
  color: crimson;
}

.cta {
  display: inline-block;
  padding: 10px 30px;
  color: white;
  background-color: transparent;
  border: 2px solid crimson;
  font-size: 2rem;
  text-transform: uppercase;
  letter-spacing: .1rem;
  margin-top: 30px;
  transition: .3s ease;
  transition-property: background-color, color;
}
.cta:hover {
  color: white;
  background-color: crimson;
}
.brand h1 {
  font-size: 3rem;
  text-transform: uppercase;
  color: white;
}
.brand h1 span {
  color: crimson;
}
/* Footer */
#footer {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
#footer .footer {
  min-height: 200px;
  flex-direction: column;
  padding-top: 50px;
  padding-bottom: 10px;
}
#footer h2 {
  color: white;
  font-weight: 500;
  font-size: 1.8rem;
  letter-spacing: .1rem;
  margin-top: 10px;
  margin-bottom: 10px;
}
#footer .social-icon {
  display: flex;
  margin-bottom: 30px;
}
#footer .social-item {
  height: 50px;
  width: 50px;
  margin: 0 5px;
}
#footer .social-item img {
  filter: grayscale(1);
  transition: .3s ease filter;
}
#footer .social-item:hover img {
  filter: grayscale(0);
}
#footer p {
  color: white;
  font-size: 1.3rem;
}
/* End Footer */

</style>


  <body><!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>F</span>aysal <span>J</span>amil</h1></div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020 zihad. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>