<!----------------------------------------------Top Bar--------------------------------------------->
<!-----------------------------------------------NavBar--------------------------------------------->
<nav class=" bg navbar navbar-expand-lg navbar-light sticky-top shadow-lg" role="navigation">
	<a class="navbar-brand" href="../index.php"><img class=" d-inline-block align-center rounded-circle" src="../images/logo.jpg" alt="logo" width="117px" height="80px" title="Logo"><span class="mr-5" style="font-family:'Reggae One', cursive;"> My <span class="font-weight-bold">LIVE</span> Farming</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
	<div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li ><a class="nav-link" href="../index.php"> Home </a></li>
			<li ><a class="nav-link" href="../navbar/events.php">Events</a></li>
			<li ><a class="nav-link" href="../navbar/blog.php">Blog</a></li>
		</ul>
		<ul class="navbar-nav mr-auto align-right">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle links " href="#" id="navbardrop" data-toggle="dropdown"><i class="fas fa-sign-in-alt"></i> Login</a>
				<div class="dropdown-menu" id="dropdownitem">
					<a class="dropdown-item " href="../admin/Admin_login.php"><i class="fas fa-user-lock"></i> Admin Login</a>
					<a class="dropdown-item " href="../user/user.php"><i class="fas fa-users"></i> User Login</a>
					<a class="dropdown-item " href="../farmer/farmer_login.php"><i class="fas fa-seedling"></i> Farmer Login</a>
				</div>
			<li class="nav-item"><a class="nav-link links" href="../navbar/Register.php"><i class="fas fa-user-plus"></i> Register</a></li>
		</ul>
	</div>	
</nav>