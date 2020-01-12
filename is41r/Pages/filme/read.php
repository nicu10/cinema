<?
$result = mysqli_query($connection, "SELECT * FROM filme");
?>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Denumirea</th>
        <th>Anul</th>
        <th>Regizor</th>
        <th>Descrierea</th>
        <th>Genul</th>
        <th>Poster</th>
    </tr>
    </thead>
    <tbody>
        <?
        while($element = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$element['ID_film'];?></td>
                <td><?=$element['Denumirea'];?></td>
                <td><?=$element['Anul'];?></td>
                <td><?=$element['Regizor'];?></td>
                <td><?=$element['Descriere'];?></td>
                <td><?=$element['Genul'];?></td>
                <td><img style="max-width: 200px;" src="..\files\<?=$element['Poster'];?>"></td>
                <td><a href="index.php?module=filme&action=delete&ID_film=<?=$element['ID_film'];?>">Delete</a></td>
                <td><a href="index.php?module=filme&action=update&ID_film=<?=$element['ID_film'];?>">Update</a></td>
            </tr>
            <?
        }
        ?>

    </tbody>

</table>
