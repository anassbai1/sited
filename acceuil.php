
<!DOCTYPE html>
<html>
<head>
  <title>
    LRTI - Home
  </title><link rel="shortcut icon" type="text/css" href="LOGO LRTI1.png">
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@500&family=Croissant+One&family=Inter:wght@700;900&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,400;1,600&family=Oswald:wght@300&family=Poppins:wght@500&family=Roboto+Slab:wght@500&family=Roboto:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#icon').click(function(){
      $('ul').toggleClass('show');
    });
  });
</script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Arimo:wght@500&family=Croissant+One&family=Inter:wght@700&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,400;1,600&family=Oswald:wght@300&family=Poppins:wght@500&family=Roboto+Slab:wght@500&family=Roboto:ital,wght@0,400;0,900;1,400&display=swap');
 body{
    background: #FFFfFf;
    height: 100vh;
    display: flex;
    flex-direction: column;

font-family: 'Inter', sans-serif;


  }
  
    .container{
    max-width: 1170px;
    margin: auto;

  }
  .row{
    display: flex;
    flex-wrap: wrap;
  }
  ul{
    list-style: none;
  }
  
 header{
    position: fixed;
    top: 40px;
    left: 0;
    right: 0;
    background: #ffffff;
    box-shadow: 0 3px 20px rgba(0,0,0,.1);
    padding: 0px 3%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
   }

   header .logo{
    font-size: 25px;
    font-weight: bolder;
    color: #333;
   }

   header .navbar ul{
    list-style: none;
    text-decoration: none;
   }

   header .navbar ul li{
    position: relative;
    padding: 5px 5px;
    float: left;
    text-decoration: none;
   }

   header .navbar ul li a{
    font-size: 14px;
    padding: 5px 27px;
    margin-top: 10px;
    color: #383C44;
    display: block;
    text-decoration: none;
   }

   header .navbar ul li a:hover{
    
    
    color: #3D92D5;
    
   }
   .navbar a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: -5px;
    left: 0;
    background-color: #ffcc00;
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease-out;
}

   header .navbar ul li ul{
    position: absolute;

    left: 0;right: 0;
    width: 300px;
    background: #ffffff;
    color: #000;
     padding: 1em 5px;


    display: none;
    text-decoration: none;
   }
   header .navbar ul li ul li{
    width: 100%;
    font-size: 5px;
    border-top: 1px solid rgba(0,0,0,0.4)
   }
   header .navbar ul li ul li ul {
    left: 300px;
    top: 41px;
   }
   header .navbar ul li:hover >ul{
    display: initial;
    color: #000;
   }
   #menu-bar{
    display: none;

   }

   header label{
    font-size: 17px;
    color: #131111;
    cursor: pointer;
    display: none;
   }
   @media(max-width: 991px){

    header{
      padding: 10px;

    }
    header label{
      display: initial;
      font-size: 30px;
      margin-right: 20px;
    }
    header .navbar{
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background: #FAFAFA;
      border-top: 5px solid rgba(0,0,0,.1);
      display: none;
       transition: transform 0.9s ;
    }
    header .navbar ul li{
      width: 100%;
    }
    header .navbar ul li ul{
      position: relative;
      width: 100%;
    }
    header .navbar ul li ul li{
      background: #F1F5F5;
  }
  header .navbar ul li ul li:hover{
    background: #3D92D5;
  }
  header .navbar ul li a:hover{
    color: #000;
   }
  header .navbar ul li ul li ul{
    width: 100%;
    left: 0;
  }
  #menu-bar:checked ~ .navbar{
    display: initial;
  }
}

  footer{
    bottom: 0; 
    left: 0;
     right: 0;}
    .footer{
    background-color: #34495E;
    padding: 70px 0;
  }
  .footer-col{
    width: 25%;
    text-decoration: none;
    padding: 0 15px;
  }
  .footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    text-decoration: none;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;

  }
  .footer-col h4::before{
    content: '';
    position: absolute;
    text-decoration: none;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  .footer-col ul li :not(:last-child){
    margin-bottom: 10px;
      }
  .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
  }
  .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;

  }
  .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
  }
  .footer-col .social-links a:hover{
    color: #24262b;
    text-decoration: none;
    background-color: #ffffff;
  }
  @media (max-width: 767px){
    .footer-col{
      width: 50%;
      margin-bottom: 30px;
    }
  }
  @media (max-width: 574px){
    .footer-col{
      width: 100%;
    }
  }
  .cc{
      padding-top: 150px
    }
    h2{
      text-align: center;
      padding: 30px;
      font-size: 45px;
      color: #1020D9;
    }
    .slick-slide{
      margin: 0 20px;
    }
    .slick-slide img{
      width: 100;
    }
    .slick.slider{
      position: relative;
      display: block;
      box-sizing: border-box;
    }
    .slick-list{
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }
    .slick-track{
      position: relative;
      top: 0;
      left: 0;
      display: block;
    }
    .slick-slide{
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }
    .slick-slide img{
      display: block;
    }
    .slick-initialized .slick-slide{
      display: block;
    }
    .copy{
      color: #ffffff;
      text-align:center;
      position: relative;
      top: 60px;
      font-size: 11px;

    
      
    }


 h5{
  color: #ffffff;
  font-size: 15px;
 }
 .kk{
  display: flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
 }
 .kk img{
  height: 300px;
  

 }
 .dd p{
  padding: 40px;
  font-size: 25px;}
 }
  .po{
  display: flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
}

 .zz{
  display:flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
}
@media(max-width: 991px){
  .zz img{
    font-size: 10px;
        flex-direction: column;
    grid-gap: 50px;
    grid-template-columns: 1fr;
  }
}
 .zz img{
  height: 300px

 }
  .zz p{
  padding: 40px;
  font-size: 25px;}

  header.sticky ul li a{
  color: #000;}
  .me{
    width: 200px;

  }
  .gr{
    text-align: center;

  }
  .grr{
    color: #00000;
      text-align:center;
      padding:20px;
  }
  .bt{
    background: #90ee90  ;
    padding: 10px;
    border-radius: 30px;
    color: #ffffff;
    padding: 15px 22px;
      text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }


/* NAVBAR MENU */


.txt{
  position: absolute;
  top: 350px;

  color: #ffffff;
  margin: 0px;
  font-size: 80px;
  text-align: center;


}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  top: 90px;
    background-blend-mode: darken;
        background: rgba(0,0,0,0.4);
        background-size: cover;    }  
}

