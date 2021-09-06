

<?php
require_once('config.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="icon" href="images/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		.contact{
			position: relative;
			min-height: 100vh;
			padding: 50px 100px;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background-image: url('images/contt.jpg');
			background-size: cover;
		}
		.contact .content{
			max-width: 800px;
			text-align: center;
		}
		.contact .content h2{
			font-size: 50px;
			font-weight: 800;
			color: #fff;
		
		}
		.contact .content p{
			
			font-weight: 300;
			color: #fff;
		}
		.container{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 30px;
		}
		.container .contactInfo{
			width: 40%;
			display: flex;
			flex-direction: column;
		}
		.container .contactInfo .box{
			position: relative;
			padding: 20px 0;
			display: flex;
		}
		.container .contactInfo .box .icon{
			min-width: 60px;
			height: 60px;
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
		    border-radius: 50%;
			font-size: 22px;
		}
		.container .contactInfo .box .text{
			display: flex;
			margin-left: 20px;
			font-size: 16px;
			color: #fff;
			flex-direction: column;
		    font-weight: 300;
		}
		.container .contactInfo .box .text h3{
			font-weight: 500;
			color: #00bcd4;

		}
		.contactForm{
			width: 50%;
			padding: 30px;
			background: #fff;
		}
		.contactForm h2{
			font-size: 30px;
			color: #333;
			font-weight: 500;
		}
		.contactForm .inputBox{
			position: relative;
			width: 100%;
			margin-top: 10px;
		}
		.contactForm .inputBox input,
		.contactForm .inputBox textarea{
			width: 100%;
			padding: 5px 0;
			font-size: 16px;
			margin: 10px 0;
			border:none;
			border-bottom: 2px solid #333;
			outline: none;
			resize: none;
		}
		.contactForm .inputBox span{
			position: absolute;
			left: 0;
			padding: 5px 0;
			font-size: 16px;
			margin: 10px 0;
			pointer-events: none;
			transition: 0.5s;
			color: #666;

			
		}
		.contactForm .inputBox input:focus ~ span,
		.contactForm .inputBox input:valid ~ span,
		.contactForm .inputBox textarea:focus ~ span,
		.contactForm .inputBox textarea:valid ~ span
		{
			color: #e91e63;
			font-size: 12px;
			transform: translateY(-20px);
		}
		.contactForm .inputBox input[type="submit"]{
			width: 100px;
			background: #00bcd4;
			color: #fff;
			border:none;
			cursor: pointer;
			padding: 10px;
			font-size: 18px;

		}
		@media(max-width:980px )
		{
			.contact
			{
				padding: 50px;
			}
			.container
			{
				flex-direction: column;
			}
			.container .contactInfo
			{
				margin-bottom: 40px;
			}
			.container .contactInfo {
				width: 100%;
			}
		}


        .footer-container h3{
	color:white;
	font-size: 50px;
	text-align: left;
	padding-left: 50px;
	padding-top: 30px;
	padding-bottom: 30px;
}
.footer{
    background: var(--dark);
    color: #fff;
   background-size: cover;
    text-align: center;
    background-color: black;
    
}



.footer-bottom{
	text-align:center;
	color: red;
	padding-top: 50px;
}
.footer-bottom p{
	padding-right: 20%;
	color: #999;
}

	</style>
</head>
<body>

<div class="header">
  <div class="menu-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="50px" ></a><h2 style="padding-top: 5px ;color:white">JA IT SOLUTION</h2>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"  >About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php" >Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="team.php" >Our Team</a>
      </li>
	  
	    <!------------
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="login.php" >CEO</a>
          <a class="dropdown-item" href="login.php" >CTO</a>
          <a class="dropdown-item" href="login.php" >HR Operation & Lead</a>
         
          <a class="dropdown-item" href="login.php" >Planning</a>
           <a class="dropdown-item" href="login.php" >Advisor</a>
            <a class="dropdown-item" href="login.php" >Software Development Team</a>
             <a class="dropdown-item" href="login.php" >Intern</a>
          
        </div>
      </li>
	  ---------------->
      


       
       <li class="nav-item">
        <a class="nav-link" href="contactus.php" >Contact Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="career.php" >Career</a>
      </li>
    </ul>
  </div>
