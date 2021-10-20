<?php


namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::latest()->paginate(5);

        return view('staffs.index',compact('staffs'))->with('i', (request()->input('page', 1)-1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $staff = new Staff();
        $staff->staffNumber     =$request->input('staffNumber');
        $staff->firstName     =$request->input('firstName');
        $staff->secondName     =$request->input('secondName');
        $staff->age     =$request->input('age');
        $staff->datebirth     =$request->input('datebirth');
        $staff->dateEmployment     =$request->input('dateEmployment');
        $staff->speciality     =$request->input('speciality');
        $staff->save();
        return redirect()->route('staffs.index')->with('success','Staff information has been created Successfully');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staffs.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {   

        return view('staffs.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
    
        // $staff->update($request->all());
    
        // return redirect()->route('staffs.index')
        //                 ->with('success','Staff updated successfully');






        $staff = new Staff();
        $staff->staffNumber             =  $request->input('staffNumber');
        $staff->firstName               =  $request->input('firstName');
        $staff->secondName              =  $request->input('secondName');
        $staff->age                     =  $request->input('age');
        $staff->datebirth               =  $request->input('datebirth');
        $staff->dateEmployment          =  $request->input('dateEmployment');
        $staff->speciality              =  $request->input('speciality');
        $staff->update($request->all());
        // $staff->update();
        return redirect()->route('staffs.index')->with('success','Staff information has been update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
       

          $staff->delete();
    
        return redirect()->route('staffs.index')
                        ->with('success','Staff deleted successfully');




        // $staff   = Staff::find($id);
        // $staff->delete();
        //  return redirect()->route('staffs.index')->with('success','Staff information has been deleted Successfully');
    }

}
