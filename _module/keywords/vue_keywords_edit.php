        <form method="post" action="<?=hlien("keywords","edit")?>">
		<input type="hidden" name="key_id" id="key_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='key_label'>New keyword</label>
                            <input id='key_label' name='key_label' type='text' size='50' value='<?=mhe($key_label)?>'  placeholder='Insert here the new keyword' class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              