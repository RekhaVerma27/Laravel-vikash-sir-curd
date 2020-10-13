<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Allstudata;

class AllstudataController extends Controller
{
    public function studentForm()
    {
    	return view('Full Curd.student_form');
    }

    public function dataSave(Request $request)
    {
        $file = $request->file("image");
        $filename = 'image'.time().'.'.$request->image->extension();
        $file->move("upload/",$filename);

    	$data = new Allstudata;
    	$data->name      = $request->name;
    	$data->email     = $request->email;
    	$data->password  = $request->password; 
    	$data->gender    = $request->gender;
    	$data->education = implode(',' , $request->education);
    	$data->college   = $request->college;
    	$data->address   = $request->address;
        $data->image     = $filename; 
    	$saved = $data->save();

    	if($saved)
    	{
    		return redirect('/display-table');
    	}
    	else
    	{
    		echo "Something went Wrong";
    	}
    }

    public function displayTable()
    {
    	$datas = Allstudata::all();
    	return view('Full Curd.student_table',compact('datas'));
    }

    public function showStudent($id)
    {
    	$data = Allstudata::find($id);
    	return view('Full Curd.show_student',compact('data'));
    }

    public function editData($id)
    {
    	$data = Allstudata::find($id);
    	return view('Full Curd.student_edit',compact('data'));
    }

    public function updateData(Request $request)
    {
        

        if($request->hasfile('image'))
        {
            $file = $request->file("image");
            $filename = 'image'.time().'.'.$request->image->extension();
            $file->move("upload/",$filename);

            

            $data = Allstudata::find($request->id);
            $data->name      = $request->name;
            $data->email     = $request->email;
            $data->password  = $request->password;
            $data->gender    = $request->gender;
            $data->education = implode(',', $request->education);
            $data->college   = $request->college;
            $data->address   = $request->address;
            $data->image     = $filename;
            $updated = $data->save();
        }
        else
        {
            $data = Allstudata::find($request->id);
            $data->name      = $request->name;
            $data->email     = $request->email;
            $data->password  = $request->password;
            $data->gender    = $request->gender;
            $data->education = implode(',', $request->education);
            $data->college   = $request->college;
            $data->address   = $request->address;
            $updated = $data->save();
        }

        if($updated)
        {
            return redirect('/display-table');
        }
        else
        {
            echo "Something went Wrong";
        }
    }

    public function deleteData($id)
    {
    	$data = Allstudata::find($id);
    	$deleted = $data->delete();
    	if($deleted)
    	{
    		return redirect('/display-table');
    	}
    }
}
