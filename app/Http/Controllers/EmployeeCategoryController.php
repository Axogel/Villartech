<?php

namespace App\Http\Controllers;

use App\Models\EmployeeCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeCategory = EmployeeCategory::orderBy('id','desc')->paginate(5);

        if(session('success_message')) {

           Alert::success('Congratulations!', session('success_message'));
       }

       $title = 'Delete Category!';
       $text = "Are you sure you want to delete?";
       confirmDelete($title, $text);

       return view ('EmployeeCategory.index', $employeeCategory)->with('employee_categories', $employeeCategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EmployeeCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeeCategory  = new EmployeeCategory;
        $employeeCategory ->name = $request->name;
        $employeeCategory->description = $request->description;
        $request->validate([
            '*' => 'required',

         ], $message = [
            'required' => 'All fields are required.',]);
        $employeeCategory ->save();
        return redirect()->route('EmployeeCategories.index')->withSuccessMessage('Employee category have been created', 'Employee category have been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeCategory  $employeeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeCategory $employeeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeCategory  $employeeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeeCategory= EmployeeCategory::find($id);
        return view('EmployeeCategory.edit',compact('employeeCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeCategory  $employeeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employeeCategory= EmployeeCategory::find($id);
        $employeeCategory ->name = $request->name;
        $employeeCategory ->description;
        $request->validate([
            '*' => 'required',

         ], $message = [
            'required' => 'All fields are required.',]);
        $employeeCategory ->save();
        return redirect()->route('EmployeeCategories.index')->withSuccessMessage('Employee category have been updated', 'Employee category have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeCategory  $employeeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeCategory= EmployeeCategory::find($id);
        $employeeCategory ->delete();
        return redirect()->route('EmployeeCategory.index')->withSuccessMessage('Employee category have been deleted', 'Employee category have been deleted');
    }
}
