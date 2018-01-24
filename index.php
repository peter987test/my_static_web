<?php require('./php2/conn.php'); ?>

<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="UTF-8">

<!-- google text -->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Slab" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Old+Standard+TT" />
<!-- mobile first -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- My css -->
<link rel="stylesheet" type="text/css" href="/style/style.css">



</head>


<style>
@media screen and (max-width: 768px) {
    
}

/*google font*/
h1 {
  font-family: "Josefin Slab";
  font-size: 30px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 32.4px;
}
h2 {
 font-family: "Josefin Slab";
  font-size: 30px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 30.4px;
}
h3 {
  font-family: "Josefin Slab";
  font-size: 20px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 20.4px;
}
h5 {
  font-family: "Josefin Slab";
  font-size: 10px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 11px;
}
p {
  font-family: "Josefin Slab";
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 26px;
}
blockquote {
 font-family: "Josefin Slab";
  font-size: 21px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 30px;
}
pre {
  font-family: "Josefin Slab";
  font-size: 13px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 18.5714px;
}
/*google font end*/

/*general rules*/
div {
    z-index: 99;
}
html {
   /* height: 100%*/
}
/*scoll to top button*/
body {
 /* background-image: url("./img/bg/ground.png");
  background-repeat: no-repeat;
  background-size: 100% 100%;*/
  z-index: 1;
  text-align: center;
  background-color: #FDF3E7;
}

#main{
  max-width: 900px;
  margin-top: 0px;
  padding: 15px 15px 15px 15px;
}

#main > div.container-fluid{
  padding-top: 30px;
  padding: 15px 15px 15px 15px;

}
#main > div.container-fluid:not(#mainPage){
  /*  border-radius: 12px 12px 12px 12px;
  -moz-border-radius: 12px 12px 12px 12px;
  -webkit-border-radius: 12px 12px 12px 12px;*/
  border: 5px solid  #7E8F7C;
/*  background-color: #7E8F7C;
  color: #fdf3e7;*/
}

#mainPage{
  border:none;
}

/*change image size*/
.toIcon64 {
  width: 64px;
  height: 64px;
}

.toIcon32 {
  width: 32px;
  height: 32px;
}

.title{

}
.mainIdea{

}

.vertialLine {
    padding:  0;
    margin:  0 auto;
    /* margin:  20px 0 20px 0; */
    margin-top: 50px;
    margin-bottom: 50px;
    height: 200px;
    width: 0px;
    border-left: dotted;
    border-left-color:  #d9d9d9;

}
/*general rules*/

.navbar {
  margin-bottom: 0px;
}

#myNavbar  {
 padding-right:15px;
  background-color: #c63d0f;
}

.navbar-header, .navbar-header navbar-default button, .navbar-header navbar-default button:active, .navbar-toggle,.navbar-header button, .navbar-header button:active {
  background-color: #c63d0f;
}

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #c63d0f;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #f6f6f6;
}
.navbar-default .navbar-link {
  color: #c63d0f;
}
.navbar-default .navbar-link:hover {
  color: #454545;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #454545;
  background-color: #f6a488;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #454545;
  background-color: #f6a488;
}
.navbar-default .navbar-text {
  color: #f6f6f6;
}
.navbar-default .navbar-nav > li > a {
  color: #f6f6f6;
}
.navbar-brand h2 {
    color:  #f6f6f6;
}

.navbar button {
  height: 65px;
  width:  50px;
}

.myscrolltop div{
}

.myscrolltop img{
  z-index: 999;
position: fixed;
   right:20px;
  bottom:20px;
}

.scrolltop {
  border:none;
}

#mainPage{
  border: none;
}

#mainPic{
  margin: 0 auto;
  max-width: 400px;

  display: block;
  width: 100%;
  height: auto;
}


.header {
  margin-top: 10px;
  margin-bottom: 10px;
}

.icon {
  margin-top: 10px;
  margin-bottom: 10px;
}

.body h3 {
  margin-bottom: 20px;
}

.body p {
  margin-top: 20px;
  margin-bottom: 30px;
}


#projectPage {
  text-align: center;
}

#projectPage .container-fluid{
  padding: 0;
}

#projectPage .container-fluid > img {
  display: block;
  width: 100%;
  height: auto;
  margin: 0 auto;
  max-width: 200px;
  margin-top: 25px;
  margin-bottom: 25px;
} 

.padding0 {
  padding: 0;
}

.padding0 > div.col-xs-12 {
  padding: 0;
}

#projectPage .collapse img {
   /*height:  480px;*/
   object-fit: contain;
   width: 100%;
   margin-bottom: 15px;
}


.showMore {
  width: 125px;
  margin-bottom: 20px; 
}

.showMorePage {
  margin-bottom: 30px; 
}

