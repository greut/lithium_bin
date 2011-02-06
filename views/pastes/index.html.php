<?php
$truncate = function($string, $length = 50) {
	return strlen($string) > $length ? substr($string, 0, $length) . '…' : $string;
}
?>
<h2>Latest</h2>
<?php if ($latest->count()): ?>
<table class="pastes">
	<tr>
		<th>Id</th>
		<th>Preview</th>
		<th>Author</th>
		<th>Created</th>
	</tr>
	<tbody>
	<?php foreach ($latest as $key => $row): ?>
		<tr class="<?=($key % 2) ? 'del1' : 'del2'; ?>">
			<td class="<?=$row->language; ?>" title="<?=$row->language; ?>">
				<?php echo $this->html->link(
					$truncate($row->id, 12), '/view/' . $row->id);
				?>
			</td>
			<td class="preview"><?= $truncate($row->content); ?></td>
			<td><?=$row->author; ?></td>
			<td><?php echo date('Y-m-d H:i', strtotime($row->created)); ?></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
<?php else: ?>
	<p class="none-available">No pastes available.</p>
<?php endif; ?>