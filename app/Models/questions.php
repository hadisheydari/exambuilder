<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;
    protected $table = 'questions';

    protected $fillable = [
        'exams_id',
        'type',
        'questionText',
        'score',
        'order',
    ];

    public function exams()
    {
        return $this->belongsTo(Exam::class);
    }

    public function qestion_options()
    {
        return $this->hasMany(question_options::class);
    }

    public function keywords()
    {
        return $this->hasMany(keywords::class);
    }
}