#myCarousel {
  padding: 0;
}

#myCarousel img {
  height:  480px;
 object-fit: contain;
 width: 100%;
}

img.center {
    display: block;
    margin: 0 auto;
}

.followMeIcon {
  display: flex;
    flex-direction: row;
  justify-content: center;

}

.followMeIcon img {
 margin: 40px 8px 50px 8px;
}



#contactPage form {

  margin: 0 auto;
 max-width: 600px;
}

#contactPage input {
  height: 55px;
  margin-bottom: 15px;
}

#contactPage textarea {
  height: 155px;
  margin-bottom: 15px;
}

#contactPage button{
  margin-bottom: 30px;
}


.footer {
  padding: 15px 15px 15px 15px;
  background-color: #3B3738;
  color: #fff;
}





/* .testheight Not required - unless testing ;) */
.scrolltop {
  display:none;
  width:100%;
  margin:0 auto;
  position:fixed;
  bottom:20px;
  right:10px; 
}
.scroll {
  position:absolute;
  right:20px;
  bottom:20px;
  background:#b2b2b2;
  background:rgba(178,178,178,0.7);
  padding:20px;
  text-align: center;
  margin: 0 0 0 0;
  cursor:pointer;
  transition: 0.5s;
  -moz-transition: 0.5s;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;    
}
.scroll:hover {
  background:rgba(178,178,178,1.0);
  transition: 0.5s;
  -moz-transition: 0.5s;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;    
}
.scroll:hover .fa {
  padding-top:-10px;
}
.scroll .fa {
  font-size:30px;
  margin-top:-5px;
  margin-left:1px;
  transition: 0.5s;
  -moz-transition: 0.5s;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;  
}
.scrolltop img {
  z-index: 100;
}



</style>

<body>


<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
     
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
    </button><a class="navbar-brand" href="#"><h2>I'm Peter.</h2></a>
  </div>
  
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="">
        <a href="#mainPage"><span class="navbarText"><h3>Home</h3></span></a>
      </li>
      <li>
        <a href="#resumePage"><h3>About</h3></a>
      </li>
      <li>
        <a href="#projectPage"><h3>Work</h3></a>
      </li>
      <li>
        <a href="#contactPage"><h3>Contact</h3></a>
      </li>
    </ul>
  </div>
</nav>


<!-- <div class='scrolltop'>
    <div class='scroll icon'><img src="./img/arrow-up.png" class="" >
    </div>
</div> -->

<div class="myscrolltop">
  <a href=""><img src="./img/arrow-up.png" class="" ></a>
</div>

<div class="container-fluid" id="main">
<div class="container-fluid" id="mainPage">
  <img id="mainPic" src="./img/portrait.png" class="" >


<div class="col-xs-12">
        <h2>
          Hello, I'm Peter.
        </h2>
        <h2>
          I like to design and build beautiful website.
        </h2>
      </div>

<!--   <div class="row">
        <div class="col-xs-4">
          <img src="./img/curriculum.png" class="" >
          <h2>My Resume</h2>
        </div>
        <div class="col-xs-4">
          <img src="./img/library.png" class="" >
          <h2>My Work</h2>
        </div>
        <div class="col-xs-4">
          <img src="./img/chat.png" class="" >
          <h2>Contact</h2>
        </div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
        Aliquam in felis sit amet augue.
      </p> -->

</div>

<div class="vertialLine"></div>

<div class="container-fluid" id="resumePage">
  <div class="row">
    <div class="col-xs-12">
      <div class="col-xs-12 header">
        <h2>
        Work experience</h2>
      </div>

      <div class="col-xs-12 icon">
        <img src="./img/engineer.png"/>
      </div>
      <div class="col-xs-12 body">
        <h3>
        Aug 2017 - Nov 2017</h3>
        <p>
          ASIA AIRFREIGHT TERMINAL<br/>
          Customer service officer trainee
        </p>
      </div>

      <div class="col-xs-12 body">
        <h3>
        Sep 2016 - Apr 2017</h3>
        <p>
          MOCHA MULTIMEDIA CO. LIMITED<br/>
          Programmer
        </p>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="col-xs-12 header">
        <h2>Education</h2>
      </div>
      <div class="col-xs-12 icon">
        <img src="./img/graduate.png"/>
      </div>
      <div class="col-xs-12 body">
        <h3>
          2016 / DEC<br>
          THE OPEN UNIVERSITY OF HONG KONG
        </h3>
        <p>
          Bachelor of Computing (2nd Upper Hons) in Internet Technology<br/>
          *Dean's List 2014 Autumn Term
        </p>
      </div>
    </div>


    <div class="col-xs-12">
      <div class="col-xs-12">
        <div class="col-xs-12 header">
          <h2>Skills</h2>
        </div>
        <div class="col-xs-12 icon">
          <a id="single_image" href="./img/settings.png">
          <img src="./img/settings.png"/></a>
        </div>
        <div class="col-xs-12 body">
          <div class="col-xs-6">
            <p>Android Studio</p>
          </div>
          <div class="col-xs-6">
            <p>Microsoft Office</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12">

       <div class="col-xs-12">
        <div class="col-xs-12 header">
          <h2>Languages</h2>
        </div>
        <div class="col-xs-12 icon">
          <img src="./img/programmer.png"/>
        </div>
        <div class="col-xs-12 body">
          <div class="col-xs-6">
            <p>Java</p>
          </div>
          <div class="col-xs-6">
            <p>Javascript</p>
          </div>
          <div class="col-xs-6">
            <p>PHP</p>
          </div>
          <div class="col-xs-6">
            <p>HTML/CSS</p>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>

