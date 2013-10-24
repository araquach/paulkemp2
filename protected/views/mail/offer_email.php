<?php if($model->gender == 'm'): ?>
<?php echo 'Voucher for ' . ucfirst($model->first_name) . ' ' . ucfirst($model->last_name) .': 40% off your next visit plus men\'s cut & style fixed at £18 until March 2014'?>	
<?php else: ?>
	<?php if ($model->last_stylist == 'Megan Mullaney' or $model->last_stylist == 'Natasha Bailey' or 
	$model->last_stylist == 'Jack Broady' or $model->last_stylist == 'Leon Pritchard' or $model->last_stylist == 'Nathan Hinds'): ?>
	<?php echo 'Voucher for ' . ucfirst($model->first_name) . ' ' . ucfirst($model->last_name) . ': 40% off your next visit plus fixed prices on Colour & Cut package at £65, Cut, Dry & Style at £30, Dry & Style at £20 with Meg, Tash, Jack or Leon until March 2014' ?>
	<?php else: ?>
	<?php echo 'Voucher for ' . ucfirst($model->first_name) . ' ' . ucfirst($model->last_name) . ': 40% off your next visit plus fixed prices on Colour & Cut package at £80, Cut, Dry & Style at £35, Dry & Style at £25 with Kellie, Izzy, Jo, Michelle or Kate' ?>
	<?php endif; ?>
<?php endif; ?>