<?php 
	$exploded = explode(" ", $search);
	$imploded = implode(", ", $exploded);
?>

<h4>Search results for the <i>"<?php echo $search; ?>"</i> phrase and for <i><?php echo $imploded;?></i> words</h4>

<?php if(count($results) == 0) : ?>

	<p>No search result(s) found.</p>

<?php else : ?>

	<?php foreach($results as $row) : ?>
		<div>
			<?php echo $row->title; ?>
			<?php echo $row->date; ?>
			<?php echo $row->content; ?>
		</div>
	<?php endforeach; ?>

<?php endif; ?>