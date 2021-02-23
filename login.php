<?php
if(isset($_POST['login']))
{
  echo "Yes, we have dataaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coin Antiquites</title>
  <link rel="stylesheet" type="text/css" href="style.scss">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="index.html">
            <img src="images/coin.png">
          </a>
      
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="index.html">
              Home
            </a>
      
            <a class="navbar-item">
            About Us
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  Shipping
                </a>
                <a class="navbar-item">
                  Payment
                </a>
                <a class="navbar-item">
                  Contact
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
</head>
<body>
        <section style="background-color:rgb(52, 212, 218)" class="hero is-primary is-fullheight">
                <div class="hero-body">
                  <div class="container">
                    <div class="columns is-centered">
                      <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form action="" class="box">
                          <div class="field">
                            <label for="" class="label">Email</label>
                            <div class="control has-icons-left">
                              <input type="email" placeholder="e.g. bobsmith@gmail.com" class="input" required>
                              <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                              </span>
                            </div>
                          </div>
                          <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control has-icons-left">
                              <input type="password" placeholder="*******" class="input" required>
                              <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                              </span>
                            </div>
                          </div>
                          <div class="field">
                            <label for="" class="checkbox">
                              <input type="checkbox">
                             Remember me
                            </label>
                          </div>
                          <div class="field">
                            <button class="button is-success" value="submit" type="submit" name="login">
                              Login
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

</body>
</html>