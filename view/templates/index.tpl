<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/styles.css">
    <title>{$title}へようこそ</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-left">
                {$leftlogo}
            </div>
            <div class="header-right">
                {$rightlogo}
            </div>
            <h1 id="title">{$title}</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <label for="agenda">{$agenda}</label>
            <form action="view/test.php" method="POST">
                <input type="text" name="id">
                <input type="submit" value="送信">
            </form>
        </div>
    </main>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="webroot/js/index.js"></script>
</body>


</html>