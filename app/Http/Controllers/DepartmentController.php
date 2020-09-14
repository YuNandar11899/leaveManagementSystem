<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $departments=department::all();
         return view('Department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $departments=new department([
          'name'=>$request->get('name'),
          'sname'=>$request->get('sname'),
      ]);
      $departments->save();
      return redirect('/department');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments=department::find($id);
       return view('department/edit',compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $departments =department::find($id);
        $departments-> name = $request->name;
        $departments-> sname = $request->sname;
        $departments->update();

        return redirect('/department');


        //  $departments->update($this->validateRequest());
        //  return redirect('/departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $departments)
    {
        $departments->delete();
         return redirect('/department');
    }
    private function validateRequest(){
         return request()->validate([
             'name'=>'required',
             'sname'=>'required'
         ]);
     }
}