/* Hide the images by default */
.mySlides {
  display: none;
  padding: 80px;
  width: 100%;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: 22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 12000000s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.ktab h2{
  padding: 100px;
  color: #00008B  ;
  font-size: 30px;
  text-align: center;
}
.ktab p{
  padding: 1em;
  color: #1E90FF  ;
  text-align: center;
  font-size: 20px;
  padding: -50px;
  margin: -113px;
}
@media(max-width: 991px){
  .ktab p{
    font-size: 15px;
        flex-direction: column;
    grid-gap: 50px;
    grid-template-columns: 2fr;
  }
}
.cv p{
  color: #708090;
  top: 50px;
  margin: 150px;
  text-align: center;
}
.gl {
text-align: center;
display: grid;
grid-template-columns: repeat(4,1fr);
  padding-left: 21em;
  font-size: 9px;
  cursor: pointer;
  margin: 90px 0;
  


}
.gl h1{
  font-size: 40px;
}
@media(max-width:991px){
    .gl{
      
    width:150%;
    
        flex-direction: column;
    grid-gap: 50px;
    justify-content: center;
    align-items: center;
    margin-right: 100px;
    text-align: center;
    grid-template-columns: 1fr;
    
    }
  }
.gr{
  color: #708090;
  background-color: blue;
  
  text-align: center;
}

.slidos{
  width: 100%;
  top:50px;
  height: 800px;
  text-align: center;
  background-blend-mode: darken;
  background: rgba(0,0,0,0.1)url("30.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
@media all and (max-width: 480px){
  .slidos{
    width: 100%;
        flex-direction: column;
    grid-gap: 50px;
    grid-template-columns: 1fr;
  }
}
.slidos img{
  
    width: 100%;
        flex-direction: column;
    grid-gap: 20px;
    grid-template-columns: 1fr;
    align-items: center;
    }

.slidos h1{
  font-size: 40px;
  color: #fff;
  text-align: center;
  top: 40%;
  margin: 80px;
  justify-content: center;
  align-items: center;
  cursor:pointer;
  animation: movedown 1s linear 1;


}
@keyframes movedown{
  0%{
    transform: translateY(-100%);
  }
   100%{
    transform: translateY(0%);
  }
}
.slidos p{
  font-size: 25px;
  color: #000;

  

}
.btv{
  background: #228B22  ;
  position: relative;
  color: #fff;
  border-radius: 20px;
  font-size: 20px;
}
.ts{
  text-align: center;
  padding-left: 10em;
  font-size: 16px;
  cursor: pointer;
  margin: 90px 0;
}
.dd{
  
  padding-left: 10px;
  margin: 80px;

}
.cb span{
  color: #778899    ;
  text-align: center;
  display: block;
  margin: 25px 0px;
  font-size: 25px;
}
.al p{
  color: #778899;
  font-size: 20px;
  margin-top: 20px 0;
  padding-left: 5px;
}
.slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            background-blend-mode: darken;
  background: rgba(0,0,0,0.4) 
            height: 890px; /* Altura de tu slider */ transition: background-color 0.6s ease;
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.2s ease-in-out;
        }

 .slidee {
            min-width: 100%;
            box-sizing: border-box;
        }

        .slidee img {
          

            width: 100%;
            height: 650px;

        }
        .slidee p{
          color: #ffffff;
          font-size: 32px;
          text-align: center;
          top: 250px;
          padding: 110px;
          bottom: 20px;

          position: absolute;
        }

.emp p{
  font-size: 45px;
  color: #1020D9;
  text-align: center;
}
.emp img{
padding:15px;
margin: 15px;
}
@media (max-width: 909px){
  .emp img{
    width: 640px;
  }
}
.lo{
   display:flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
  background: #D0D3DB;
}
.lo p{
color: #000;
padding: 65px;
font-size: 35px;
margin: 150px;
  }
  .lo span{

    font-size: 21px;
    color: #000;
     top: 50px;
  margin: 150px;

  }
  @media (max-width: 909px){
  .lo {
    font-size: 21px;
    background-color: #D0D3DB;
     width: 100%;
        flex-direction: column;
    grid-gap: 20px;
    grid-template-columns: 1fr;
    align-items: center;

  }
}
  .bttn {
    height: 70px;
    width: 70px;
    background: crimson;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    right: 20px;
    bottom: 20px;
    cursor: pointer;
}
.iio {
    width: 50px;
    color: #fff;
}
@media(max-width:500px){
    .slide{
      
    width: 100%;
        flex-direction: column;
    grid-gap: 20px;
    grid-template-columns: 1fr;
    align-items: center;
    }
  }
  .vertical-line{
    width: 80px;
    height: 500px;
    margin-top: 130px;
    background: #fff;
    border-radius: 12px;
  }
  .loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ffffff;
  transition: opacity 0.75s, visibility 0.75s;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 75px;
  height: 75px;
  border: 15px solid #dddddd;
  border-top-color: #009578;
  border-radius: 50%;
  animation: loading 0.75s ease infinite;
}

@keyframes loading {      
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}

.db{position: fixed;
    background: #000;
    height: 50px;
   
    width: 100%;
    display: flex;
    display: grid;
    z-index: 1000;
    grid-template-columns: repeat(4,1fr);
    
  }
  .db p{
     color: #fff;
     font-size: 11px;

     margin-top: 15px;     align-items: center;
     justify-content: center;
    margin-left: 80px;
  }
   .db h5{
     color: #fff;
     font-size: 11px;
     margin-top: 15px; 
    margin-left: 110px;
    margin-bottom: 80px;
  }
  .db a{
    text-decoration: none;
    color: #fff;
    margin-top: 11px; 
    margin-left: 220px;
    
    
    
  }
@media(max-width: 890px){
   
  .db p{

    font-size: 8.5px;
    height: auto;
    width: 160px;
    margin: 15px;
  }
  .db h5{
    margin:15px;
      width: 230px;
      height: auto;
      font-size: 8.5px;

  }
  .db a{
    margin: 15px;
    font-size: 9.5px;
    width: 130px;
    }

}
.loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #F4F4F6;
  transition: opacity 0.75s, visibility 0.75s;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 65px;
  height: 65px;
  border: 2px solid #dddddd;
  border-top-color: #5555B8;
  border-radius: 50%;
  animation: loading 0.75s ease infinite;
}
.wrapper{
    padding: 10px 2%;
}
#card-area{
    padding: 50px 0;
}
.box-area{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
}
.box {
    border-radius: 5px;
    position: relative;
    overflow: hidden;
    box-shadow: 5px 5px 15px ;
}
.box img{
    width: 100%;
    border-radius: 5px;
    display: block;
    transition: transform 0.1s;
}
.overlay {
    width: 100%;
    height: 0;
    background: linear-gradient(transparent,#ACE7F3 100%);
    border-radius: 10px;
    position: absolute;
    left: 0;
    bottom: 0;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    font-size: 14px;
    transition: height 0.5s;
}
.overlay h3 {
    font-weight: 500;
    margin-bottom: 5px;
    margin-top: 80%;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 30px;
    letter-spacing: 2px;
}
.overlay a {
    margin-top: 10px;
    
    text-decoration: none;
    font-size: 14px;
    border-radius: 50px;
    text-align: center;
    padding: 5px 15px;
}
.box:hover img{
    transform: scale(1.1);
}
.box:hover .overlay{
    height: 100%;
}
.ds h1{
  color: gray;
  padding: 25px;
}



@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {

    transform: rotate(1turn);
  }
}



   </style>
