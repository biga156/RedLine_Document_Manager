<h1>Docman</h1>
<div class="row row-cols-2">
    <div class="col">
        Il existe 3 profils utilisateur :
        <ul>
            <li>Utilisateur</li>
            <li>Modérateur</li>
            <li>Administrateur</li>
        </ul>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
       
    </div>
    <div class="col">
        <form action="" method="POST">
            <p>
                <label for='use_username'>Login </label>
                <input type='text' name='use_username' id='use_username' required value='<?= htmlentities($use_username, ENT_QUOTES, "utf-8") ?>'>
            </p>
            <p>
                <label for='use_passw'>Login </label>
                <input type='text' name='use_passw' id='use_username' required value='<?= htmlentities($use_passw, ENT_QUOTES, "utf-8") ?>'>
            </p>
            <input type="submit" name="btsubmit" value="Valider">
        </form>
    