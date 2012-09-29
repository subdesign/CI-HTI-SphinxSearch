<?php
	echo form_open('sphinxsearch/search', array('class' => 'form-search'));
	echo '<div class="input-append">';
	echo form_input(array('name' => 'search', 'class' => 'search-query'));
	echo '<button type="submit" class="btn">Go</button>';
	echo '</div>';
	echo form_close();
?>