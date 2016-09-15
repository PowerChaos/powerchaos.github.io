<?php
if (u())
{
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="../home">Manu Projects</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">uren
			<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../registreer">Registreer</a></li>
					<li><a href="../overzicht">Overzicht</a></li>						
				</ul>
			</li>
      </ul>
		<div class="col-sm-3 col-md-3">
			<form class="navbar-form" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="q">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>
		</div>
      <ul class="nav navbar-nav navbar-right">
	  	  	  <?php
	  if ((s()) && (!isset($_SESSION[admin])))
	  {
?>		
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Staff Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">Nog Niets</a></li>		  
        </ul>
      </li>
<?php		
	  }
	  ?>
	  	  <?php
	  if (a())
	  {
		  
?>					
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">					
		<li><a href="../a/gebruikers">Gebruikers</a></li>
        </ul>
      </li>
<?php		
	  }
	  ?>
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['naam'] ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../pass">wachtwoord</a></li>
          <li><a href="../logout">Log Uit</a></li> 
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
	<!-- Dynamic SiteBar -->
<nav class="navbar navbar-inverse navbar-fixed-left">

	<ul id="tree1">
	<!-- HoofdCategory -->
		<li><a href="#">TECH</a>
	<!-- HoofdCategory -->	
			<ul>
	<!-- SubCategory -->		
				<li>Company Maintenance</li>
				<li>Employees
	<!-- SubCategory -->			
					<ul>
	<!--Posts -->				
								<li>Report1</li>
								<li>Report2</li>
								<li>Report3</li>
	<!--Posts -->							
							</ul>
						</li>
	<!-- SubCategory -->					
				<li>Human Resources</li>
	<!-- SubCategory -->			
			</ul>
		</li>
	<!-- HoofdCategory -->	
		<li>XRP</li>
	<!-- HoofdCategory -->	
	</ul>			
</nav>
	<!-- Dynamic SiteBar -->
<?php
}
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
			<div class="container content">