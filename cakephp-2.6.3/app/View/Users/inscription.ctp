<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" >
	<meta name="description" content="page d'inscription'" />
	<title>MVC_Blog</title>
</head>
<body>
	<h1>Inscription</h1>
		<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('username', array('label' => "Nom d’utilisateur :")); ?>
		<?php echo $this->Form->input('password', array('label' => "Mot de passe")); ?>
		<?php echo $this->Form->input('name', array('label' => "Nom :")); ?>
		<?php echo $this->Form->input('lastname', array('label' => "Prénom")); ?>
		<?php echo $this->Form->input('birthdate', array('label' => "Date de naissance :")); ?>
		<?php echo $this->Form->input('email', array('label' => "E-mail :")); ?>
		<?php echo $this->Form->end("S'inscrire"); ?>
</body>
</html>