<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Technician;
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
        $tecnician = new Technician();

        $latestTecnician = Technician::latest()->first();
        $nextId = $latestTecnician ? $latestTecnician->id + 1 : 1;
        $tecnician->tecnician_id = 'TEC-' . str_pad($nextId, 3, '0', STR_PAD_LEFT);

        $tecnician->name = $request->name;
        $tecnician->phone = $request->phone;
        $tecnician->dob = $request->dob;
        $tecnician->nid = $request->nid;
        $tecnician->passport_no = $request->passport_no;
        $tecnician->present_address = $request->present_address;
        $tecnician->permanent_address = $request->permanent_address;
        $tecnician->join_date = $request->join_date;
        $tecnician->Type_of_work = $request->Type_of_work;

        if (isset($request->image)) {
            $imageName = rand() . '.' . 'tecnician' . '.' . $request->image->extension();
            $request->image->move('backend/images/tecnician/', $imageName);
            $tecnician->image = $imageName;
        }

        $tecnician->save();
        return redirect('/admin/tecnician/list')->with('success', 'Tecnician created successfully!');
    }

    public function tecnicianList()
    {
        $tecnicians = Technician::get();
        return view('backend.tecnician.list', compact('tecnicians'));
    }

    public function tecnicianView($id)
    {
        $tecnician = Technician::find($id);
        return view('backend.tecnician.view', compact('tecnician'));
    }

    public function tecnicianDelete($id)
    {
        $tecnician = Technician::find($id);

        if ($tecnician->image && file_exists('backend/images/tecnician/' . $tecnician->image)) {
            unlink('backend/images/tecnician/' . $tecnician->image);
        }

        $tecnician->delete();
        return redirect() - back();
    }

    public function tecnicianEdit($id)
    {
        $tecnician = Technician::find($id);
        return view('backend.tecnician.edit',  compact('tecnician'));
    }

    public function tecnicianUpdate(Request $request, $id)
    {
        $tecnician = Technician::find($id);

        $tecnician->name = $request->name;
        $tecnician->phone = $request->phone;
        $tecnician->dob = $request->dob;
        $tecnician->nid = $request->nid;
        $tecnician->passport_no = $request->passport_no;
        $tecnician->present_address = $request->present_address;
        $tecnician->permanent_address = $request->permanent_address;
        $tecnician->join_date = $request->join_date;
        $tecnician->Type_of_work = $request->Type_of_work;
        if (isset($request->image)) {

            if ($tecnician->image && file_exists('backend/images/tecnician/' . $tecnician->image)) {
                unlink('backend/images/tecnician/'.$tecnician->image);
            }

            $imageName = rand() . 'Technician'.'.'.$request->image->extension();
            $request->image->move('backend/images/tecnician/', $imageName);

            $tecnician->image = $imageName;
        }

        $tecnician->save();
        return redirect()->back();
    }
}