<div class="vertialLine"></div>


<div class="container-fluid" id="projectPage">
  <div class="col-xs-12 header">
 <h2>LATEST PROJECTS</h2>
</div>

        <div class="col-xs-12 icon">
          <img class="toIcon" src="./img/paint.png"/>
        </div>

        <div class="col-xs-12 body">
          <h3>What I've been up to.</h3>
          <p>The following are my recent works.</p>
        </div>



        <div class="col-xs-12 body padding0">
          <div class="row">
          <div class="col-xs-12 col-md-6 padding0">
            <h3>Final year project</h3>
            <p>An Android Mobile Application for Commuters Saving Time</p>

            <div class="container-fluid col-xs-12 showMorePage">   
              <button type="button" class="btn btn-info showMore" data-toggle="collapse" data-target="#demo">Show more +</button>
              <div id="demo" class="collapse padding0">
                <div class="col-xs-12">
                  <a data-fancybox="gallery1"  href="./img/project/fyp0.png"><img src="./img/project/fyp0.png" alt=""/></a>
                </div><div class="col-xs-12">
                   <a data-fancybox="gallery1"  href="./img/project/fyp1.png"><img src="./img/project/fyp1.png" alt="" /></a>
                </div><div class="col-xs-12">
                   <a data-fancybox="gallery1"  href="./img/project/fyp2.png"><img src="./img/project/fyp2.png" alt="" /></a>
                </div><div class="col-xs-12">
                   <a data-fancybox="gallery1"  href="./img/project/fyp3.png"><img src="./img/project/fyp3.png" alt="" /></a>
                </div><div class="col-xs-12">
                   <a data-fancybox="gallery1"  href="./img/project/fyp4.png"><img src="./img/project/fyp4.png" alt="" /></a>
                </div><div class="col-xs-12">
                   <a data-fancybox="gallery1"  href="./img/project/fyp5.png"><img src="./img/project/fyp5.png" alt="" /></a>
                </div>
              </div>
            </div>
          </div>




          <div class="col-xs-12 col-md-6 padding0">
           <h3>Mini game</h3>
           <p>A shooting game designed and builded with Android Studio</p>

           <div class="container-fluid col-xs-12 showMorePage">   
            <button type="button" class="btn btn-info showMore" data-toggle="collapse" data-target="#demo1">Show more +</button>
            <div id="demo1" class="collapse padding0">
             <div class="col-xs-12">
              <a data-fancybox="gallery2"  href="./img/project/spaceship0.png"><img src="./img/project/spaceship0.png" alt="" /></a>  
            </div><div class="col-xs-12">
              <a data-fancybox="gallery2"  href="./img/project/spaceship1.png"><img src="./img/project/spaceship1.png" alt="" /></a>
            </div><div class="col-xs-12">
              <a data-fancybox="gallery2"  href="./img/project/spaceship2.png"><img src="./img/project/spaceship2.png" alt="" /></a>
            </div><div class="col-xs-12">
              <a data-fancybox="gallery2"  href="./img/project/spaceship3.png"><img src="./img/project/spaceship3.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>

 <div class="row">
      <div class="col-xs-12 col-md-6 padding0">
       <h3>Property website</h3>
            <p></p>

        <div class="container-fluid col-xs-12 showMorePage ">   
          <button type="button" class="btn btn-info showMore" data-toggle="collapse" data-target="#demo2">Show more +</button>
          <div id="demo2" class="collapse padding0">
            <div class="col-xs-12">
              <a data-fancybox="gallery3"  href="./img/project/propety0.png"><img src="./img/project/propety0.png" alt="" /></a>  
            </div>
            <div class="col-xs-12">
              <a data-fancybox="gallery3"  href="./img/project/propety1.png"><img src="./img/project/propety1.png" alt="" /></a>
            </div>
            <div class="col-xs-12">
              <a data-fancybox="gallery3"  href="./img/project/propety2.png"><img src="./img/project/propety2.png" alt="" /></a>
            </div>
            <div class="col-xs-12">
              <a data-fancybox="gallery3"  href="./img/project/propety3.png"><img src="./img/project/propety3.png" alt="" /></a>
            </div>
            <div class="col-xs-12">
              <a data-fancybox="gallery3"  href="./img/project/propety4.png"><img src="./img/project/propety4.png" alt="" /></a>
            </div>
            <div class="col-xs-12">
              <a data-fancybox="gallery3"  href="./img/project/propety5.png"><img src="./img/project/propety5.png" alt="" /></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xs-12 col-md-6 padding0">
         <h3>Ngo website</h3>
         <p></p>

         <div class="container-fluid col-xs-12 showMorePage">   
          <button type="button" class="btn btn-info showMore" data-toggle="collapse" data-target="#demo3">Show more +</button>
          <div id="demo3" class="collapse padding0">
           <div class="col-xs-12">
            <a data-fancybox="gallery4"  href="./img/project/ngo0.png"><img src="./img/project/ngo0.png" alt="" /></a>
          </div>
          <div class="col-xs-12">
            <a data-fancybox="gallery4"  href="./img/project/ngo1.png"><img src="./img/project/ngo1.png" alt="" /></a>
          </div>
        </div>
      </div>
      </div>
