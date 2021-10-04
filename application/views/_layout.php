<?php require_once '../comfpl/main.php';
require_once 'config.php'; ?>
<html> 
<head> 
<title>Team up - Index</title> 
<?php require_once 'phpinclude/commonmeta.php';?> 
<?php require_once 'phpinclude/theme.php';?> 
<?php FPLGlobal::render_bundle_css()?>  
<?php FPLGlobal::render_bundle_script()?> 
</head> 
<body> 
<?php require_once 'phpinclude/navbar.php';?> 
    <h2>Bienvenue dans Team Up</h2> 
    <h2>Page application</h2> 
    <!-- ce code sera d�plac� dans la vue home/index -->
	<div class="container-fluid">
		<div class="row">
			<div class="col">&nbsp;</div>
		</div>
	</div>
	
	<!-- contenu principal statique -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<div class="card">
					<img class="card-img-top" src="<?php 
			         echo FPLGlobal::get_theme_uri()."/images/homeuser.png"?>"/>
					<div class="text-center">Leonel Binique</div>
					<div class="card container">
						<div class="row">
							<div class="col-8"><small>A&nbsp;faire</small></div>
							<div class="col"><small>8</small></div>
						</div>
						
						<div class="row">
							<div class="col-8"><small>En&nbsp;cours</small></div>
							<div class="col"><small>2</small></div>
						</div>
						
						<div class="row">
							<div class="col-8"><small>Posts</small></div>
							<div class="col"><small>10</small></div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-5">
				<div class="card">
					<table class="table">
						<tr>
							<td><a href="" class="btn btn-primary"><small>Post</small></a></td>
							<td><a href="" class="btn btn-outline-primary"><small>Photo</small></a></td>
							<td><a href="" class="btn btn-outline-primary"><small>Vid&eacute;o</small></a></td>
							<td><a href="" class="btn btn-outline-primary"><small>Doc</small></a></td>
						</tr>
					</table>
				</div>
				
				<div>&nbsp;</div>
							
				<div class="card">
					Activite et messages
				</div>
			</div>
			
			<div class="col-2">
				<div class="card">
					<div class="card">
					<img class="card-img-top" src="<?php 
			         echo FPLGlobal::get_theme_uri()."/images/trackproject.png"?>"/>
					<div class="text-center">Projets suivis</div>
					<div class="card container">
						<div class="row">
							<div class="col"><div class="card bg-light"><small>Projet 1</small></div></div>
						</div>
						
						<div class="row">
							<div class="col"><div class="card bg-light"><small>Projet 2</small></div></div>
						</div>						
					</div>
				</div>
				</div>
			</div>
			
		</div>
	</div>
</body> 
</html>