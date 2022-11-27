<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title> HOME PAGE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css1/all.min.css">
   </head>
<body>
   <section class="header">
       <nav>
           <a href=""><img class="U" src="images/download.jpeg"></a>
           <div class="nav-links" id="navLinks">
             <img class="menu" src="images/close.png" onclick="hideMenu()">
               <ul>
                   <li><a href="">HOME</a></li>
                   <li><a href="about.html">ABOUT US</a></li>
                   <li><a href="contact.html">CONTACT</a></li>
                   <li><a href="">NEWS</a></li>
                   <li><a href="login.php">LOG IN</a></li>                   
               </ul>
           </div>
           <img class="menu" src="images/menu.png" onclick="showMenu()">
       </nav>
       <div class="text-box">
           <h1>WELL COME</h1>
           <p>Online Tax Information management System for Hawassa city </p> 
           <p  class="hero-btn">Pay Fair Tax for Better Tomorrow!!</p>
           </h1>
       </div>
   </section>
   <section class="second">
    <h1>Information About TAX</h1>
    <h4>Our team develop an online tax information managemnt system that makes it easy for information 
        management for the Tax<br>revenue office and for the citixens lives in hawassa</h4>
        <p>Location</p>
        <p><iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.590160449207!2d38.47079751409587!3d7.057347518686395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17b145d3b64d1ebf%3A0xbc8f84032dab96c0!2sMinistry%20of%20Revenue%2C%20Hawassa%20Branch!5e0!3m2!1sen!2set!4v1646329808928!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
   </section>
   <div class="text">
    <h1>Our Offices</h1>
   </div>
   <section class="campus">
       
       <div class="row">
           <div class="campus-col">
               <img src="images/R.jpg">
               <div class="layer">
                   <h2>Menahariya</h2>
               </div>
           </div>
           <div class="as">
            <div class="campus-col">
                <img src="images/R.jpg">
                <div class="layer">
                    <h2>Gebeya</h2>
                </div>
            </div>


           </div>
           
           
       </div>

   </section>


   <footer class="page-footer">
    <div class="ss">

        <div class="container">
            <div class="row">
                <div class="foot">
                    <h2 class="z">Additional Information</h2>
                    <p>Hawassa university institute of technology campus has many departments as it is great organization </p>
                    <p>Hawassa university institute of technology campus has many departments as it is great organization </p>
            </div>
            <div class="foot">
                <h4 class="z">Contact</h4>
                <p class="a">1640 Ethiopia, Hawassa, Hawassa University</p>
                <br/>info@mywebsite.com
                <br/>+ 2519 12232434
                <br/>+ 2519 45728273
                
            </div>
            <div class="col"> 
                <h2>Contact</h2>
                <a href="#" <i class="fa-brands fa-facebook"></i></a>
                <a href="#"<i class="fa-brands fa-telegram"></i></a>
                <a href="#"<i class="fa-brands fa-twitter"></i></i></a>
                <a href="#"<i class="fa-brands fa-youtube"></i></i></a>
            </div>
        <div>   
        <div class="q">© 2022 Copyright: Tax information.com</div>

    </div>
    
</footer>


<script>

var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right= "-200px";
}

</script>


</body>
</html>

 