</nav>
</div>
  </div>


	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>Have any question?We'd love to hear from you.</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				


				<div class="box">
					<div class="icon"><i class="fas fa-envelope"></i></div>
					<div class="text">
					<h3>Email</h3>
					<p>jaitsolution07@gmail.com</p>	
					<p>info@jaitsolution.com</p>
					</div>
				</div>
			</div>
			<div class="contactForm">
				<form action="contactAction.php" method="post">
					<h2>Send Message</h2>
					<div class="inputBox" >
					
					<label for="fname">FULL NAME</label>
					<input type="text" name="fname" id="fname" for="fname" required="required">
					
                   </div>

                   <div class="inputBox">
				   <label for="email">Email</label>
					<input type="text" name="email" id="email" required="required">
					
                   </div>
				   
				    <div class="inputBox">
					<label for="mobile">MOBILE NO.</label>
					<input type="text" name="mobile"  id="mobile" required="required">
					
                   </div>

                   <div class="inputBox">
				   <label for="comment">Type your Message...</label>
					<textarea required="required" id="comment" name="comment"></textarea>
					
                   </div>

                   <div class="inputBox">
				   <input class="btn btn-primary" href="index.php" type="submit" id="register" name="create" value="Submit">
					
					
                   </div>
				</form>
			</div>
		</div>
		
	</section>
	<footer class="footer">
        <div class="footer-container">
          <h3>JA IT SOLUTION</h3>
            <div class="row">
              <div class="col-md-3">
                 
                  <table>
                   <img src="images/logo.jpg" width="250px" style="border-radius: 40px; border:2px solid grey;">
                  </table>
                </div>

                <div class="col-md-3">
                <h2 class="header">WORK DOMAIN</h2><br>
                <table>
                    <ul type="none">
                      
                      <li><a href="#" class="text-white" style="text-decoration: none; font-size: 22px;">Technical Workshops</a></li>
                      <li><a href="#" class="text-white" style="text-decoration: none; font-size: 22px;">Graphics Designing</a></li>
                      <li><a href="#" class="text-white" style="text-decoration: none;  font-size: 22px;" >  Web Development</a></li>
                      <li><a href="#" class="text-white" style="text-decoration: none; font-size: 22px; ">App Development</a></li>
                      
                      <li><a href="#" class="text-white" style="text-decoration: none; font-size: 22px;">Outsourcing</a></li>
                      
                       <li><a href="#" class="text-white" style="text-decoration: none; font-size: 22px;">E-Learning</a></li>
                      
                    </ul>
                  </table>
                
       </div>
                
                <div class="col-md-3">
                <h2 class="header">SOCIAL LINKS</h2><br>
                <table>
                    <ul type="none">
                      
                     <div class="social-links">
                   <a href="https://www.facebook.com/profile.php?id=100071462793609"><span style="margin-left: 28px;" class="fab  fa-2x fa-facebook-f"></span></a>
          <a href="https://www.linkedin.com/in/ja-it-solution-5544091b2"><span style="margin-left: 10px; margin-top: 10px;" class="fab fa-2x fa-linkedin"></span></a>
          <a href=" https://www.instagram.com/invites/contact/?i=1j9tww9j8x7q9&utm_content=mk3sx4f"><span style="margin-left: 10px;" class="fab fa-2x fa-instagram"></span></a>
          <a href="#"><span style="margin-left: 10px;" class="fab fa-2x fa-youtube"></span></a>
                
                </div>
                      
                    </ul>
                  </table>
                 </div>
 
  <div class="col-md-3">
                 <h2 class="header">LOCATION</h2><br>
                 <table>
                    <ul type="none">
                      <li>  <i class="fas fa-map-marker-alt"></i> Birgunj,Nepal</p></li>
                      
                      <li> <i class="fas fa-map-marker-alt"></i>   India</li>
                      
                      
                    </ul>
                  </table>
                  
                </div>
</div>
 </div>
 <div style=" margin-left: 55px;  margin-top: 35px;text-align: center; opacity: .6;"> Copyright <span>&copy</span> JA IT SOLUTION 2021 <span style="border-left: 2px solid white;
  height: 5px;margin-left: 5px; margin-right: 5px;  padding-top:  10px;
  "></span> All Rights Reserved</div>
  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script type="text/javascript">
		$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

			var fname 	= $('#fname').val();
			var email		= $('#email').val();
			var mobile 	= $('#mobile').val();
			var comment 	= $('#comment').val();
			
			
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'contactAction.php',
					data: { fname : fname, email : email, mobile : mobile, comment : comment },
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
			}else{
				
			}

			



		});		

		
	});
	
</script>

</body>
</html>