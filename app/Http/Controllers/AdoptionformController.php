<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoptionfrom;

class AdoptionformController extends Controller
{
    public function create() {
        return view('adoptionform');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            
        ]);

        $adoptionform = new Adoptionfrom(); // create new row/item
        $adoptionform->name = $request->name;
        $adoptionform->age = $request->age;
        $adoptionform->address = $request->address;
        $adoptionform->email = $request->email;
        $adoptionform->number = $request->number;

        $adoptionform->save();
        return redirect()->route('adoptionform.create')->with('success', 'Form added successfully!');
    }
}
