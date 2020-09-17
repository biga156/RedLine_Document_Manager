<?php if (isset($message)) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?=$message?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>
<h1>Login :</h1>
<form method="post">
   <p>
        <label for="use_username">Login : </label>
        <input type="text" name="use_username" id="use_username" placeholder="Your username">
    </p>
    <p>
       <label for='use_passw'>Login </label>
       <input type='password' name='use_passw' id='use_passw' palceholder='Your password' required value=''>
    </p>
    <input type="submit" value="Login" name="btsubmit" class="btn btn-success">
</form>