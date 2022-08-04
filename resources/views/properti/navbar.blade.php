<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="../css/navbar.css" />
  
    <style>
      .icon{
        cursor: pointer;
      }
      .darkmode {
        
      }
      .darkmode .dasbore{
    background-image: url("../img/bgdark.jpg");
        
      }
      .darkmode .nav div.main_list ul li a,
      .darkmode p,
      .darkmode h2,
      .darkmode button,
      .darkmode h3,
      .darkmode .dasbore .desk-kiri h2,
      .darkmode h1,
      .darkmode ul li,
      .darkmode .left .left-content .desk-icon p a 
      {
      
        color: white;
      }
      .darkmode .scroll-icon,
      .darkmode .scroll-icon span {
        border: 1.5px solid rgb(255, 255, 255);
      }
 
    .darkmode .content-about, .darkmode .content-skills{
      background-color: #2b2d33;
    }
    .darkmode .affix,
    .darkmode .content,
    .darkmode .portofolio,
    .darkmode .container-contact{
      background-color: #2b2d33;
    }
    .mode{
      font-size: 20px;
      padding: 5px;
      border: solid #d46344 2px;
      border-radius: 50%;
    }
    ul li:active{
      color: orange;
    }
 

    @media screen and (max-width: 768px){
      .darkmode .nav div.main_list ul{
        background:  #2b2d33;
      }
    }
    .darkmode .navTrigger i {
      background-color: white;
    }
    .darkmode .nav div.main_list ul li a:hover {
    color: rgb(211, 95, 75);
    transition: 0.4s;
    
}




    </style>
  </head>
  <body>
    
  <nav class="nav">
          <div class="container">
            <div class="logo">
              <a href="/"><img src="../img/logo1.png" alt=""></a>
            </div>
            <div id="mainListDiv" class="main_list">
              <ul class="navlinks">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/portofolio">Portofolio</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="img/cv.png" download=""><span>Download CV</span></a></li>
                <li class="icon" onclick="setDarkMode()" id="darkBtn"><i class="fa-solid fa-circle-half-stroke mode"></i></li>
              </ul>
            </div>
            <span class="navTrigger">
              <i></i>
              <i></i>
              <i></i>
            </span>
          </div>
        </nav>

    
    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/navbar.js"></script>
        <!-- Function used to shrink nav bar removing paddings and adding black background -->
        <script>
          $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
              $(".nav").addClass("affix");
              console.log("OK");
            } else {
              $(".nav").removeClass("affix");
            }
          });
        </script>

        <script>
          if(localStorage.getItem('theme') == 'dark')
          setDarkMode()

          function setDarkMode(){
            
          let  isDark = document.body.classList.toggle('darkmode')

            if(isDark){
          
              localStorage.setItem('theme', 'dark')
            }else{

              localStorage.removeItem('theme', 'dark')

            }
 
          }
        </script>

      </body>
    </html>
    
  </body>
</html>
