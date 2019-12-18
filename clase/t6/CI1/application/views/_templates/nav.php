 <nav class="container navbar navbar-inverse navbar-expand-sm navbar-dark bg-dark rounded">

<a class="navbar-brand" href="<?= base_url() ?>">
<img class="img-thumbnail" src="<?= base_url() ?>assets/img/home.png" width="40px" height="50px"/>
</a>

<ul class="nav navbar-nav mr-auto">
    <li class="nav-item dropdown">
    <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#">Persona</a>
    	<div class="dropdown-menu ">
    	<a class="dropdown-item" href="<?= base_url() ?>persona/create">crear</a>
    	<a class="dropdown-item" href="<?= base_url() ?>persona">consultar</a>
    	</div>
    </li>
    
    
    
    <li class="nav-item dropdown">
    <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#">Pais</a>
    	<div class="dropdown-menu">
    	<a class="dropdown-item" href="<?= base_url() ?>pais/create">crear</a>
    	<a class="dropdown-item" href="<?= base_url() ?>pais">consultar</a>
    	</div>
    </li>
    
    
    
    <li class="nav-item dropdown">
    <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#">Aficion</a>
    	<div class="dropdown-menu">
    	<a class="dropdown-item" href="<?= base_url() ?>aficion/create">crear</a>
    	<a class="dropdown-item" href="<?= base_url() ?>aficion">consultar</a>
    	</div>
    </li>



</ul>
</nav> 

<!-- <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>-->
  
  <!-- As a heading -->
  <!--<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </nav>-->