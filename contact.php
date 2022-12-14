<?php
// defining the variables
// for colleen!!!!!
      
  $name = '';
  $email = '';
  $comment = '';
  $name_err = '';
  $email_err = '';
  $comment_err = '';
  $captcha_err = '';
  $message = '';

// what is the request method???
// if the request method == POST

if($_SERVER['REQUEST_METHOD'] == 'POST') {

// logic - if the field is empty, do something

  if(empty($_POST['name'])) {
$name_err = 'Please fill out your name';
  } else {
$name = $_POST['name'];
  }

  if(empty($_POST['email'])) {
$email_err = 'Please fill out your email';
  } else {
$email = $_POST['email'];
  }

  if(empty($_POST['comment'])) {
$comment_err = 'Please enter a message';
  } else {
$comment = $_POST['comment'];
  }

    if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
        $captcha_err = "Please check the ReCaptcha Form Box";

        }
        // Colleen - your Secret Key !!!!!!!!!
        $secretKey = "6Lftw1sjAAAAAAmY7B65ek5g8IrX7LfO42OSgRFf";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
            // Colleen - YOUR EMAIL BELOW
        $to = 'clenahansen@gmail.com';
        $subject = 'Cody Khaos Form Submission';
        $body = '
        Name: '.$name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Message: '.$comment.' '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@codykhaos.com'  
);

mail($to, $subject, $body, $headers);
// header('Location:thx.php');

$message = '<p>Thank you for contacting Cody Khaos</p>';
        } 

}  // closing server request
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Cody Khaos is a hip hop choreographer and and competitive dance coach based in South
          King County, Washington who teaches youth classes." />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/form-style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bungee&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/masonry.css" />
    <link href="styles/lightbox.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="icon" href="favicon.ico" type="image/x-icon" />

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
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <title>Contact | Cody Khaos: Hip Hop Choreographer and Coach</title>
  </head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GV4THF62P4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GV4THF62P4');
</script>
  <body class="interior contact">
    <!--START HEADER-->
    <div class="top-menu">
      <nav>
        <div class="logo">
          <a href="index.html">
            <img id="logo" src="src/ck-logo.png" alt="Cody Khaos" />
          </a>
        </div>
        <a href="javascript:void(0);" onclick="toggleMenu()"
          ><img
            id="hamburger"
            src="src/hamburger.png"
            alt="hamburger menu icon"
        /></a>
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="work.html">Work</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div id="mobileMenu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="work.html">Work</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <!--END HEADER-->
    <!--START HERO-->
    <div class="hero-interior">
      <img src="src/banner.jpg" alt="Cody Khaos teaching a dance class" />
    </div>
    <!--END HERO-->
    <!--START CONTAINER-->
    <div class="container">
      <!--START WRAPPER-->
      <div class="wrapper">
        <h1>Contact</h1>
        <?php echo $message; ?>
        <form id="comment_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
    <label>Name</label>
<input type="text" name="name" placeholder="Your name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ; ?>">
<span class="error"><?php echo $name_err;?></span>

  <label>Email</label>
<input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ; ?>">
<span class="error"><?php echo $email_err;?></span>

 <label>Message</label>    
      <textarea name="comment" placeholder="Enter your message here"><?php if(isset($_POST['comment'])) echo htmlspecialchars($_POST['comment']) ; ?></textarea>
 <span class="error"><?php echo $comment_err;?></span>    
      <div class="g-recaptcha" data-sitekey="6Lftw1sjAAAAAHQO5Dh82-g2QFwFeWypGTTTwfF9"></div>
    <span class="error"><?php echo  $captcha_err;?></span>

       <input type="submit" name="submit" value="Submit"><br><br>
       </fieldset>
    </form>
      </div>
      <!--END WRAPPER-->
      <div class="social-links">
        <a
          href="https://instagram.com/codykhaos"
          target="_blank"
          id="ig"
          ><div><i class="fa-brands fa-instagram"></i></div></a
        ><a
          href="https://www.youtube.com/@codykhaosdance"
          target="_blank"
          id="yt"
          ><div><i class="fa-brands fa-youtube"></i></div></a
        ><a
          href="https://www.tiktok.com/@codykhaos"
          target="_blank"
          id="tt"
          ><div><i class="fa-brands fa-tiktok"></i></div
        ></a>
      </div>
    </div>
    <!--END CONTAINER-->
    <!--START FOOTER-->
    <footer>
      <ul>
        <li>
          &copy;Copyright
          <script>
            document.write(new Date().getFullYear());
          </script>
        </li>
        <li>All Rights Reserved</li>
        <li><a href="terms.html">Terms of Use</a></li>
        <li><a href="privacy-policy.html">Privacy Policy</a></li>
        <li>
          Web design by
          <a href="https://colleenlenahansen.com" target="_blank">Colleen</a>
        </li>
      </ul>
    </footer>
    <!--END FOOTER-->
    <script src="scripts/lightbox-plus-jquery.js"></script>
    <script>
      lightbox.option({
        positionFromTop: 200,
      });
    </script>
  </body>
</html>
