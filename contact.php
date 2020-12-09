<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Aliza Faisal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
   <div class="navbar">
        <div class="logo contact-logo">
            <a href="index.php"><img src="images/logo.png" alt="Aliza Faisal Logo"></a>
        </div>
        <nav>
            <ul>
                <li class="homeLinkLi"><a class="homeLink" href="index.php">&larr; Back to Home Page</a></li>
               
            </ul>
        </nav>
   </div>
</header>
<body>
    <main>
        <?php 
        //handling error of the form
        if(isset($_POST['submit'])){
         
            if(empty($_POST['fname'])){
                $fnameErr = 'First Name is required';
            }
            if(empty($_POST['lname'])){
                $lnameErr = 'Last Name is required';
            }
            if(empty($_POST['phone'])){
                $phoneErr = 'phone number is required';
            }
            if(empty($_POST['email'])){
                $emailErr = 'Email is required';
            }
            if(empty($_POST['msg'])){
                $msgErr = 'Please write the message';
            }
        }
        ?>
    <div class="contact-page">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <p>Fill out the form below and we’ll be in touch soon. </p>
                <form action="" method="post">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname"><br>
                        <span><?php if(isset($fnameErr)) { echo $fnameErr; }?></span><br>
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname"><br>
                        <span><?php if(isset($lnameErr)) { echo $lnameErr; }?></span><br>
                        <label for="phone">Phone:</label>
                        <input type="mob" id="phone" name="phone"><br>
                        <span><?php if(isset($phoneErr)) { echo $phoneErr; }?></span><br>
                        <label for="email">Your email address:</label>
                        <input type="email" id="email" name="email"><br>
                        <span><?php if(isset($emailErr)) { echo $emailErr; }?></span><br>
                        <label for="compName">Company Name:</label>
                        <input type="text" id="compName" name="compName"><br>
                        <label for="msg">Message:</label>
                        <textarea id="msg" name="msg" ></textarea><br>
                        <span><?php if(isset($msgErr)) { echo $msgErr; }?></span><br>
                        <input type="submit" name="submit" value="submit &rarr;">
                
                </form>
        </div>
        <div class="contact-info">
           <div class="contact-row">
               <div class="contact-box contact-box-1">
                   <span>Call Us</span>
                   <span>xxx xxx xxx</span>
               </div>
               <div class="contact-box contact-box-2">
                   <span>Email Us</span>
                   <span>info@aliza.com.au</span>
               </div>
            </div>
            <div class="contact-row-2">
                   <p>We are located in sydney</p>
                   <p>10 Abraham Street, rooty Hill, Sydney</p>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26532.450088457168!2d150.82748839641778!3d-33.77213081369914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129a3c5c1896a7%3A0x5017d681632c8e0!2sRooty%20Hill%20NSW%202766!5e0!3m2!1sen!2sau!4v1606788175829!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          
        </div>
      </div>
    </main>
    <?php
require('footer.php');
?>