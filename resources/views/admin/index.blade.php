<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Admin
    <form method="POST" action="{{ route('logout') }}">
        @csrf
       <li>
        <a href="#exampledropdownDropdown">
            <i class="icon-windows"></i>Animals
        </a>
        <ul id="exampledropdownDropdown">
            {{-- <li><a href="{{url('add_animal')}}">Add Category</a></li> --}}
            <li><a href="{{url('view_category')}}">View Category</a></li>

        </ul>
        <ul id="exampledropdownDropdown">
            <li><a href="{{url('add_animal')}}">Add Animals</a></li>
            <li><a href="{{url('view_animal')}}">View Animals</a></li>

        </ul>
       </li>
     <input type="submit" value="logout" >   
    </form>
</body>
</html>