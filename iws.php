<!DOCTYPE html>
<html>
<title>Interactive Web Solution</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Verdana", sans-serif}
.w3-row-padding img {margin-bottom: 12px}


/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
.kont {
  position: relative
}

.kont video {
  width: 100%;
  height: auto;
}
</style>
<body class="w3-black">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-padding w3-card" style="letter-spacing:4px;">
    <a href="http://www.zumosun.com/" class="w3-bar-item w3-button"><b>Zumosun Data Analytic</b></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      
       <a href="#" class="w3-bar-item w3-button"><b>Home</b></a>
      <a href="#About" class="w3-bar-item w3-button"><b>About</b></a>
      <a href="#Work" class="w3-bar-item w3-button"><b>Work</b></a>
      <a href="index.php" class="w3-bar-item w3-button"><b> Website</b></a>
      
    </div>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
  
      <div class="kont">
  <video autoplay muted loop>
    <source src="images/back1.mp4" type="video/mp4">
    <source src="images/back1.ogg" type="video/ogg">
    
  </video>
   
  </div>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="About">
   <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="images/img6.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/img7.png" height="400" width="100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/iws3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">   
    </div>
  </div>
</div>


  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-20" style="max-width:800px" id="band">
    <h2 class="w3-wide">Intarective Web Solution</h2>
    <p class="w3-opacity"><i>We love Communication</i></p>
    <p class="w3-justify">From web-based analytics to e-learning, CRM, content management and e-commerce, our interactive web solutions are innovative and interactive. These solutions help broaden your user base and increase your return on investment. Our solutions are user-friendly, cost-effective, easy to maintain, and guaranteed with long-term support.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Customer review Software</p>
        <img src="images/img7.png" class="w3-round w3-margin-bottom" alt="Random Name" height="200" width="150">
      </div>
      <div class="w3-third">
        <p>Web Development</p>
        <img src="images/img8.png" class="w3-round w3-margin-bottom" alt="Random Name" height="200" width="150">
      </div>
      <div class="w3-third">
        <p>Mobile App Development</p>
        <img src="images/img5.jpg" class="w3-round" alt="Random Name" height="200" width="150">
      </div>
    </div>
  </div>
   </div>
 
  
  <!-- Work Section -->
  <style>
img {
  border-radius: 50%;
}
</style>
  <div class="w3-padding-64 w3-content" id="Work">
    <div class="w3-content w3-container w3-padding-45">
  <h3 class="w3-center"><b>Our WORK</b></h3>
  <p class="w3-center"><em>Here are some of my latest lorem Of Zumosun.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m4">
      <p><b>Website Development</b></p>
      <img src="images/wd.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Keeping your website current isn’t just about updating the content.The look of your website tells a storey iWeb Solutions can create that storey for you..">
    </div>

    <div class="w3-col m4">
      <p><b>Internet Marketing</b></p>
      <img src="images/it.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The concept of Internet marketing is to sell your products and services online using your website.Internet marketing is a cost effective way to deliver quality buyers for your service..">
    </div>

    <div class="w3-col m4">
      <p><b>Mobile App Development</b></p>
      <img src="images/mad.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones.">
    </div>
    
<div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m4">
      <p><b>Keyword Stretagy</b></p>
      <img src="images/kw.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Find the best keyword strategy,create great content,and work your tail off and reap the benefits of search engine optimisation.">
    </div>

    <div class="w3-col m4">
      <p><b>Reputation Management</b></p>
      <img src="images/rm.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="No matter the size of your business, they are talking about you. They are tweeting about your latest product, leaving a comment on your blog, posting a Facebook update about their customer experience, and much more">
    </div>

    <div class="w3-col m4">
      <p><b>Custom Software Development</b></p>
      <img src="images/csd.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="We offer custom software development and consulting services to help you pull off your next project with less stress and less cost. Our team has the technology prowess to power you at every stage of your product development lifecycle, from discovery to ongoing post-launch enhancement.">
    </div>

    
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


  </div>
</div>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
	
  </div>
</div>

    
  <!-- End Work Section -->
  </div>

  
   

<!-- END PAGE CONTENT -->
</div>

<!-- Footer -->

  
 <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center w3-green">
  <h4 style="color:white">Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
</footer>
</body>
</html>
