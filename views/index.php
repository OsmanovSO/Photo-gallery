<table border="2" width="250" bordercolor="red">

<?php foreach ($items as $item): ?>
    <tr>
<th align="center"><div> <?php echo $item->id ?> </div></th>
<th align="center"><div> <?php echo $item->title ?> </div></th>
<td><a href="<?php echo $item->patch ?>"><img src="<?php echo $item->patch?>"style="max-width: 200px"</a> </td>
        </tr>
<?php endforeach; ?>

</table>
<a href="/addPhoto.php">Добавить фото</a>
<br>
<a href="/delitePhoto.php">Удалить фото</a>

