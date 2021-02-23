<?php

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];
$state=$_POST['state'];
$address=$_POST['address'];
if(!empty($name)||!empty($surname)||!empty($email)||!empty($password)||!empty($state)||!empty($address))
{
  $host="localhost";
  $dbUSername="root";
  $dbPassword="";
  $dbName="signup";
}
$conn=new mysqli($host,$dbUSername,$dbPassword,$dbName);
if(mysqli_connect_error())
{
  die("Connection error");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coin Antiquites</title>
  <link rel="stylesheet" type="text/css" href="signin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.4.1.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <nav class="navbar is-dark" role="navigation" aria-label="main navigation">

        <div class="navbar-brand">
          <a class="navbar-item" href="index.html">
            <img src="coin.png">
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

<body style="background-color:rgb(52, 212, 218);height:100%">

<section style="background-color:rgb(52, 212, 218);padding-top:80px;" class="hero is-primary is-fullheight">
                <div class="hero-body">
                  <div class="container">
                    <div class="columns is-centered">
                      <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form action="insert.php" class="box" method="post">

                          
                        
                        <div class="field">
                            <label for="" class="label">Name</label>
                            <div class="control has-icons-left">
                              <input type="text" name="name" placeholder="Your name" class="input" required>
                              <span class="icon is-small is-left">
                              <i class="fas fa-users"></i>
                              </span>
                            </div>
                          </div>

                          <div class="field">
                            <label for="" class="label">Surname</label>
                            <div class="control has-icons-left">
                              <input type="text" name="surname" placeholder="Your surname" class="input" required>
                              <span class="icon is-small is-left">
                              <i class="fas fa-users"></i>
                              </span>
                            </div>
                          </div>
                        
                        
                        <div class="field">
                            <label for="" class="label">Email</label>
                            <div class="control has-icons-left">
                              <input type="email" name="email" placeholder="e.g. bobsmith@gmail.com" class="input" required>
                              <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                              </span>
                            </div>
                          </div>

                          <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control has-icons-left">
                              <input type="password" name="password" placeholder="*******" class="input" required>
                              <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                              </span>
                            </div>
                          </div>

                          <div class="field">
                            <label for="" class="label">State</label>
                            <div class="control has-icons-left">
                              <input type="text" name="state" placeholder="Your state" class="input" required>
                              <span class="icon is-small is-left">
                              <i class="fas fa-globe"></i>
                              </span>
                            </div>
                          </div>

                          <div class="field">
                            <label for="" class="label">Address</label>
                            <div class="control has-icons-left">
                              <input type="text" name="address" placeholder="Your address" class="input" required>
                              <span class="icon is-small is-left">
                              <i class="fas fa-map-marker"></i>
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
                            <button class="button is-success" name="signin">
                              Sign In
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
<br><br><br><br><br><br><br><br><br><br>

              <div class="bottom">
    <div class="columns">
        <div class="column">
          <p style="text-align: center;margin-top:20px;">Useful articles</p>
          <a class="a"><p style="text-align: center;margin-top:80px;">Guide To Collecting Roman Coins</p></a>
          <a class="a"><p style="text-align: center;margin-top:70px;">Guide To Collecting Greek Coins</p></a>
          <a class="a"><p style="text-align: center;margin-top:70px;">Guide To Collecting Byzantine Coins</p></a>
          <a class="a"><p style="text-align: center;margin-top:70px;">How To Spot a Fake Coin</p></a>
        </div>
        <div class="column">
        <p style="text-align: center;margin-top:20px;">Terms of use</p>
        <a class="a"><p style="text-align: center;margin-top:80px;">Lorem Ipsum</p></a>
        <a class="a"><p style="text-align: center;margin-top:70px;">Lorem Ipsum</p></a>
        <a class="a"><p style="text-align: center;margin-top:70px;">Lorem Ipsum</p></a>
        <a class="a"><p style="text-align: center;margin-top:70px;">Lorem Ipsum</p></a>
        </div>
        <div class="column">
          <p style="text-align: center;margin-top:20px;">Cookies and Privace</p>
            <a class="a"><p style="text-align: center;margin-top:80px;">Lorem Ipsum</p></a>
              <a class="a"><p style="text-align: center;margin-top:70px;">Lorem Ipsum</p></a>
                <a class="a"><p style="text-align: center;margin-top:70px;">Lorem Ipsum</p></a>
                  <a class="a"> <p style="text-align: center;margin-top:70px;">Lorem Ipsum</p></a>
        </div>
    </div>
</div>
</body>
</html>


