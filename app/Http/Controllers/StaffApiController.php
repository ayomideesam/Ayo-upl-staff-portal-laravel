<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffApiController extends Controller
{
    public function create(Request $request)
    {
        $staffs = new Staff();

        $staffs->fname = $request->input('fname');
        $staffs->lname = $request->input('lname');
        $staffs->phone = $request->input('phone');
        $staffs->email = $request->input('email');
        $staffs->password = $request->input('password');

        $staffs->save();
        return response()->json($staffs);
    }

    public function show()
    {
        $staffs = Staff::all();
        return response()->json($staffs);
    }
    public function showById($id)
    {
        $staffs = Staff::find($id);
        return response()->json($staffs);
    }
    public function updateById(Request $request, $id)
    {
        $staffs = Staff::find($id);
        $staffs->fname = $request->input('fname');
        $staffs->lname = $request->input('lname');
        $staffs->email = $request->input('email');
        $staffs->phone = $request->input('phone');
        $staffs->password = $request->input('password');

        $staffs->save();
        return response()->json($staffs);
    }
    public function deleteById(Request $request, $id)
    {
        $staffs = Staff::find($id);
        $staffs->delete();

        return response()->json($staffs);
    }
    public function toggleById(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->active =  $staff->active == 1 ? 0 : 1;

        $staff->save();
        return response()->json($staff);

    }
}
