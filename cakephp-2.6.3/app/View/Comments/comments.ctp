<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" >
	<meta name="description" content="page de commentaires" />
	<title>MVC_Blog</title>
</head>
<body>
	<h1><?php  echo $this->Session->read('Auth.User.username'); ?></h1>
		<?php echo $this->Html->link("Deconnexion", array('action' => 'logout', 'controller' => 'Users' ));?>
		<?php echo $this->Html->link("Retour", array('action' => 'index', 'controller' => 'Posts' ));?>

	<h3>Commentaires :</h3>
<?php foreach ($comments as $comment) {
?>
	<p>Créé le : <?php echo $comment['Comment']['created']; ?></p>
	<p>Par : <?php echo h($comment['User']['username']); ?></p>
	<p><?php echo h($comment['Comment']['content']); ?></p>
<?php }?>

	<?php echo $this->Form->create('Comment'); ?>
	<?php echo $this->Form->input('content', array('label' => "Ecrivez quelque chose :")); ?>
	<?php echo $this->Form->end("valider"); ?>
</body>
</html>