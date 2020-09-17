<nav class="navbar fixed-top navbar-expand-sm bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item active"> 
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php  if (isset($_SESSION["use_id"])) { 
                 if ($_SESSION["profil"]==1) {  ?>
                 
                     <li><a class='nav-link' href='<?=hlien("documents","index")?>'>Documents</a></li>
                     <li><a class='nav-link' href='<?=hlien("files","index")?>'>Files</a></li>
                    <!--<li><a class='nav-link' href='<?=hlien("acces","index")?>'>Acces</a></li>-->
                    <li><a class='nav-link' href='<?=hlien("keywords","index")?>'>Keywords</a></li>
                    <li><a class='nav-link' href='<?=hlien("profil","index")?>'>Profils</a></li>
                     <li><a class='nav-link' href='<?=hlien("search","index")?>'>Search</a></li>
                     <li><a class='nav-link' href='<?=hlien("user","index")?>'>Users</a></li>
                <?php } else if ($_SESSION["profil"]==2) { ?>
                     <li><a class='nav-link' href='<?=hlien("documents","index")?>'>Documents</a></li>
                     
                <?php } else if($_SESSION["profil"]==3){ 

          }
         } ?>
    </ul>

    <ul class="nav navbar-nav ml-auto">
    <?php if (isset($_SESSION["use_id"])) { ?>
        <li><a class='nav-link' href='<?=hlien("user","edit","id",$_SESSION['use_id'])?>'>My profil</a></li>
        <li><a class="nav-link" href=""><?= $_SESSION["user"]."-" ?><?="(". $_SESSION["name"] ?> <?= $_SESSION["firstname"].")" ?>&nbsp;<span class="badge badge-info">[<?= $_SESSION["profil_name"] ?>]</span></a></li>
      <?php } ?>
    <!--<li><a class="nav-link" href="<?=hlien("database","creer")?>">Créer BDD</a></li>-->
	  <!--<li><a class="nav-link" href='<?=hlien("database","dataset")?>'>Jeu de données</a></li>-->
    <?php if (isset($_SESSION["use_id"])) { ?>
        <li><a class="nav-link" href="<?= hlien("authentification", "deconnexion") ?>">Déconnexion</a></li>
      <?php } else { ?>
        <li><a class="nav-link" href='<?= hlien("authentification", "connexion") ?>'>Connexion</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>