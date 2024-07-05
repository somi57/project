<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Category</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
           @foreach ($animal as $animals)
           <tr>
            <td>{{ $animals->name }}</td>
            <td>{{ $animals->age }}</td>
            <td>{{ $animals->category }}</td>
            <td><img height="100px" width="100px" src="animals/{{ $animals->image }}" alt=""></td>
            <td>
                <a class="btn btn-success" href="{{  url('update_animal',$animals->id)}}">Update</a>
              </td>
              <td><a class="btn btn-danger"  href="{{url('delete_animal',$animals->id)}}">Delete</a></td>
           </tr>
               
           @endforeach
        </table>
    </div>
</body>
</html>