<?php $this->layout('layout', ['title' => 'Tous les termes']) ?>

<?php $this->start('main_content') ?>
	<h2>Tous les termes.</h2>

	<table>
		
	<?php foreach($terms as $term): ?>
	<tr>
	<td><?php echo $term['name'] ?><br /></td>
	<td><?php echo $term['modifiedDate'] ?></td>
	</tr>
	<?php endforeach;  ?>
	</table>
	**afficher les termes ici**
	
<?php $this->stop('main_content') ?>
