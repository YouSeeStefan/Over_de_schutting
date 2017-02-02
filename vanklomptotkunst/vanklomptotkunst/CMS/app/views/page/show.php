<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (!$page): ?>
		<p>No page found, sorry.</p>
	<?php else: ?>

		<h2><?php echo $page['title']; ?></h2>
		<p><?php echo $page['body']; ?></p>

	<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>