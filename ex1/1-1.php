
<?php
	$i = 1;
	$s = "строка";
	$f = 9.71;
	$b = false;
	$n = NULL;
?>
<table>
	<tr>
		<td>Переменная</td>
		<td>
			<?php echo "\$i"; ?>
		</td>
		<td>
			<?php echo "\$s"; ?>
		</td>
		<td>
			<?php echo "\$f"; ?>
		</td>
		<td>
			<?php echo "\$b"; ?>
		</td>
		<td>
			<?php echo "\$n"; ?>
		</td>
	</tr>
	<tr>
		<td>Значение</td>
		<td>
			<?php echo " $i"; ?>
		</td>
		<td>
			<?php echo " $s"; ?>
		</td>
		<td>
			<?php echo " $f"; ?>
		</td>
		<td>
			<?php echo " $b"; ?>
		</td>
		<td>
			<?php echo " $n"; ?>
		</td>
	</tr>
	<?php
		$i = gettype($i);
		$s = gettype($s);
		$f = gettype($f);
		$b = gettype($b);
		$n = gettype($n);
	?>
	<tr>
		<td>Тип данных</td>
		<td>
			<?php echo " $i"; ?>
		</td>
		<td>
			<?php echo " $s"; ?>
		</td>
		<td>
			<?php echo " $f"; ?>
		</td>
		<td>
			<?php echo " $b"; ?>
		</td>
		<td>
			<?php echo " $n"; ?>
		</td>
	</tr>
</table>