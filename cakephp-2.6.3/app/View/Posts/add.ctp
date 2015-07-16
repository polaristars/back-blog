<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" >
	<meta name="description" content="page ajout" />
	<title>MVC_Blog</title>
</head>
<body>
	<h1><?php  echo $this->Session->read('Auth.User.username'); ?></h1>
		<?php echo $this->Html->link("Deconnexion", array('action' => 'logout', 'controller' => 'Users' ));?>

	<h2>Ajout de billet</h2>
		<?php echo $this->Form->create('Post'); ?>
		<?php echo $this->Form->input('title', array('label' => "Titre :")); ?>
		<?php echo $this->Form->input('content', array('label' => "Contenu :")); ?>
		<?php echo $this->Form->input('tags', array('label' => "Tags :")); ?>
		<?php echo $this->Form->end("Valider"); ?>
		<?php echo $this->Html->link("Retour", array('action' => 'index', 'controller' => 'Posts' ));?>
</body>
</html>