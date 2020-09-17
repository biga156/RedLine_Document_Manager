        <form method="post" action="<?=hlien("search","edit")?>">
		<input type="hidden" name="sea_id" id="sea_id" value="<?= $id ?>" />
                      
        <div class='form-group'>
                <label for='sea_documents'>Add for document:</label>
                <select class='form-control' id='sea_documents' name='sea_documents' >
                    <?= Entity::HTMLselect("select * from documents", "doc_id", "doc_label", $_GET['id']) ?>
                </select>
            </div>
            <div class='form-group'>
                <label for='sea_keywordss'>Keyword list:</label>
                <select class='form-control' id='sea_keywords' name='sea_keywords' >
                    <?= Entity::HTMLselect("select * from keywords", "key_id", "key_label",0) ?>
                </select>
                <p><a class="btn btn-primary" href="<?=hlien("keywords","edit","id",0)?>">New keyword</a></p>
            </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              