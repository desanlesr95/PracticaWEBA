<!-- sidebar menu -->
<?php session_start(); ?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
	  <h3>MENU</h3>
	  <ul class="nav side-menu">
		<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
		  <ul class="nav child_menu" style="display: none">
			<li onclick="menu(101);">Nuevo usuario</li>
			<li onclick="menu(102);">Lista de usuarios</li>
			<li onclick="menu(103);">Grafica de usuarios</li>
		  </ul>
		</li>
	  </ul>
	</div>
	

	<div class="menu_section">
	  <ul class="nav side-menu">
		<li><a><i class="fa fa-home"></i> Solicitudes <span class="fa fa-chevron-down"></span></a>
		  <ul class="nav child_menu" style="display: none">
		  <?php 
			 if($_SESSION['id_rol']==103){
		  ?>
			<li onclick="menu(201);">Nueva solicitud</li>
			<?php 
			 }
			?>
			<li onclick="menu(202);">Lista de solicitudes</li>
		  </ul>
		</li>
	  </ul>
	</div>
</div>
<!-- /sidebar menu -->
