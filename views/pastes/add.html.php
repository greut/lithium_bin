<h2>Let there be paste!</h2>

<form method="POST">
	
	<div class="section paste-content">
		<div class="input textarea">
			<textarea name="Paste[content]" rows="15"><?=@$paste->content;?></textarea>
		</div>
		<?=@(isset($paste->errors['content'])) ?
			'<p class="error">'.$paste->errors['content'].'</p>' : null;
		?>
	</div>
	
	<div class="section paste-meta">
		<label for="Paste[author]">Name/Nick</label>
		<input type="text" name="Paste[author]" value="<?=@$paste->author;?>" />
		<?=@(isset($paste->errors['author'])) ?
			'<p class="error">'.$paste->errors['author'].'</p>' : null;
		?>
		<small>
		<input type="hidden" name="Paste[remember]" value="0" />
		<input type="checkbox" id="Paste.remember" value="1"
			<?=($paste->remember) ? 'checked=checked' : null;?> name="Paste[remember]" /> &nbsp;
		<label for="Paste.remember">Remember me</label>
		</small>

		<label for="Paste.language">Language</label>
		<select id="Paste.language" name="Paste[language]" value="">
		<?php
			foreach ($languages as $lang) {
				if ($lang == $paste->language) {
					echo "<option selected='selected' value='{$lang}'>{$lang}</option>";
				} else {
					echo "<option value='{$lang}'>{$lang}</option>";
				}
			}
		?>
		</select>
		<?=@(isset($paste->errors['language'])) ?
			'<p class="error">'.$paste->errors['language'].'</p>' : null;
		?>
		<small>
		<input type="hidden" name="Paste[permanent]" value="0" />
		<input type="checkbox" id="Paste.permanent" value="1"
			<?=($paste->permanent) ? 'checked=checked' : null;?> name="Paste[permanent]" /> &nbsp;
		<label for="Paste.permanent">Save this paste</label>
		</small>
		
	</div>
	
	<div class="section submit">
		<input type="submit" />
	</div>
	
</form>