<body>
  <div class="db">
    <p>Appelez-Nous : +33 (0) 4 67 80 22 19</p>
    <h5>Contact : salaris.laurent@sasmetis.fr</h5>
      <div class="ss"><a href="acceuil.php"><img src="France.jpg" width="25px" > FR</img></a></div>
            <div class="ss1">  <a href="home.php"><img src="uk.webp" width="25px" > EN</img></a></div>
  </div>

  <div class="loader"></div>
  <header>
    <a href="acceuil.php" class="logo"><img src="LOGO LRTI1.png" width="140px"></a>

    <input type="checkbox" name="" id="menu-bar">
    <label for="menu-bar"><i class="fa-solid fa-bars"></i>    </label>

    <nav class="navbar">
      <ul>
      <li><a href="acceuil.php">Acceuil</a></li>
      <li><a href="#">Qui sommes Nous ? <i class="fa-solid fa-caret-down"></i></a>
        <ul>
          <li><a href="presentation.php">Presentation</a></li>
          <li><a href="tuyauterie.php">tuyauterie </a></li>
          <li><a href="chaudronnerie.php">chaudrennerie </a></li>
          <li><a href="qualite.php">sécurité & qualité</a></li>
          
        </ul>
      </li>

       <li><a href="#">realisation <i class="fa-solid fa-caret-down"></i></a>
        <ul>
          <li><a href="skid.php">skid d'injection</a></li>
          <li><a href="pomperie.php">Pomperie</a></li>
          <li><a href="chargement.php">Bac</a></li>
          <li><a href="rack.php">Rack Aerien</a></li>
          <li><a href="rack.php">Jetty</a></li>
          <li><a href="inox.php">Inox</a></li>
          <li><a href="atelier.php">En Atelier</a></li>
          <li><a href="manchete.php">Manchette SEA Line </a></li>
          <li><a href="raccordement.php">Raccordement</a></li>
          <li><a href="projet.php">creation avant projet</a></li>
          
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="recrutement.php">recrutement </a></li>



    </ul>
  </header>
  <script type="text/javascript">
      window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});</script>


  <br>
  <div class="sl">
  <figure><br><br>
   <div class="slider-container">
    <div class="slider-wrapper">
        <div class="slidee"> <P>L'entreprise Languedoc Roussillon Travaux Industriels est spécialisée dans la construction et l'installation de réseaux de canalisations et de structures métalliques et vous accompagne tout au long de vos projets en France, en Europe et dans le monde. La satisfaction du client est au cœur de notre politique d’entreprise.
