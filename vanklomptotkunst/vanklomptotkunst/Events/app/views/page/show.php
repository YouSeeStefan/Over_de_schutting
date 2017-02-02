<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (!$event): ?>
		<p>No event found, sorry.</p>
	<?php else: ?>

		<h2><?php echo $event['title']; ?></h2>
		<p><?php echo $event['body']; ?></p>

	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>