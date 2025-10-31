<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyWord extends Model
{

    use HasFactory;
    protected $table = 'key_words';

    protected $fillable = [
        'question_id',
        'key_word',

    ];
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
