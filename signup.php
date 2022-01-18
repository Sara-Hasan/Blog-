<!DOCTYPE html>
<html>
<head>
	<title> Sign Up </title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    h2{
        color: #fff;
    }
    .con{
        background-image: url('https://images.pexels.com/photos/3571576/pexels-photo-3571576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }
    .flex-con{
        background: rgba(0,0,0,0.5);
        border-radius: 5px;
        padding: 50px;
        border-radius: 5px;
    }
    .label{
        color: #fff;
    }
</style>
<body>
    <!-- Navbar -->
<nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><a href="index.php"> blog </a> </label>
    <ul>
        <li> <a href="signup.php">  Register </a></li>
        <li> <a href="login.php">  Login </a></li>
        <li> <a class="contact" href="contact.php">  Contact me</a></li>
    </ul>
  </nav>

    <!-- about -->

    <section id="Tistimonal">
        <div class="container con">
            <div class="flex-con">
                <div class="flex">
                    <div class="contact-wrap">
                        <h2>Register</h2> 
                        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	                    </div>
                    </div>
                    <form id="fupForm" name="form1" method="post">
                        <div class="form-group">
                            <label for="email" class="label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="password" name="password">
                        </div>
                        <input type="button" name="save" class="btn btn-primary" value="Register" id="butsave">
                    </form>
                </div>
                <!-- <div class="flex">
                    <img src="https://images.pexels.com/photos/3571576/pexels-photo-3571576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Sarah Hasan"> 
                </div> -->
            </div>
            </div>
        </div>
    </section>

<!-- Footer -->
<footer>
        <!-- <div class="container"> -->
                <div class="Account"> 
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" target="_blank"><i class="fab fa-github-alt" target="_blank"></i></a>
                <a href="#"><i class="fas fa-at" target="_blank"></i></a>
            </div>
            <hr>
            <p>  © 2022 The Adventure Blog </p>
        <!-- </div>   -->
    </footer>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		if(name!="" && email!="" && password!=""){
			$.ajax({
				url: "savesignup.php",
				type: "POST",
				data: {
					name: name,
					email: email,
					password: password,						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Welcome'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>
  