<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($events)): ?>
		<p>No events at the moment.</p>
	<?php else: ?>
		<table>
			<thead>
				<tr>
					<th>Label</th>
					<th>Title</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($events as $event): ?>
					<tr>
						<td><?php echo e($event['id']); ?></td>
						<td><?php echo e($event['label']); ?></td>
						<td><?php echo e($event['title']); ?></td>
						<td><a href="<?php echo BASE_URL; ?>/event.php?event=<?php echo e($event['slug']); ?>"><?php echo e($event['slug']); ?></a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($event['id']); ?>">Edit</a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($event['id']); ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>admin/add.php">Add event</a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>