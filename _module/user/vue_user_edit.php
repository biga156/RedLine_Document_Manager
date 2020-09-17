<form method="post" action="<?= hlien("user", "edit") ?>">
            <input type="hidden" name="use_id" id="use_id" value="<?= $id ?>" />
            <div class='form-group'>
                <label for='use_nom'>Nom</label>
                <input id='use_nom' name='use_nom' type='text' size='50' value='<?= mhe($use_nom) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='use_prenom'>Prenom</label>
                <input id='use_prenom' name='use_prenom' type='text' size='50' value='<?= mhe($use_prenom) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='use_email'>Email</label>
                <input id='use_email' name='use_email' type='email' size='50' value='<?= mhe($use_email) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='use_username'>Username</label>
                <input id='use_username' name='use_username' type='text' size='50' value='<?= mhe($use_username) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='use_passw'>Passw</label>
                <input id='use_passw' name='use_passw' type='password' size='50' placeholder='Enter password class='form-control' />
            </div>
            <?php if($_SESSION['profil']==1){ ?>
            <div class='form-group'>
                <label for='use_profil'>Profil</label>
                <select class='form-control' id='use_profil' name='use_profil'>
                    <?= Entity::HTMLselect("select * from profil", "pro_id", "pro_nom", $use_profil) ?>
                </select>
            </div>
            <?php } else { ?>
                
                <input id='use_profil' name='use_profil' type='hidden'  value='<?= mhe($use_profil) ?>' class='form-control' />
          <?php  } ?>
            <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
        </form>