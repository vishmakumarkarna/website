<!DOCTYPE html>
<html>
<head>
	<title>Our Services</title>
  <link rel="icon" href="images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		
		.wrapper{
			font-family: 'raleway';
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background: #fafafa;
			
		}
		.wrapper h1{
			font-size: 3em;
			margin: 5px;
			padding-top: 15px;
			text-align: center;
			font-weight: 800;
			color: rgb(255,0,82);
			
		}
		h3{
			padding-top: 0px;
			padding-bottom: 5px;
		}
		.content-box{
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
			width: 1000px;
			margin-top: 20px;
		}
		.card{
			min-height: 220px;
			width: 320px;
			padding-right: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background: #fff;
			margin: 10px 4px;
			box-shadow: 0px 15px 25px rgba(0,0,0,0.2);
			transition: 0.3s;
		}
        .card i{
        	margin: 20px;
        	color: #ff5724;

        }
        .card h2{
        	margin-bottom: 12px;
        	font-weight: 400;
        	text-align: center;

        }
        .card p{
        	color: #6c757d;
        	text-align: center;
        }
        .card:hover i,
        .card:hover p{
        	color: #fff;
        }
        .card:hover h2{

        	font-weight: 600;
        	color: #f2f2f2;
        }
        .card:nth-child(1):hover{
        	background: linear-gradient(45deg,rgba(255,28,8,0.7)0%,rgba(255,0,82,0.7)100%),url(images/p2.jpg);
        	background-size: cover;
        }
        .card:nth-child(2):hover{
        	background: linear-gradient(45deg,rgba(255,28,8,0.7)0%,rgba(255,0,82,0.7)100%),url(images/p2.jpg);
        	background-size: cover;
        }
        .card:nth-child(3):hover{
        	background: linear-gradient(45deg,rgba(255,28,8,0.7)0%,rgba(255,0,82,0.7)100%),url(images/p2.jpg);
        	background-size: cover;
        }
        .card:nth-child(4):hover{
        	background: linear-gradient(45deg,rgba(255,28,8,0.7)0%,rgba(255,0,82,0.7)100%),url(images/p2.jpg);
        	background-size: cover;
        }
        .card:nth-child(5):hover{
        	background: linear-gradient(45deg,rgba(255,28,8,0.7)0%,rgba(255,0,82,0.7)100%),url(images/p2.jpg);
        	background-size: cover;
        }
        .card:nth-child(6):hover{
        	background: linear-gradient(45deg,rgba(255,28,8,0.7)0%,rgba(255,0,82,0.7)100%),url(images/p2.jpg);
        	background-size: cover;
        }
        

        @media(max-width: 991px){
        	.wrapper{
        		padding: 25px;
        	}
        	.wrapper h1{
        		font-size: 2.5em;
        		font-weight: 600;
        	}
        	.content-box{
        		flex-direction: column;
        		width: 100%;
        	}
        	.card{
        		min-width: 300px;
        		margin: 10px auto;
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
	  --------------->
      


       
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
	<div class="wrapper">
		<h1 style="padding-top: 120px">OUR SERVICES</h1>
		<h3>We help you succeed</h3>
		<div class="content-box">
			<div class="card">
				<img src="images/webss.png" width="50px" height="50px">
				<h2>Website Development</h2>
				<p>Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network). ... Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding.</p>
			</div>

			<div class="card">
				<img src="images/graph.jpg " width="50px" height="50px">
				<h2>Graphics Designing</h2>
				<p>Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience.</p>
			</div>

			<div class="card">
				<img src="images/apppp.jpg " width="50px" height="50px">
				<h2>App Development</h2>
				<p>Application development is the process of creating a computer program or a set of programs to perform the different tasks that a business requires. ... Every app-building process follows the same steps: gathering requirements, designing prototypes, testing, implementation, and integration.</p>
			</div>

			<div class="card">
				<img src="images/wo.jpg " width="50px" height="50px">
				<h2>Technical Workshops</h2>
				<p>A software and technology workshop is a three to four week process where a team of experts analyses your idea for a product or digital transformation/business development effort, helps you shape it, and provides basics like prototype and estimated budget to help you start your project successfully.</p>
			</div>

			<div class="card">
				<img src="images/outso.jpg " width="50px" height="50px">
				<h2>Outsourcing</h2>
				<p>Outsourcing is the business practice of hiring a party outside a company to perform services and create goods that traditionally were performed in-house by the company's own employees and staff. Outsourcing is a practice usually undertaken by companies as a cost-cutting measure.</p>
			</div>

			<div class="card">
				<img src="images/elea.jpg " width="50px" height="50px">
				<h2>E-Learning</h2>
				<p>
E-learning saves time and money.

They don't need to take time out from their jobs to attend classes. E-learning is also cost-effective; companies save a substantial amount on the travel and accommodation costs of both learners and instructors, as well as the venue and materials.</p>
			</div>
			
		</div>
	</div>


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
</body>
</html>