<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理ページ</title>
</head>
<body>
    <h1>Ciao!!</h1>
    <form action="/logout" class=""method="post">
        @csrf
    <button class="btn"type="submit">ログアウト</button>
    </form>
    
</body>
</html>