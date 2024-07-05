<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('add_category') }}" method="post">@csrf
        <div>
            <input type="text" name="category">
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Add Category" id="">
        </div>
    </form>
</body>
</html>