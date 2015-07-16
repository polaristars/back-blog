<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" >
	<meta name="description" content="page edit" />
	<title>MVC_Blog</title>
</head>
<body>
	<h1><?php  echo $this->Session->read('Auth.User.username'); ?></h1>
		<?php echo $this->Html->link("Deconnexion", array('action' => 'logout', 'controller' => 'Users' ));?>

	<h2>Edition du billet</h2>
		<?php echo $this->Form->create('Post'); ?>
		<?php echo $this->Form->input('title'); ?>
		<?php echo $this->Form->input('content', array('rows' => '3')); ?>
		<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
		<?php echo $this->Form->end('Sauvegarde'); ?>
		<?php echo $this->Html->link("Retour", array('action' => 'index', 'controller' => 'Posts' ));?>
</body>
</html>