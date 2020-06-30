<?php foreach ($items as $item): ?>
<table border="2" width="250">
    <tr>
<td><div> <?php echo $item->title ?> </div></td>
<td><a href="<?php echo $item->patch ?>"><img src="<?php echo $item->patch ?>"style="max-width: 200px"</a> </td>
    </tr>
</table>
<?php endforeach; ?>

<?php include __DIR__ . '/addPhoto.php'; ?>