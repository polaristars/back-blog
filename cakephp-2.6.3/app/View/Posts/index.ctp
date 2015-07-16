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
	<h2>Les posts :)</h2>
<table>
	<tr>
		<th>Titre</th>
		<th>Crée le</th>
		<th>Mise à jour le</th>
		<th>Auteur</th>
		<th>Modif'</th>
	</tr>
	<?php foreach ($posts as $posts) :?>
	<tr>
	<td> <?php echo $this->Html->link($posts['Post']['title'], array('controller' => 'posts', 'action' => 'view', $posts['Post']['id']));?> </td>
	<td> <?php echo $posts['Post']['created'];?> </td>
	<td> <?php echo $posts['Post']['updated'];?> </td>
	<td> <?php echo $posts['User']['username'];?> </td>
	<?php if ($this->Session->read('Auth.User.id') == 1 || $this->Session->read('Auth.User.id') == $posts['Post']['user_id']) {?>
	<td> <?php echo $this->Form->postLink('Supprimer', array('action' => 'delete', $posts['Post']['id']), array('confirm' => 'Etes-vous certain ?')); ?>
            <?php echo $this->Html->link('Editer', array('action' => 'edit', $posts['Post']['id'])); ?></td>
	<?php } else {?>
	<td>Vous ne pouvez modifier ce qui ne vous appartiens pas.</td>
	<?php } ?>
	<td><?php echo $this->Html->link('Commenter', array('controller' => 'comments', 'action' => 'comments', $posts['Post']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($posts);?>
</table>
	<?php echo $this->Html->link('Ajouter un truc nouveau', 'add', array('class' => 'button')); ?>
</body>
</html>