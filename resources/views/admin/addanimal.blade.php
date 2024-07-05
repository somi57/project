<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('upload_animal') }}" method="post" enctype="multipart/form-data">@csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="">
        </div>
        <div>
            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="rabbit">Rabbit</option>
            </select>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="">
        </div>
        <div>
            <input class="btn btn-success" type="submit" value="Add Animal" id="">
        </div>
    </form>
</body>
</html>