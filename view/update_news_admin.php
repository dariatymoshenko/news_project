<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</header>
<body>


<form action="http://localhost/my_project/index.php/admin/news/<?php echo $update_news['id'] ?>/update" method="POST">
    <input type="text" name="name" size="50" placeholder="Название новости" value="<?php echo isset($update_news['news_name'])?$update_news['news_name']:'Введите сюда название новости'; ?>" /><br />
    <input type="text" name="short_description" size="50" placeholder="Короткое описание новости" value="<?php echo isset($update_news['short_description'])?$update_news['short_description']:'Введите сюда короткий текст новости'; ?>" /><br />
    <textarea name="full_description" rows="5" cols="80"><?php echo isset($update_news['full_description'])?$update_news['full_description']:'Введите сюда полный текст новости'; ?></textarea><br />
<input type="submit" value="Сохранить" />
</form>
</body>
</html>