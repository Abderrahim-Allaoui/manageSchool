<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('students.index' , ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required|max:255',
             'email' => 'required|max:255',
             'phone' => 'required',
             'section' => 'required|max:255',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
  
         if ($image = $request->file('image')) {
             $destinationPath = 'image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $validatedData['image'] = "$profileImage";
         }
  
         $students = Student::create($validatedData);
  
         return redirect('/students')->with('success', 'Student created successfully');
     }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show' , compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required',
        'section' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $validatedData['image'] = "$profileImage";
    }

    $student->update($validatedData);

    return redirect('students')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        
        $student->delete();

        return redirect('students') ->with('success' , 'Student supprimer avec succèss !');
    }
}
