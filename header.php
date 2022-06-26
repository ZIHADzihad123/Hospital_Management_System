<!DOCTYPE html>
<html>
<style>

/* Header section */@import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
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
#header {
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100vw;
  height: auto;
}
#header .header {
  min-height: 8vh;
  background-color: rgba(31, 30, 30);
  transition: .3s ease background-color;
}
#header .nav-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 100%;
  max-width: 1300px;
  padding: 0 10px;
}
#header .nav-list ul {
  list-style: none;
  position: absolute;
  background-color: grey;
  width: 100vw;
  height: 100vh;
  left: 100%;
  top: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 1;
  overflow-x: hidden;
  transition: .5s ease left;
}
#header .nav-list ul.active {
  left: 0%;
}
#header .nav-list ul a {
  font-size: 2.5rem;
  font-weight: 500;
  letter-spacing: .2rem;
  text-decoration: none;
  color: white;
  text-transform: uppercase;
  padding: 20px;
  display: block;
}
#header .nav-list ul a::after {
  content: attr(data-after);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  color: rgba(240, 248, 255, 0.021);
  font-size: 13rem;
  letter-spacing: 50px;
  z-index: -1;
  transition: .3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after {
  transform: translate(-50%, -50%) scale(1);
  letter-spacing: initial;
}
#header .nav-list ul li:hover a {
  color: crimson;
}
#header .hamburger {
  height: 60px;
  width: 60px;
  display: inline-block;
  border: 3px solid white;
  border-radius: 50%;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 100;
  cursor: pointer;
  transform: scale(.8);
  margin-right: 20px;
}
#header .hamburger:after {
  position: absolute;
  content: '';
  height: 100%;
  width: 100%;
  border-radius: 50%;
  border: 3px solid white;
  animation: hamburger_puls 1s ease infinite;
}
#header .hamburger .bar {
  height: 2px;
  width: 30px;
  position: relative;
  background-color: grey;
  z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before {
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  background-color: grey;
  transition: .3s ease;
  transition-property: top, bottom;
}
#header .hamburger .bar::after {
  top: 8px;
}
#header .hamburger .bar::before {
  bottom: 8px;
}
#header .hamburger.active .bar::before {
  bottom: 0;
}
#header .hamburger.active .bar::after {
  top: 0;
}
/* End Header section */

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {
  /* header */
  #header .hamburger {
    display: none;
  }
  #header .nav-list ul {
    position: initial;
    display: block;
    height: auto;
    width: fit-content;
    background-color: transparent;
  }
  #header .nav-list ul li {
    display: inline-block;
  }
  #header .nav-list ul li a {
    font-size: 1.8rem;
  }
  #header .nav-list ul a:after {
    display: none;
  }
  /* End header */
</style>

<body>
<!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>C</span>OVID-19 <span>T</span>est <span>M</span>anagement <span>S</span>ystem</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="home.php" data-after="Home">Home</a></li>
            
            
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="login.php" data-after="Login">Login</a></li>
            <li><<a href="Registration.php" data-after="Registration">Registration</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
</body>
</html>