</P><img src="36.jpg" alt="Imagen 1"></div>
        <div class="slidee"><img src="sk01.jpg" alt="Imagen 2"></div>
        <!-- Agrega más slides según sea necesario -->
    </div>

    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
</div>

<script type="text/javascript">
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
</script>

<script>
    var currentIndex = 0;

    function showSlide(index) {
        var wrapper = document.querySelector('.slider-wrapper');
        var slides = document.querySelectorAll('.slidee');

        if (index >= slides.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex = index;
        }

        var translateValue = -currentIndex * 100 + '%';
        wrapper.style.transform = 'translateX(' + translateValue + ')';
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }
</script>

      
    <div class="bttn">
  <img src="haut.jpg" class="iio">
</div>
<script type="text/javascript">
const bttn = document.querySelector('.bttn');

bttn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})
</script>

   
<div class="ktab">
  <h2>À propos</h2>
  <p>Grâce à son expertise, LRTI est une entreprise incontournable du secteur industriel.
    <div class="cv">
      <p>L'entreprise Languedoc Roussillon Travaux Industriels est spécialisée dans la construction et l'installation de réseaux de canalisations et de structures métalliques et vous accompagne tout au long de vos projets en France, en Europe et dans le monde.
    </div>
       </p><br><br>
</div>

