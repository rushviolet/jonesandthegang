<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120611760-1"></script>
  <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-120611760-1');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jones & the Gang - Web design & development for creative people and small businesses. </title>
  <link rel="icon" 
      type="image/png" 
      href="icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="ficon.css">
  <link href='https://fonts.googleapis.com/css?family=iNconsolata' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="parallax.min.js"></script>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<style class="cp-pen-styles">

.case-study-gallery {
  margin-top: 50px;
  width: 90%;
  margin: 50px auto;
  max-width: 1100px;
}

.case-study {
  position: relative;
  display: block;
  width: 90%;
  height: 250px;
  margin: 0 auto 2rem;
  background-size: cover;
  border-radius: 8px;
  box-shadow: 0px 8px 0px rgba(0, 0, 0, 0.25);
  overflow: hidden;
  transition: all .4s ease;
}
@media screen and (min-width: 37.5em) {
  .case-study {
    height: 300px;
  }
}
@media screen and (min-width: 45em) {
  .case-study {
    display: inline-block;
    width: 45%;
    margin-left: 25px;
  }
}

.case-study__img {
  width: 100%;
  display: block;
  margin-top: 50%;
  transform: translateY(50%);
  margin: 0 auto;
}

.case-study__overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  z-index: 10;
}
.case-study__overlay:after {
  content: '';
  width: 100%;
  border-radius: 10px;
  height: 100%;
  background-color: #202020;
  opacity: 0;
  position: absolute;
  top: 0;
  z-index: -10;
  left: 0;
  transition: all .3s ease;
}

.case-study__title {
  position: relative;
  top: -200px;
  margin-bottom: 2rem;
  margin-top: 6rem;
  font-family: 'bhcn-light';
  font-size: 2.25rem;
  font-weight: 100;
  color: #ec45d2;
  text-align: center;
  letter-spacing: 2px;
  transition: all 0.3s cubic-bezier(0.3, 0, 0, 1.3);
}

.case-study__link {
  position: relative;
  display: block;
  width: 40%;
  top: 250px;
  padding: 10px;
  margin: 0 auto;
  font-family: 'Inconsolata';
  color: #ec45d2;
  letter-spacing: none;
  text-decoration: none;
  text-align: center;
  border: 2px solid #ec45d299;
  border-radius: 4px;
  font-size: 1.5em;
  transition: all 0.3s cubic-bezier(0.3, 0, 0, 1.3);
}
.case-study__link:hover {
  background-color: #ec45d299;
  color: #202020;
}
.case-study__link:visited {
  color: #ec45d2;
}

.case-study:hover .case-study__title {
  top: 0;
}
.case-study:hover .case-study__link {
  top: 0;
}
.case-study:hover .case-study__overlay:after {
  opacity: .75;
}

.study1 {
  background-image: url("idahofamilywellness.png");
}

.study2 {
  background-image: url("gynwave.png");
}

.study3 {
  background-image: url("wolffest.png");
}

.study4 {
  background-image: url("tonyakehoe.png");
}

.study5 {
  background-image: url("dluxdomains.png");
}



</style>

</head>
<?php include("header.php");?>

  <div class="container-fluid col-md-offset-2">
      <h1 class="animated fadeInUp text-left workheader">
      <i class="ficon-rocket"></i> recent work</h1>
  </div>
  <div class="case-study-gallery">
<div class="case-study study1">
  <div class="case-study__overlay">
    <h2 class="case-study__title">Idaho Family Wellness</h2>
    <a class="case-study__link" href="#">CASE STUDY COMING SOON</a>
  </div>
</div>
  
<div class="case-study study2">
  <div class="case-study__overlay">
    <h2 class="case-study__title">gynwave</h2>
    <a class="case-study__link" href="#">CASE STUDY COMING SOON</a>
  </div>
</div>
  
<div class="case-study study3">
  <div class="case-study__overlay">
    <h2 class="case-study__title">WoLF Fest</h2>
    <a class="case-study__link" href="#">CASE STUDY COMING SOON</a>
  </div>
</div>
  
<div class="case-study study4">
  <div class="case-study__overlay">
    <h2 class="case-study__title">Tonya Kehoe</h2>
    <a class="case-study__link" href="#">CASE STUDY COMING SOON</a>
  </div>
</div>
  
<div class="case-study study5">
  <div class="case-study__overlay">
    <h2 class="case-study__title">dlux domains</h2>
    <a class="case-study__link" href="#">CASE STUDY COMING SOON</a>
  </div>
</div>

</div>
<?php include("footer.php");?>