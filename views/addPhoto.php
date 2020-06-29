<html>
<head>
<title>Basic File Upload</title>
</head>
<body>
<h3>Загрузка файла на сервер</h3>
<form method="POST" action="addPhoto.php" enctype="multipart/form-data">
    <label for="title">Название</label>
    <input type="text" id="title" name="title"></br>
	<label for="image">Выберете файл</label>
	<input type="file" id="image" name="image"></br>
	<input type="submit" name="send_messages" value="Загрузить">
</form>
</body>
</html>
