<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;
    protected $table = 'questions';

    protected $fillable = [
        'exam_id',
        'type',
        'questionText',
        'questionText2',
        'score',
        'order',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function keywords()
    {
        return $this->hasMany(KeyWord::class);
    }
}
