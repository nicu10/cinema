<?php
$result = mysqli_query($connection, "DELETE FROM filme WHERE ID_film={$_GET['ID_film']}");?>
<p>Inregistrarea a fost stearsa cu succes</p>
<a href="index.php?module=filme&action=read">Inapoi la lista</>
