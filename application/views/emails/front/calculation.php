<?php defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.'); ?> 
<table width="650px" align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: sans-serif;">
	<tr>
		<td>
			<center><img src="{base_url}assets/uploads/files/settings/{logo}" style="width: 200px; vertical-align: bottom; border: 0;"></center><br><br>
		</td>
	</tr>
</table>

<table width="650px" align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: sans-serif;">
	<tr><td>Name</td><td><?php echo $name; ?></td></tr> 
	<tr><td>Email</td><td><?php echo $email; ?></td></tr>
	<tr><td>Telephone</td><td><?php echo $telephone; ?></td></tr>
	<tr><td>Type_male</td><td><?php echo $type_male; ?></td></tr>
	<tr><td>Type_female</td><td><?php echo $type_female; ?></td></tr>
	<tr><td>Size_male</td><td><?php echo $size_male; ?></td></tr>
	<tr><td>Size_female</td><td><?php echo $size_female; ?></td></tr>
	<tr><td>Type_stone</td><td><?php echo $type_stone; ?></td></tr>
	<tr><td>Num_stone</td><td><?php echo $num_stone; ?></td></tr>
	<tr><td>Material</td><td><?php echo $material; ?></td></tr>
	<tr><td>Color</td><td><?php echo $color; ?></td></tr>
	<tr><td>Notes</td><td><?php echo $notes; ?></td></tr>
</table>
