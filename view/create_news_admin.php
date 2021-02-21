<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</header>
<body>


<form action="http://localhost/my_project/index.php/admin/news/store" method="POST">
    <input type="text" name="name" size="50" placeholder="Название новости"/><br />
    <input type="text" name="short_description" size="50" placeholder="Короткое описание новости" /><br />
    <textarea rows="5" name="full_description" cols="80"></textarea><br />
    <input type="submit" value="Сoхранить" />
</form>
</body>
</html>