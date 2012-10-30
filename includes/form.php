<div id="generator">	
					<form action="" method="post">
						<fieldset>

							<label for="db">Database Name</label>
							<input type="text" name="db" value="" />
							<hr class="clear" />
							<label for="table">Table Name</label>
							<input type="text" name="table" value="" />
							<hr class="clear" />
							<label for="key_1_name">Field Name (Key 1)</label>
							<input type="text" name="key_1_name" value="" />	
							<hr class="clear" />
							<label for="key_2_name">Field Name (Key 2)</label>
							<input type="text" name="key_2_name" value="" />		

						</fieldset>

						<fieldset>
							<legend>Key 1 (auto generated)</legend>

							<label for="from">Generate From</label>
							<input type="text" name="from" value="" />	

							<label for="to">Generate To</label>
							<input type="text" name="to" value="" />

						</fieldset>

						<fieldset>
							<legend>Key 2 (manual)</legend>

							<label for="key_2_values">Value</label>
							<input type="text" name="key_2_values[]" value="" />	

						</fieldset>

						<fieldset>
							<input type="submit" value="generate" />
						</fieldset>

					</form>
				</div>