<br><hr>
<div class="po">
    <div class="zz">
       <p>Créée en 1996, l'entreprise Languedoc Roussillon Travaux Industriels est spécialisée dans la construction et l'installation de réseaux de canalisations et de structures métalliques.<br>


     </p>
  
<img src="71.jpg">
</p>
</div></div>
<h2>Notre Groupe</h2>
<div class="gl">

<img src="LOGO LRTI1.png" width="150px">
<img src="sepac.png" width="180px">
<img src="samm.png" width="150px">
<img src="niiss.png" width="150px"><br><br></div>


<div class="emp">
  <p>Implentation</p>

  <center><img src="Implantation.png" width="1300px"></center>
<br><br>
<br><br><br><br><br><br><br>



</div>
<div class="ds"><h1>Découvrez ce que nous pouvons faire pour vous</h1></div>

  <div id="card-area">
        <div class="wrapper">
            <div class="box-area">
                <div class="box">
                   <a href="tuyauterie.php"> <img alt="" src="ddd.jpg">
                    <div class="overlay">
                        <h3>Tuyauterie</h3></a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque modi explicabo libero ea nam. Quod.</p><a href="#">Book Now</a>
                    </div>
                </div>
                <div class="box">
                    <img alt="" src="ccc.png">
                    <div class="overlay">
                        <a href="chaudronnerie.php"><h3>Chaudronnerie</h3></a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque modi explicabo libero ea nam. Quod.</p><a href="#">Book Now</a>
                    </div>
                </div>
                <div class="box">
                    <img alt="" src="ref.jpg">
                    <div class="overlay">
                        <a href="bac.php"><h3>Dessenal de Bac</h3></a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque modi explicabo libero ea nam. Quod.</p><a href="#">Book Now</a>
                    </div>
                </div>
                 <div class="box">
                    <img alt="" src="img/3.jpg">
                    <div class="overlay">
                        <h3>Seruris</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque modi explicabo libero ea nam. Quod.</p><a href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="lo"><br><br><br><br><br><br><br><br><br><br><br><br>
      <p>
Notre culture Qualité Santé Sécurité Environnement</p>
      <div class="vertical-line"></div>
      <span>Le groupe MÉTIS est spécialisé dans l'étude, la construction et l'installation de
les réseaux de canalisations s'engagent quotidiennement à améliorer leur
résultats.
Notre ambition est d’atteindre durablement l’excellence en matière de sécurité, de qualité et
performance économique par un engagement collectif en interaction avec nos
parties prenantes et au service de nos clients.
Notre politique QSSE est la transcription de nos engagements en matière de
prévention de la sécurité, de la santé et de la préservation de l’environnement.
Il définit les orientations et les objectifs concernant ces domaines.
Il s'agit de prévention (analyse des risques
document unique), le
formation et implication du personnel dans l’atteinte des objectifs, gestion
situations dangereuses, analyse et retour d’expérience des accidents ainsi que
ainsi que le respect de la législation et de la réglementation en vigueur.
La direction demande à ses employés d'adhérer à cette politique et de faire preuve de leur
implication dans tous les domaines.</span>
      
    </div>
