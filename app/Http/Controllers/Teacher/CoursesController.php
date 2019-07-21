<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Courses::where('created_by',Auth::user()->id)->paginate(15);
        return view('teacher.courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price'=> 'numeric',
            'discount'=> 'numeric'
        ]);

      
        $course= new Courses;
        $course->title=$request->title;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->discount = $request->discount;
        $course->created_by=Auth::id();
        $course->save();
        return redirect('/teacher/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Courses $course)
    {
        return view('teacher.courses.show')->withCourse($course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $course)
    {
        return view('teacher.courses.edit')->withCourse($course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Courses $course, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'numeric',
            'discount' => 'numeric'
        ]);
        $course->title = $request->title;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->discount = $request->discount;
        $course->created_by = Auth::id();

        $course->save();
        return redirect('/teacher/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Courses $course)
    {
        $course->delete();
        return redirect('/teacher/courses');
    }
}
