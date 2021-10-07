<?php require_once '../comfpl/main.php';
require_once 'config.php'; 
require_once 'models/userentity.php'; 
require_once 'service/userservice.php'; 
 
if($_SERVER['REQUEST_METHOD']==='POST') { 
   $login = $_POST["utilisateur_login"]; 
   $pwd = $_POST["utilisateur_pwd"]; 
   $nom = $_POST["utilisateur_nom"]; 
   $email = $_POST["utilisateur_email"]; 
   $creation= date("d/m/Y"); 
 
   $user = new UserEntity(); 
   $user->utilisateur_creation = $creation; 
   $user->utilisateur_email = $email; 
   $user->utilisateur_login = $login; 
   $user->utilisateur_nom = $nom; 
   $user->utilisateur_pwd = $pwd; 
    
   $service = new UserService(); 
   $service->adduser($user); 
} ?>
<html>

<head>
    <title>Team up - Index</title>
    <?php require_once 'phpinclude/commonmeta.php'; ?>
    <?php require_once 'phpinclude/theme.php'; ?>
    <?php FPLGlobal::render_bundle_css() ?>
    <?php FPLGlobal::render_bundle_script() ?>
</head>

<body>
    <?php require_once 'phpinclude/navbar.php'; ?>
    <form action="adduser.php" method="post">
        <input type="hidden" name="id_utilisateur" id="id_utilisateur">
        <input type="text" name="utilisateur_nom" id="utilisateur_nom">
        <input type="text" name="utilisateur_login" id="utilisateur_login">
        <input type="password" name="utilisateur_pwd" id="utilisateur_pwd">
        <input type="text" name="utilisateur_email" id="utilisateur_email">
        <input type="submit" value="Ajouter" id="cmd_adduser">
    </form>
</body>

</html>