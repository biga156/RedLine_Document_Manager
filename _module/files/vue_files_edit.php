        <form method="post" enctype="multipart/form-data" action="<?= hlien("files", "edit") ?>">
            <input type="hidden" name="fil_id" id="fil_id" value="<?= $id ?>" />
            <div class='form-group'>
                <label for='fil_name'></label>
                <input id='fil_name' name='fil_name' type='hidden' size='50' value='<?= mhe($fil_name) ?>' class='form-control' />
                          
                <label for='fil_extension'></label>
                <input id='fil_extension' name='fil_extension' type='hidden' size='50' value='<?= mhe($fil_extension) ?>' class='form-control' />
            
            
                <label for='fil_size'></label>
                <input id='fil_size' name='fil_size' type='hidden' size='50' value='<?= mhe($fil_size) ?>' class='form-control' />
            
            
                <label for='fil_type'>Type</label>
                <input id='fil_type' name='fil_type' type='text' size='50' value='<?= mhe($fil_type) ?>' class='form-control' />
            </div>
            <div class='form-group'>
                <label for='fil_src'>File for upload</label>
                <input id='fil_src' name='fil_src' type='file' size='50'  accept=".doc, .docx, .txt, .rtf, .pdf, .prc, .mobi, .epub, .jpg" class='form-control' value='<?= mhe($fil_src) ?>'onchange="afficher()"/>
                <br>
                 <span id="info"></span>
              
                 <span id="destination"></span>
                <br>
            </div>
            
            <div class='form-group'>
                <label for='fil_documents'>Add for document:</label>
                <select class='form-control' id='fil_documents' name='fil_documents' >
                    <?= Entity::HTMLselect("select * from documents", "doc_id", "doc_label", $_GET['id']) ?>
                </select>
            </div>
           
            <input class="btn btn-success" type="submit" name="btSubmit" value="Upload" />
        </form>
        <script>
            function getFolder(e) {
                //<input type="file" id="destination" onchange="getFolder(event)" webkitdirectory mozdirectory msdirectory odirectory directory multiple />
                let files = e.target.files;
                let path = files[0].webkitRelativePath;
                let folder = path.split("/");
                console.log(files);
                alert(folder[0]);
                        
                             
            }
        /*    function afficher()	{
		    let o=document.getElementById("fil_src");
	    	let oinfo=document.getElementById("info");
		    oinfo.innerHTML +="nom : " + o.files[0].name + "<br>";
		    oinfo.innerHTML +="taille : " + o.files[0].size + "<br>";
		    oinfo.innerHTML +="type : " + o.files[0].type + "<br>";
		    oinfo.focus();
    }

    function afficherDestination()	{
		    let o=document.getElementById("destination");
	    	let oinfo=document.getElementById("destination");
		    oinfo.innerHTML +="nom : " + o.folder[0] + "<br>";
		   
		    oinfo.focus();
	}*/
        </script>