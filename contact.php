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
    <link href="styles/lightbox.css" rel="stylesheet" />
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
    <title>Contact | Cody Khaos: Hip Hop Choreographer and Coach</title>
  </head>
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
        <form action="">
          <div class="row">
            <div class="col mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" />
            </div>
            <div class="col mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" />
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
              >Message</label
            >
            <textarea class="form-control" id="message" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-branding">Submit</button>
        </form>
      </div>
      <!--END WRAPPER-->
      <div class="social-links">
        <a
          rel="noopener noreferrer"
          href="https://instagram.com/codykhaos"
          target="_blank"
          id="ig"
          ><div><i class="fa-brands fa-instagram"></i></div></a
        ><a
          rel="noopener noreferrer"
          href="https://youtube.com/codykhaosdance"
          target="_blank"
          id="yt"
          ><div><i class="fa-brands fa-youtube"></i></div></a
        ><a
          rel="noopener noreferrer"
          href="https://tiktok.com/codykhaos"
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
        <li>Terms of Use</li>
        <li>Privacy Policy</li>
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
