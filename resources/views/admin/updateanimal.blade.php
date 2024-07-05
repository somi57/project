<!DOCTYPE html>
<html>
  <head> 

  </head>
  <body>
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2>Update animal</h2>
            <div>
                <form action="{{ url('edit_animal',$data->id) }}" method="post" enctype="multipart/form-data">@csrf
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $data->name }}">
                    </div>
                    <div>
                        <label>Age</label>
                        <input type="number" name="age" value="{{ $data->age }}">
                    </div>
                    <div>
                        <label>Category</label>
                        <select name="category" id="category">
                          <option value="cat">Cat</option>
                          <option value="dog">Dog</option>
                          <option value="rabbit">Rabbit</option>
                      </select>                 
                       </div>
                    <div>
                        <label>Image</label>
                        <img height="100px" width="100px" src="/projects/{{ $data->image }}" alt="">
                    </div>
                    <div>
                        <label >New Image</label>
                        <input type="file" name="image">
                    </div>
            
                   
                    <div>
                        <input class="btn btn-success" type="submit" value="Update" id="">
                    </div>
                </form>
            </div>
      </div>
    </div>
      </div>
    <!-- JavaScript files-->
   
  </body>
</html>