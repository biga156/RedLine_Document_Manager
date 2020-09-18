<?php
	//	$doc_validation=date('Y-m-d');
	var_dump($_GET);
	?>
      
      <form method="post" action="<?= hlien("documents", "edit") ?>">
            <input type="hidden" name="doc_id" id="doc_id" value="<?= $id ?>" />
            <div class='form-group'>
                <label for='doc_label'>Label</label>
                <input id='doc_label' name='doc_label' type='text' size='50' value='<?= mhe($doc_label) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='doc_note'>Note</label>
                <input id='doc_note' name='doc_note' type='text' size='50' value='<?= mhe($doc_note) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                
                <label for='doc_audio_src'>Audio_src</label>
                <input id='doc_audio_src' name='doc_audio_src' type='file' size='50' value='<?= mhe($doc_audio_src) ?>' class='form-control' />
            </div>
            <div >
                <label for='doc_date'>Date:  </label>
                <p><?= date('Y/m/d H:i') ?></p>
                <input id='doc_date'  name='doc_date' type='hidden' value='<?= date('Y/m/d H:i') ?>' class='form-control' />
            </div>
                <?php if($_GET['id']>0){ ?>
                    <div>
                    <label for='doc_validation'>Validation</label>
                    <input id='doc_validation' name='doc_validation' type='date' value='<?= mhe($doc_validation) ?>' class='form-control' />    
                </div>
                <?php } else { ?>
            <div >
                <label for='doc_validation'>Validation</label>
              <input id='validation' name='validation' type='checkbox' checked='ckecked' size='50' value='On' onchange='afficherFormulaire()'/>
            </div>
            <div >
                <input id='doc_validation' name='doc_validation' type='date' value='<?=date('Y-m-d') ?>' class='form-control' />
            </div>
                <?php } ?>
            <div class='form-group'>
                <label for='doc_private'>Private</label>
                <input id='doc_private' name='doc_private' type='checkbox' size='50' value='On' />
            </div>
          
           <?php if($_SESSION['profil']==1) { ?>
            <div class='form-group'>
                <label for='doc_user'>User</label>
                <select class='form-control' id='doc_user' name='doc_user'>
                    <?= Entity::HTMLselect("select * from user", "use_id", "use_username", $use_username) ?>
                </select>
            </div>
           <?php } else { ?>
            <input type="hidden" name="doc_user" id="doc_user" value="<?= $_SESSION['use_id'] ?>" />
           <?php } ?>
            <p><a class="btn btn-primary" href="<?=hlien("files","edit","id",0)?>">Add files</a></p>
            <input class="btn btn-success" type="submit" name="btSubmit" value="Save" />
        </form>

        <script>
            $("#doc_validation").show();
            function afficherFormulaire() {
			$("#doc_validation").toggle();
			
		}
        </script>