<?
$result = mysqli_query($connection, "SELECT idBooks, Title, anul, photo FROM Books");
?>
<table class="table" >
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
         <th>anul</th>
         <th>Photo</th>
           <th></th>
    </tr>
    </thead>
    <tbody>
        <?
        while($element = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$element['idBooks'];?></td>
                <td><?=$element['Title'];?></td>
                 <td><?=$element['anul'];?></td>
                 <td><img style="max-width: 200px;" src="<?=$element['photo'];?>"></td>
                 <td><a href="index.php?module=books&action=delete&idBooks=<?=$element['idBooks'];?>">Delete</a></td>
            </tr>
            <?
        }?>
    </tbody>

</table>