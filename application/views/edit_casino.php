	<div class="cacha">
		<h2>Edit Casino</h2>
		<form method="post" id="newpro" name="newpro" onsubmit="return check_pro();">
			<table>
				<tr>
					<td>Name*:</td>
					<td><input type="text" name="nombre" id="nombre" value="<?php echo $casino[0]['nome'];?>" /></td>
				</tr>
				<tr>
					<td>Opening Times:</td>
					<td><input type="text" name="opent" id="opent" value="<?php echo $casino[0]['openingt'];?>" /></td>
				</tr>
				<tr>
					<td>Location*:</td>
					<td><textarea name="location" id="location"><?php echo $casino[0]['location'];?></textarea>
						<input type="hidden" name="id" id="id" value="<?php echo $casino[0]['id'];?>" />
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="edit" value="Edit" /></td>
				</tr>
			</table>
		</form>
	</div>

