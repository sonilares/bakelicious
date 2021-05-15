<?php/*
      include_once 'includes/dbh.inc.php';
*/?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css"/>

  </head>
   
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src=" dist/images/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src=" dist/images/location.png" class="icon" alt="" />
              <p>Prishtina</p>
            </div>
            <div class="information">
              <img src=" dist/images/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src=" dist/images/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com" target ="_blank">
                <i class="fab fa-facebook-f" ><img src=" dist/images/fb.png"></i>
              </a>
              <a href="https://www.twitter.com" target ="_blank">
                <i class="fab fa-twitter"><img src=" dist/images/tw.png"></i>
              </a>
              <a href="https://www.instagram.com" target ="_blank">
                <i class="fab fa-instagram"><img src=" dist/images/insta.png"></i>
              </a>
              <a href="https://www.linkedin.com" target ="_blank">
                <i class="fab fa-linkedin-in"  ><img src=" dist/images/in.png"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container">
              <label for="City">Choose a city:</label>
              <select name="city" id="city" class = "input" >
              <option value="Prishtin">Gjilan</option>
              <option value="Gjilan">Prishtin</option>
              <option value="Ferizaj">Ferizaj</option>
              </select>
              <span>City</span>
            </div>
            <div class="input-container">
            <input type="checkbox" id="terms" name="Terms" value="Terms" class = "input">
            <label for="terms"> Agree to terms </label><br>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="message"></label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="dist/js/app.js"></script>
   <?php/*
    
    $sql = "SELECT * FROM demo;";
    $result = mysqli_query($conn, $sqli);
    $resultCheck = mysqli_num_rows($result);
*/
    ?>
  </body>
</html>
