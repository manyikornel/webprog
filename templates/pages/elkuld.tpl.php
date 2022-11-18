
<?php if(isset($uzenet)) { ?>
    <h1><?= $uzenet ?></h1>
    <p>
    E-mail: <?= $_POST['email'] ?> <br>
    Tárgy:  <?= $_POST['subject'] ?> <br>
    Üzenet:  <?= $_POST['message'] ?> <br>
	<p>feldolgozva</p>
    </p> 
    <?php if($ujra) { ?>
        <a href="?oldal=kapcsolat">Próbálja újra!</a>
    <?php } ?>
<?php } ?>