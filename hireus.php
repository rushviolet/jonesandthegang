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

</head>
<?php include("header.php");?>

  <div class="container-fluid col-md-offset-2">
      <h1 class="animated fadeInUp text-left hireusheader">
      <i class="ficon-magic-wand"></i> want to work together?</h1>
    <div class="form connect">
<form class="form-horizontal" name="newproject" method="post" action="send_form_email.php">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bizname">Business name:*</label>  
  <div class="col-md-4">
  <input id="bizname" name="bizname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bizinfo">Describe your business:*</label>  
  <div class="col-md-4">
  <textarea class="form-control" id="bizinfo" name="bizinfo" placeholder=""></textarea>    
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="services">Services of interest:</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="services-0">
      <input type="checkbox" name="services[]" id="services-0" value="newsite">
      New website
    </label>
  </div>
  <div class="checkbox">
    <label for="services-1">
      <input type="checkbox" name="services[]" id="services-1" value="redesign">
      Website redesign
    </label>
  </div>
  <div class="checkbox">
    <label for="services-2">
      <input type="checkbox" name="services[]" id="services-2" value="maintenance">
      Ongoing maintenance
    </label>
  </div>
  <div class="checkbox">
    <label for="services-3">
      <input type="checkbox" name="services[]" id="services-3" value="socialmedia">
      Social media development
    </label>
  </div>
  <div class="checkbox">
    <label for="services-4">
      <input type="checkbox" name="services[]" id="services-4" value="marketing">
      Marketing
    </label>
  </div>
  <div class="checkbox">
    <label for="services-5">
      <input type="checkbox" name="services[]" id="services-5" value="contentdev">
      Content development
    </label>
  </div>
  <div class="checkbox">
    <label for="services-6">
      <input type="checkbox" name="services[]" id="services-6" value="illustration">
      Custom illustration
    </label>
  </div>
  <div class="checkbox">
    <label for="services-7">
      <input type="checkbox" name="services[]" id="services-7" value="ecommerce">
      E-Commerce
    </label>
  </div>
  <div class="checkbox">
    <label for="services-8">
      <input type="checkbox" name="services[]" id="services-8" value="seo">
      SEO
    </label>
  </div>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="goals">What are your goals for this project?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="goals" name="goals"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="insp">Are there any businesses with a web presence that you admire?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="insp" name="insp"></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="timeline">What's your timeline for this project?</label>  
  <div class="col-md-4">
  <input id="timeline" name="timeline" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="budget">What is your budget range?</label>  
  <div class="col-md-4">
  <input id="budget" name="budget" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comments">Any more information?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comments" name="comments"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="referral">How did you find us?</label>  
  <div class="col-md-4">
  <input id="referral" name="referral" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Your name:*</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:*</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone:</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" type="submit"  class="btn btn-lg">SUBMIT INQUIRY</button>
  </div>
</div>

</fieldset>
</form>
</div>
  </div>
<?php include("footer.php");?>