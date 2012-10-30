<div id="generator">	
					<form action="" method="post">
						<fieldset>

							<label for="db">Database Name</label>
							<input type="text" class="text" name="db" value="" />
							<hr class="clear" />
							<label for="table">Table Name</label>
							<input type="text" class="text" name="table" value="" />
							<hr class="clear" />
							<label for="key_1_name">Field Name (Key 1)</label>
							<input type="text" class="text" name="key_1_name" value="" />	
							<hr class="clear" />
							<label for="key_2_name">Field Name (Key 2)</label>
							<input type="text" class="text" name="key_2_name" value="" />		
							<hr class="clear" />
						</fieldset>

						<fieldset>
							<label for="from">Auto-generate From</label>
							<input type="text" class="text" name="from" value="" />	
							<hr class="clear" />
							<label for="to">Auto-generate To</label>
							<input type="text" class="text" name="to" value="" />
							<hr class="clear" />
						</fieldset>

						<fieldset>
							<label for="key_2_values">Relationship Value 1</label>
							<input type="text" class="text" name="key_2_values[]" value="" />	
							<hr class="clear" />
							<label for="key_2_values">Relationship Value 2</label>
							<input type="text" class="text" name="key_2_values[]" value="" />	
							<hr class="clear" />
							<label for="key_2_values">Relationship Value 3</label>
							<input type="text" class="text" name="key_2_values[]" value="" />	
							<hr class="clear" />
						</fieldset>

						<fieldset>
							<input type="submit" class="submit" value="Generate" />
						</fieldset>

					</form>
				</div>