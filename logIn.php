<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Raleway:wght@500&display=swap"
      rel="stylesheet" 
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />

  </head>

  <body>
    
    <div class="container">
      <div class="pannel">
        <div class="centered">
          <h1 class="header">Welcome</h1>
        </div>
        <div class="tab-wrapper">
          <h3 class="tab" onclick="changeTab('login')">Log in</h3>
          <h3 class="tab" onclick="changeTab('sign-up')">Sign up</h3>
        </div>
        <div id="login">
          <div class="login-container">
            <form name="myForm">
              <div class="row">
                <div class="row" style="padding: 0 20%">
                  <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    required
                  />
                  <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                  />
                  <input type="submit" value="Login" />
                </div>
                <div class="row social-media">
                  <a href="#" class="fb">
                    <i class="fa fa-facebook fa-fw"></i>
                  </a>
                  <a href="#" class="twitter">
                    <i class="fa fa-twitter fa-fw"></i>
                  </a>
                  <a href="#" class="google"
                    ><i class="fa fa-google fa-fw"> </i>
                  </a>
                  <a href="#" style="color: white" class="btn"
                    >Forgot password?</a
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="sign-up">
          <form
            name="signupForm"
            onsubmit="validateForm()"
            method="post"
          >
            <div class="sign-up-wrapper">
              <label for="name">
                <input type="text" name="name" placeholder="Name" />
              </label>
              <label for="username">
                <input type="text" name="username" placeholder="Username" />
              </label>
              <label>
                <input type="text" name="email" placeholder="Email"
              /></label>
              <label>
                <input type="password" name="password" placeholder="Password" />
              </label>
              <div class="checkbox-input">
                <label>
                  <input type="checkbox" name="Terms and Condition" />
                  <p>Terms and Condition</p>
                </label>
              </div>
              <div class="sign-up-button-row">
                <button onclick="validateForm()">Sign up</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>