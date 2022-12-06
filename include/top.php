<?php
//we have to define our variables

$fname='';
$lname='';
$email='';
$comments='';

$fnameErr='';
$lnameErr='';
$emailErr='';
$commentsErr='';

//if the request server method equals to post... then do something
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // now we are making sure that all the fields are empty so that if they are not empty, we are going to do something
    
    if (empty($_POST['fname'])) {
        $nameErr='Please fill out your first name';
    } else {$name=$_POST['fname'];
           }
    if (empty($_POST['lname'])) {
        $nameErr='Please fill out your last name';
    } else {$name=$_POST['lname'];
           }
    if (empty($_POST['email'])) {
        $emailErr='Please fill out your email';
    } else {$email=$_POST['email'];
           }
    if (empty($_POST['comments'])) {
        $commentsErr='Please enter your comments';
    } else {$comments=$_POST['comments'];
           }
    function myBreeds() {
        $myReturn='';
        if(!empty($_POST['breeds'])){
            $myReturn=implode(',',$_POST['breeds']);
            return $myReturn;
        }
    } //end function
    
    // is everything set - and if it is, we are going to prepare the email
    
    if(isset($_POST['fname'],
             $_POST['lname'],
             $_POST['email'],
             $_POST['comments']
            )){
        $to='clenahansen@gmail.com';
        $subject='Test Email';
        $body=''.$fname.' '.$lname.' has filled out your form '.PHP_EOL.'<br>';
        $body='Email address: '.$email.'<br>';
        $body.='Comments: '.$comments.'';
        
        $headers=array(
        'From' => 'no-reply@codykhaos.com',
            'Reply-to' => ''.$email.'');
        //make sure the $subject is placed BEFORE the body
            mail($to,$subject,$body,$headers);
        header('Location:thx.php');
    } //close isset
    
    
} // end server request

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        case 'index.php':
        $title='Cody Khaos Studios';
        $body='home';
        $headlineOne='Welcome to Cody Khaos Studios!';
        break;
        
        case 'about.php':
        $title='About | Cody Khaos Studios';
        $body='about';
        $headlineOne='About Cody Khaos Studios';
        break;
        
        case 'portfolio.php':
        $title='Portfolio | Cody Khaos Studios';
        $body='portfolio';
        $headlineOne='See examples of my work';
        break;
        
        case 'contact.php':
        $title='Contact | Cody Khaos Studios';
        $body='contact';
        $headlineOne='Contact me to learn more';
        break;
        
        case 'thx.php':
        $title='Thank You | Cody Khaos Studios';
        $body='thx';
        $headlineOne='Thank you for contacting us!';
        break;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bungee&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/masonry.css" />
    <link rel="stylesheet" href="styles/lightbox.css" />
    <script
      src="https://kit.fontawesome.com/fcbb745e7f.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="scripts/script.js"></script>