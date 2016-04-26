<div class="column" id="nav">
	<ul>
		<li><a href="/index.php/">Home</a></li>
		<li><a href="/index.php/casinos">Casinos</a></li>
		<?php if(isset($_SESSION['level'])) if($_SESSION['level'] == 1) echo '<li><a href="/index.php/new_casino">CREATE Casino</a></li>'; ?>
		<li><a href="/index.php/map">Map</a></li>
	</ul>
</div>
