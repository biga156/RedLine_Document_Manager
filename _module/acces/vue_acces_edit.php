        <form method="post" action="<?=hlien("acces","edit")?>">
		<input type="hidden" name="acc_id" id="acc_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='acc_documents'>Documents</label>
                            <input id='acc_documents' name='acc_documents' type='text' size='50' value='<?=mhe($acc_documents)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='acc_user'>User</label>
                            <input id='acc_user' name='acc_user' type='text' size='50' value='<?=mhe($acc_user)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              