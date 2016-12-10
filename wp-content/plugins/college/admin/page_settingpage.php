<div class="wrap">
	<form id="page-form" action="?page=Page_Settings" method="post"> <!-- please don't change the id -->
		<table class="form-table">
			<tr>
				<th>
					Page Options
				</th>
				<th>
					List of pages
				</th>
			</tr>
			<?php foreach ($page_options as $key => $value): ?>
			<tr>
				<td><strong><?php echo $value;?></strong></td>
				<td>
				<?php
					$args = array(
						'depth' => 0,
						'child_of' => 0,
						'selected' => $buzz_page_alias[$key],
						'echo' => 1,
						'name' => 'pages[' . $key . ']',
						'id' => null, // string
						'show_option_none' => null, // string
						'show_option_no_change' => null, // string
						'option_none_value' => null, // string
					);
					wp_dropdown_pages($args);
				?>
				</td>
			</tr>
			<?php endforeach;?>
		</table>
		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="pagesubmit"></p>
	</form>
		<form id="key-form" action="?page=Page_Settings" method="post"> <!-- please don't change the id -->
		<table class="form-table">
			<tr>
				<th>
					General Keys
				</th>
				<th>
					Value
				</th>
			</tr>
			

			<tr>
				<td><strong>Demo Options</strong></td>
				<td>
				<input type="text" name="demo_option" value="<?php echo get_option("demo_option");?>" style="width: 500px;">
				</td>
			</tr>
		</table>
		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="keysubmit"></p>
	</form>
</div>






