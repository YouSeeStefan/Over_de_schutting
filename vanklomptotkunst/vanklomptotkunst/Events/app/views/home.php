<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <?php if  (empty($events)):?>
      	<p>sorry er is hier niks!!</p>
	<?php else: ?>
	    <ul>
	        <?php foreach($events as $event): ?>
	        <li><a href="<?php echo BASE_URL; ?>event.php?event=<?php echo $event['slug']; ?>"><?php echo $event['label']; ?></a></li>
	        <?php endforeach; ?>
	    </ul>
	<?php endif;?>
	
<?php require VIEW_ROOT . '/templates/footer.php'; ?>