<?php
	include("dadosEstados.php");
	asort($estado);
?>
<table border="1">
	<th>SIGLA</th>
	<th>ESTADO</th>
	<?php
	foreach ($estado as $sigla => $descricao) {
		/*echo "<tr><td>".$sigla."</td>";
		echo "<td>".$descricao."</td></tr>";*/
		?>
		<tr>
			<td><?php echo $sigla; ?></td>	
			<td><?php echo $descricao; ?></td>
		</tr>
		<?php
	}
	?>
</table>
<p>Foram encontrados <?=count($estado);?> registros.</p>
<select>
	<?php
		foreach ($estado as $sigla => $descricao) {
			echo "<option value=" . $sigla . ">" . $descricao ."</option>";
		}
	?>
</select>
<?php
		foreach ($estado as $sigla => $descricao) {
			echo "<br>
			<input 
			type=checkbox 
			name=". $sigla ." 
			value =". $descricao . ">" . $descricao;
		}
?>
<ul>
	<?php
		foreach ($estado as $sigla => $descricao) 
			echo "<li>" . $sigla . " - " .$descricao. "</li>";
	?>
</ul>