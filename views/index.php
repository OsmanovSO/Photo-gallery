<table border="2" width="250" bordercolor="red">

<?php foreach ($items as $key => $item): ?>
    <tr>
        <th align="center"><div> <?php echo $key+1 ?> </div></th>
        <th align="center"><div> <?php echo $item->title ?> </div></th>
        <td>
            <a href="<?php echo $item->patch ?>"><img src="<?php echo $item->patch?>"style="max-width: 200px"</a>
        </td>
        <td><a href='<?php echo "/deletePhoto.php?id=$item->id" ?>'>Удалить</a></td>
    </tr>
<?php endforeach; ?>

</table>
<a href="/addPhoto.php">Добавить фото</a>


