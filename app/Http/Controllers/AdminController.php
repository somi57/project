<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Category;

class AdminController extends Controller
{

    public function view_category()
    {
        return view ('admin.category');
    }
    public function add_category(Request $request)
    {
        $category=new Category;
        $category->categoryname=$request->add_category;
        $category->save();
        return redirect()->back();
    }
    public function add_animal()
    {
        return view('admin.addanimal');
    }

    public function upload_animal(Request $request)
    {
        $data=new Animal;
        $data->name=$request->name;
        $data->age=$request->age;
        $data->category=$request->category;

        $image=$request->image;
        if ($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('animals',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back();
    }

    public function view_animal()
    {
        $animal=Animal::all();
        return view('admin.viewanimal',compact('animal'));
    }
    public function delete_animal($id)
    {
        $data=Animal::find($id);
        // to delete image from the public folder
        $image_path=public_path('animals/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $data->delete();
        return redirect()->back();
    }
    public function update_animal($id)
    {
        $data=Animal::find($id);
        return view('admin.updateanimal',compact('data'));
    }
    public function edit_animal(Request $request,$id)
    {
        $data=Animal::find($id);
        $data->name=$request->name;
        $data->age=$request->age;
        $data->category=$request->category;
       
        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('animals'.$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect('/view_animal');
    }
    public function service_search(Request $request)
    {
        $search=$request->search;
        $service=Animal::where('category','LIKE','%'.$search.'%')->paginate(3);
        return view('admin.viewanimal',compact('animal'));
    }
}
