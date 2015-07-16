<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" >
	<meta name="description" content="page de view" />
	<title>MVC_Blog</title>
</head>
<body>
	<h1><?php  echo $this->Session->read('Auth.User.username'); ?></h1>
		<?php echo $this->Html->link("Deconnexion", array('action' => 'logout', 'controller' => 'Users' ));?>

	<h2><?php echo h($post['Post']['title']); ?></h2>
	<p>Créé le : <?php echo $post['Post']['created']; ?></p>
	<p><?php echo h($post['Post']['content']); ?></p>
	   <?php echo $this->Html->link("Retour", array('action' => 'index', 'controller' => 'Posts' ));?>

	<h3>Commentaires : (pour commenter vous aussi, rendez-vous sur votre bouton 'commenter')</h3>

<?php

 foreach ($post['Comment'] as $comment) {


?>
	<p>Créé le : <?php echo $comment['created']; ?></p>
	<p>Par : <?php echo $post['User']['username']; ?></p>
	<p><?php echo $comment['content']; ?></p>
<?php } ?>
</body>
</html>