<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\questions;

class Exam extends Model
{
    /** @use HasFactory<\Database\Factories\ExamFactory> */
    use HasFactory;
    protected $table = 'exams';

    protected $fillable = [
        'course_id',
        'teacher_id',
        'title',
        'Max_Score',
        'Max_Questions',

    ];

    public function questions(){
        return $this->hasMany(questions::class);
    }
}
