<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tecnician;
use Illuminate\Http\Request;

class TecnicianController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function tecnicianCreate()
    {
        return view('backend.tecnician.create');
    }

    public function tecnicianStore(Request $request)
    {
        $tecnician = new Tecnician();

        $tecnician->name = $request->name;
        $tecnician->phone = $request->phone;
        $tecnician->dob = $request->dob;
        $tecnician->nid = $request->nid;
        $tecnician->passport_no = $request->passport_no;
        $tecnician->present_address = $request->present_address;
        $tecnician->permanent_address = $request->permanent_address;
        $tecnician->join_date = $request->join_date;
        $tecnician->Type_of_work = $request->Type_of_work;

         if(isset($request->image)){
            $imageName = rand().'.'.'tecnician'.'.'.$request->image->extension();
            $request->image->move('backend/images/tecnician/', $imageName);
            
            $tecnician->image = $imageName; 
        }

        $tecnician->save();
        return redirect()->back()->with('success', 'Tecnician created successfully!');
    }
}
