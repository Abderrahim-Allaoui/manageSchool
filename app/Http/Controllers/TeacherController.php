<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;



class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::paginate(10);
        return view('teachers.index' , ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    

     public function store(Request $request)
     {
         $validated = $request->validate([
             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'email' => 'required|email|unique:teachers,email',
             'password' => 'required|string|min:8|max:255'
         ]);
 
         $validated['password'] = Hash::make($validated['password']);
         $teachers = Teacher::create($validated);
         
     
         return redirect('/teachers')->with('success', 'Teacher created successfully');
     
     }

     



    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show' , compact('teacher'));

    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('Teachers.edit' , compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, Teacher $teacher)
    {
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email,' . $teacher->id,
        'password' => 'required|string|min:8|max:255'
    ]);
    $validated['password'] = Hash::make($validated['password']);
    $teacher->update($validated);

    return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        
        $teacher->delete();

        return redirect('teachers') ->with('success' , 'Teacher supprimer avec succèss !');
    }
}