 <nav class="container navbar navbar-inverse navbar-expand-sm navbar-dark bg-dark rounded">

<a class="navbar-brand" href="<?= base_url() ?>">
<img class="img-thumbnail" src="<?= base_url() ?>assets/img/home.png" width="40px" height="50px"/>
</a>

<ul class="nav navbar-nav mr-auto">
    <li class="nav-item active dropdown">
    <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#">Users</a>
    	<div class="dropdown-menu ">
    	<a class="dropdown-item" href="<?= base_url() ?>hdu/authenticated/see">Chat with others</a>
    	</div>
    </li>
    
    
    
    <li class="nav-item active dropdown">
    <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#">countries</a>
    	<div class="dropdown-menu">
    	<a class="dropdown-item" href="<?= base_url() ?>pais/create">create</a>
    	<a class="dropdown-item" href="<?= base_url() ?>pais">see</a>
    	</div>
    </li>
    
    
    
    <li class="nav-item active dropdown">
    <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#">hobbies</a>
    	<div class="dropdown-menu">
    	<a class="dropdown-item" href="<?= base_url() ?>aficion/create">create</a>
    	<a class="dropdown-item" href="<?= base_url() ?>aficion">see</a>
    	</div>
    </li>

	<li class="nav-item active dropdown ">
	<a class="navbar-brand " href="<?= base_url(); ?>upload">upload file</a>
	</li>
	</ul>
	<?php if ( (!isset($_SESSION['_user'])) || ($_SESSION['_user']=='guest')  ):?>
	
	<ul class="nav navbar-nav navbar-right">
	
	<li class="nav-item active dropdown">
	<a class="navbar-brand" href="<?= base_url() ?>hdu/anonymous/signIn">sign in</a>
	</li>
	
	<li class="nav-item active dropdown">
	<a class="navbar-brand" href="<?= base_url() ?>hdu/anonymous/signUp">sign up</a>
	</li>
	
	</ul>
	
	<?php elseif ( isset($_SESSION['_user']) && $_SESSION['_user']!='guest' ):?>
	
	<a class="navbar-brand navbar-right" href="<?=base_url()?>hdu/authenticated/logout"><button>Logout</button></a>
	
	<a class="navbar-brand navbar-right" href="<?= base_url() ?>hdu/authenticated/signed">
	<img class="img-circle" src="<?= base_url() ?>assets/img/user.png" alt="usuario" width="40px"/>
	</a>
	
	
	
	<?php endif;?>


</nav> 

<!-- <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>-->
  
  <!-- As a heading -->
  <!--<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </nav>-->