<div class="container font-weight-bold">
                <h2 class="text-center font-weight-bold">Nos Parteners</h2>
                 <section class="customer-logos slider">
                    <div class="slide"><img src="edf.png" alt="" width="55px"></div>
                    <div class="slide"><img src="1.jfif" alt="" width="150px"></div>
                    <div class="slide"><img src="bp.png" alt="" width="70px"></div>
                    <div class="slide"><img src="toto.png" alt="" width="120px"></div>
                    <div class="slide"><img src="vinci.png" alt="" width="150px"></div>
                    <div class="slide"><img src="sanofi.jpg" alt="" width="100px"></div>
                    <div class="slide"><img src="sai.png" width="100px" alt=""></div>
                    <div class="slide"><img src="five.jpg" alt="" width="100px
                      "></div>             
                      <div class="slide"><img src="lafarge.png" width="90px" alt=""></div>    
                      <div class="slide"><img src="so.png" width="80px" alt=""></div>
                       <div class="slide"><img src="arkema.webp" width="80px" alt=""></div>     
                 </section>
              </div>
      


    
    <script>

                $(document).ready(function(){
                    $('.customer-logos').slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 1500,
                        arrows: false,
                        dots: false,
                        pauseOnHover: false,
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4
                            }
                        }, {
                            breakpoint: 520,
                            settings: {
                                slidesToShow: 3
                            }
                        }]
                    });
                });
                
      </script>
</div>
  
</div><br><br>

        
        <section class="sec1"></section>
        <section class="content">

<script type="text/javascript">
 $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         $(document).ready(function(){
                $('.menu h4').click(function(){
                    $("nav ul").toggleClass("active")
            })
            })
</script>

   



    
    <script>

                $(document).ready(function(){
                    $('.customer-logos').slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 1500,
                        arrows: false,
                        dots: false,
                        pauseOnHover: false,
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4
                            }
                        }, {
                            breakpoint: 520,
                            settings: {
                                slidesToShow: 3
                            }
                        }]
                    });
                });
                
      </script>
</div>



<hr>
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Information</h4>
          <h5><i class="fa-solid fa-location-dot"></i>  Parc Aquatechnique
              3 rond point du Luxembourg
                34000 Sète</h5><br>
          <h5> <i class="fa-sharp fa-solid fa-phone"></i> +33 (0) 4 67 80 22 19</h5><br>
          <h5> <i class="fa-solid fa-fax"></i></i>  0467481662 </h5><br>
          <h5><i class="fa-solid fa-envelope"></i> salaris.laurent@sasmetis.fr  </h5>
        </div>
        <div class="footer-col">
          <h4>A propos</h4>
          <ul>
            <li><a href="presentation.php">Presentation</a></li><br>
            <li><a href="tuyauterie.php">Tuyauterie</a></li><br>
            <li><a href="tuyauterie.php">chaudrennerie</a></li><br>
            <li><a href="qualite.php">Qualité & sécurité</a></li><br>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Realisation</h4></a>
            <ul>
            <li><a href="skid.php">Skid d'injection</a></li>
          <li><a href="pomperie.php">Pomperie</a></li>
          <li><a href="chargement.php">Poste de chargement</a></li>
          <li><a href="rack.php">Rack Aérien</a></li>
          <li><a href="jetty.php">Jetty</a></li>
          <li><a href="inox.php">Inox</a></li>
          <li><a href="atelier.php">En Atelier</a></li>
          <li><a href="manchete.php">Manchette SEA LINE </a></li>
          <li><a href="raccordement.php">Raccordement</a></li>
          <li><a href="project.php">Creation avant projet</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Suivez-nous</h4>
          <div class="social-links">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/lrti/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></i></a>
          </div><br><br>
             <div class="footer-col">
          <a href="#"><h4> Nous-Contactez</h4></a>
        </div>
           
      </div><br><br><br>
      <div class="copy">
        <br>
        <footer>&copy; Copyright 2024  LRTI, tous droits réservés | Mentions Légale</footer>

      </div>
    </div>
  </footer>
  

</body>
</html>



