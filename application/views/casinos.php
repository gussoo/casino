<div class="cacha">
	<table id="productos-table" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Casino</th>
							<th>Location</th>
							<th>Opening Times</th>
							<?php if(isset($_SESSION['level'])) if($_SESSION['level'] == 1) echo '<th>Delete</th>';?>
							<?php if(isset($_SESSION['level'])) if($_SESSION['level'] == 1) echo '<th>Edit</th>';?>
						</tr>
					</thead>
					<tbody>
					<?php foreach($casinos as $fila) { ?>
						<tr>
							<td><?php echo $fila['nome'];?></td>
							<td><?php echo $fila['location'];?></td>
							<td><?php echo $fila['openingt'];?></td>
							<?php if(isset($_SESSION['level'])) if($_SESSION['level'] == 1) echo '<td><form id="delpro" name="delpro" method="post" onsubmit="return check_prod();"><input type="hidden" name="ciaoprod" value="'.$fila['id'].'" /><input type="submit" value="X" name="xprod" /></form></td>';?>
							<?php if(isset($_SESSION['level'])) if($_SESSION['level'] == 1) echo '<td><a href="/index.php/edit_casino/'.$fila['id'].'">edit</a></td>';?>
						</tr>
					<?php }?>	
					</tbody>
	</table>
</div>
