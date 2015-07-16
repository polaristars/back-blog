<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" >
	<meta name="description" content="page de login" />
	<title>MVC_Blog</title>
</head>
<body>
<?php
if ($this->Session->read('Auth.User.id') != null) {

?>
	<div class="you">
		<h1><?php  echo $this->Session->read('Auth.User.username'); ?></h1>
			<?php echo $this->Html->link("Deconnexion", array('action' => 'logout', 'controller' => 'Users' ));?>
	</div>
<?php
} else {
?>
	<div class="connec">
		<h2>Connection</h2>
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('username', array('label' => "Nom d’utilisateur :")); ?>
			<?php echo $this->Form->input('password', array('label' => "Mot de passe")); ?>
			<?php echo $this->Form->end("connexion"); ?>

	</div>
			<?php
			}
			?>
</body>
</html>