<?php
$result = mysqli_query($connection, "DELETE FROM Books WHERE idBooks={$_GET['idBooks']}");