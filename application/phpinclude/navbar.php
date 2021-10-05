<?php

// menu (seconde version)
$menu_json = file_get_contents("menu.json", FILE_USE_INCLUDE_PATH);
$menu = json_decode($menu_json, NULL, 100, JSON_OBJECT_AS_ARRAY);
?>
<!-- navbar & menu -->
<nav class="navbar navbar-expand-lg navbar-light nbar">
	<a class="navbar-brand" href="#"><img src="<?php echo FPLGlobal::get_theme_uri() ?>/images/logo1-small.png"></a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<?php for ($m = 0; $m < count($menu); $m++) { ?>
				<li class="nav-item<?php echo $m == 0 ? " active" : "" ?>"><a class="nav-link" href="<?php
																										echo $menu[$m]["route"];
																										?>">
						<div class="col text-center">
							<img src="<?php
										echo FPLGlobal::get_theme_uri() . "/images/" . $menu[$m]["icon"] . ".png" ?>" class="img-fluid">
						</div>
						<div><?php
								echo $menu[$m]["label"];
								?><?php

									echo $m == 0 ? "<span class=\"sr-only\">(current)</span>" : "";
									?></div>
					</a></li>
			<?php } ?>
			<!-- menu statiques -->
			<!-- 		<li class="nav-item active"><a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
 			<li class="nav-item"><a class="nav-link" href="#">T&acirc;ches</a></li>
 			<li class="nav-item"><a class="nav-link" href="#">Agenda &amp; planning</a></li>
 			<li class="nav-item"><a class="nav-link" href="#" tabindex="-1">Messages</a></li>
 			<li class="nav-item"><a class="nav-link" href="#" tabindex="-1">Discussions</a></li> -->
		</ul>
		<div>
			<div class="col text-center">
				<img src="<?php
							echo FPLGlobal::get_theme_uri() . "/images/user.png" ?>" class="img-fluid">
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php
																									echo FPLGlobal::get_user_identity()->is_authenticated ? FPLGlobal::get_user_identity()->display_name : "Vous" ?><span class="caret"></span></a>
						<?php require_once 'formlogin.php'; ?>
					</li>
				</ul>
			</div>
		</div>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
		</form>
		<form class="form-inline my-2 my-lg-0" action="index.php" method="post">
			<select id="lst_theme" name="lst_theme" class="form-control" onchange="this.form.submit()">
				<option value="0">Th&egrave;me</option>
				<option value="1" <?php echo isset($theme) && $theme == "1" ? " 
selected" : "" ?>>Clair</option>
				<option value="2" <?php echo isset($theme) && $theme == "2" ? " 
selected" : "" ?>>Fonc&eacute;</option>
			</select>
		</form>
	</div>
</nav>