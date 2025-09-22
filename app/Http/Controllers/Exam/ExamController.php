<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Http\Requests\Exam\StoreExamRequest;
use App\Http\Requests\Exam\UpdateExamRequest;
use App\Models\Exam;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Exam $exam)
    {

        return view('Exam.create' , compact('exam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamRequest $request)
    {
        $validated = $request->validated();
        $exam = Exam::create($validated);
        return redirect()->route('Exams.create', $exam->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamRequest $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