</div>



    </div>
</div>

<div class="vertialLine"></div>

<div class="container-fluid contact" id="contactPage">
  <div class="row">
    <div class="col-xs-12 header">
      <h2>Contact Me</h2>
    </div>
    <div class="col-xs-12 body">
      <p>Hong Kong</p>
      <p>hoyuenheipeter@gmail.com<br>   
      Tel: 98730440</p>
    </div>
    <div class="col-xs-12 followMeIcon">
    <img src="./img/whatsapp.png" class="toIcon32" >
    <img src="./img/facebook.png" class="toIcon32" >
    <img src="./img/twitter.png" class="toIcon32" >
    </div>
    <div class="col-xs-12" >
      <form  method="post" id="myform">
        <div class="form-group" data-toggle="validator" role="form">
          <input type="text" class="form-control" id="inputName" name= "inputName" placeholder="Name" required/>
          <input type="email" class="form-control" id="inputEmail" name= "inputEmail" placeholder="Email address" data-error="Bruh, that email address is invalid" required/>
          <input type="text" class="form-control" id="inputSubject" name= "inputSubject" placeholder="Subject" required/>
          <textarea type="text" class="form-control" id="inputMessage" name= "inputMessage" placeholder="Your message" row="5" required></textarea>
        </div>
        <button id="submit" type="submit" class="btn btn-primary btn-lg">Send Message</button>
      </form>   
    </div>  
  </div>
</div>
</div>

<?php
// the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);
// $headers =  'MIME-Version: 1.0' . "\r\n"; 
// $headers .= 'From: Your name <info@address.com>' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
// // send email

// if(!empty($_POST))
// mail("hyhpeter987test@gmail.com","My subject",$msg, $header);
?>






<footer class="footer">
      <div class="container">
            © 2018 by Peter Ho. Created with bootstrap
      </div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script
src="https://code.jquery.com/jquery-1.9.1.min.js"
integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <script>
  // smoothy scoll
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar  a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

 <script>
//scoll to top
$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop').fadeIn(1500);
    } else {
        $('.scrolltop').fadeOut(1500);
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".navbar").offset().top},"800");return false})})

</script>

 <script>
//submit form without refreshing
$(document).ready(function() {
  $("#submit").click(function(e) {
    e.preventDefault();
    var name = $("#inputName").val();
    var email = $("#inputEmail").val();
    var subject = $("#inputSubject").val();
    var message = $("#inputMessage").val();

    if (name == '' || email == '' || subject == '' || message == '') {
      alert("Some Fields are Blank....!!");
    } else {
// Returns successful data submission message when the entered information is stored in database.
$.post("sendMessage.php", {
  inputName: name,
  inputEmail: email,
  inputSubject: subject,
  inputMessage: message,
}, function(data) {
  alert("Your message has been sent successfully.");
$('#myform')[0].reset(); // To reset form fields
});
}
});
});
</script>

<script>
//scoll to top
$(window).scroll(function() {
    if ($(this).scrollTop() > 100 ) {
        $('.myscrolltop').fadeIn(300);
    } else {
      $('.myscrolltop').fadeOut(300);
        // $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".myscrolltop").click(function(){$("html,body").animate({scrollTop:$(".navbar").offset().top},"1000");return false})})
</script>

<!-- 1. Add latest jQuery and fancyBox files -->

<!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
//my enlarge img script  


</script>

</body>
</html>