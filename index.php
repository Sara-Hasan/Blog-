<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Blog </title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <style>
        .mode {
            float:right;
        }
        .change {
            cursor: pointer;
            border: 1px solid #555;
            border-radius: 40%;
            width: 20px;
            text-align: center;
            padding: 5px;
            margin-left: 8px;
        }
        .dark{
            background-color: #222;
            color: #e6e6e6;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
<nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><a href="index.php"> blog </a> </label>
    <ul>
        <li> <a class="contact" href="contact.php">  Contact me</a></li>
        <?php if(!isset($_SESSION["email"]))
        {
            echo '<li> <a href="signup.php">  Register </a></li>';
            echo '<li> <a href="login.php">  Login </a></li>';
        }
        else
        {
            echo '<li> <a href="logout.php">  Logout </a></li>';
        } ?>
        <li> <span class="change"><i class="fas fa-moon"></i></span></li>
    </ul>
  </nav>
    <!-- Header -->
    <header>
        <div class="header">
            <div class="head">
                <h1> The Adventure Blog </h1>
                <div class="buttons">
                    <div class="button"> <a href="signup.php" target="_blank"> Start </a> </div>
                </div>
            </div>
        </div>  
    </header>

    <!-- about -->

    <div id="posts">
            <h1> Posts </h1>
            <div class="grid-container">
            <div class="card">
                <img src="https://images.pexels.com/photos/1258863/pexels-photo-1258863.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%">
                <div class="containers">
                    <p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien 
                        imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
                         lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.
                    </p> 
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/3887962/pexels-photo-3887962.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%">
                <div class="containers">
                <p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien 
                        imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
                         lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.
                    </p> 
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/836781/pexels-photo-836781.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%">
                <div class="containers">
                <p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien 
                        imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
                         lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.
                    </p> 
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/3540375/pexels-photo-3540375.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%">
                <div class="containers">
                <p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien 
                        imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
                         lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.
                    </p> 
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/754268/pexels-photo-754268.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%">
                <div class="containers">
                <p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien 
                        imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
                         lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.
                    </p> 
                </div>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/834977/pexels-photo-834977.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Avatar" style="width:100%">
                <div class="containers">
                <p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien 
                        imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula
                         lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.
                    </p> 
                </div>
            </div>
            </div>
    </div>

<!-- Footer -->
    <footer>
        <div class="Account"> 
            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" target="_blank"><i class="fab fa-github-alt" target="_blank"></i></a>
            <a href="#"><i class="fas fa-at" target="_blank"></i></a>
        </div>
        <hr>
        <p>  © 2022 The Adventure Blog </p>
    </footer>

    <script>
        $( ".change" ).on("click", function() {
            if( $( "body" ).hasClass( "dark" )) {
                $( "body" ).removeClass( "dark" );
                $( ".change" ).prepend('<i class="fas fa-moon"></i>');
            } else {
                $( "body" ).addClass( "dark" );
                $( ".change" ).prepend('<i class="fas fa-sun"></i>');
            }
        });
    </script>
</body>
</html>
  