<?php

namespace App\Http\Controllers;

use App\Models\questions;
use App\Models\Exam;
use App\Models\question_options;
use App\Models\keywords;
use App\Http\Requests\StorequestionsRequest;
use App\Http\Requests\UpdatequestionsRequest;

class QuestionsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorequestionsRequest $request, Exam $exam)
    {
        $validation = $request->validated();
        $totalQuestion = $exam->questions()->count();
        $totalScore = $exam->questions()->sum('score');

        if ($totalQuestion > $exam->Max_Questions || ($totalScore + $validation['score']) > $exam->Max_Score) {
            return response()->json(['error', 'The maximum number of questions or permitted score has been exceeded.']);
        }

        $questionData = collect($validation)->only(['type', 'questionText', 'score', 'order'])->toArray();
        $question = $exam->questions()->create($questionData);

        if (in_array($validation['type'], ['fill_blank', 'true_false']) && isset($validation['options'])) {
            $question->qestion_options()->createMany([$validation['options']]);
        }
        elseif ($validation->type == 'descriptive') {
            $question->keywords()->createMany([$validation->keywords]);
        }

        return redirect()->json(['question' => $question->load('keywords', 'options')], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatequestionsRequest $request, questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(questions $questions)
    {
        //
    }
}
