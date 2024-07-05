
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoption Form</title>
    {{-- @vite('resources/css/adoptionform.css') --}}
 
</head>


<body>
<div class="login">
    <h2>Pet Adoption</h2>
    <form action="{{ url(adoptionform.store) }}" method="post"> @csrf
        <div class="input-group ">
          <label for="Full Name">Full Name</label> 
        <input type="text" id="full name" name=" full name" required>
        <br>
    </div>
    <br>
    <div class="input-group">
        <label for="Address">Address</label> 
        <input type="text" id="address" name="address" required>
        <br>
    </div>
    <br>
    <div class="input-group">
        <label for="Email">Email</label> 
        <input type="text" id="email" name="email" required>
        <br>
    </div>
    <br>
    <div class="input-group">
       <label for="Age">Age</label> 
        <input type="number" id="age" name="age" required>
    </div>
    <br>

        <div class="input-group">
           <label for="Number">Number</label>
        <input type="number" id="number" name="number" required>
        <br>
        </div>
        <br>
    

      <p>  How did you know about us?</p>
      <p>
        From:
        <input id="Friends" type="radio"  name="From"> <label for="friends">Friends</label>
        <input id="Family" type="radio" name="from" > <label for="family">Family</label>
        <input id="Social media" type="radio"  name="from"> <label for="socialmedia">Social media</label>
        <input id="Others" type="radio" name="from" > <label for="others">Others</label>
        </p>
        <br>
      <p>  Why do you want to adopt pets?</p>
    <p>
        <input type="text"> 
    </p>
    <br>
    <p>
        <button type="submit" value="Submit">Submit</button>
    
    </p>
</div>
       


    </form>
</body>
</body>
</html>

