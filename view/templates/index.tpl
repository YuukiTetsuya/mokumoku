<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$title}へようこそ</title>
</head>

<body>
    <h1>{$message}</h1>
    <label for="agenda">{$agenda}</label>
    <form action="view/test.php" method="POST">
        <input type="text" name="id">
        <input type="submit" value="送信">
    </form>
</body>

</html>