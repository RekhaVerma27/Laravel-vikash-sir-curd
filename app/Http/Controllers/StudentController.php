<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    // Curd
    public function studentForm()
    {
    	return view('Curd.index');
    }

    public function addForm(Request $request)
    {
    	// echo "Rekha";

    	$data = new Student;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->password = $request->password;
    	$data->save();

    	if($data)
    	{
    		return redirect('/display');
    	}
    	else
    	{
    		echo "wrong query";
    	}

    }

    public function displayTable()
    {
    	$datas = Student::all();
    	return view('Curd.display',compact('datas'));
    }

    public function showData($id)
    {
        $data = Student::find($id);
        return view('Curd.showdata',compact('data'));
    }

    public function editData($id)
    {
        $data = Student::find($id);
        return view('Curd.editdata',compact('data'));
    }

    public function updateData(Request $request)
    {
        $data = Student::find($request->id);
        $data->name     = $request->name;
        $data->email    = $request->email;
        $data->password = $request->password;
        $update = $data->save();

        if($update)
        {
            return redirect('/display');
        }
        else
        {
            echo "Something went Wrong";
        }
    }

    public function deleteData($id)
    {
        $data = Student::find($id);

        $data->delete();

        if($data)
        {
            return redirect('/display');
        }
        else
        {
            echo "Something went wrong";
        }
    }
}
