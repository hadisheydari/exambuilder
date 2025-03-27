<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(10);
        return view('Courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreCourseRequest $request)
    {

        $validated = $request->validated();
        $validated['image'] = $this->StoreImage($request);

        Course::create($validated);
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('Courses.show', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('Courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')){
            if ($course->image){
                Storage::delete($course->image);
            }
            $validated['image'] = $this->StoreImage($request);

        }else{
            $validated['image'] = $course->image ;
        }
        $course->update($validated);

        return redirect()->route('courses.index')->with('success', 'Course edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
    private function StoreImage( $request)
    {
        if ($request->hasFile('image')) {
           return $request->file('image')->store('images/Courses', 'public');
        }else{
            return null ;
        }
    }

}
