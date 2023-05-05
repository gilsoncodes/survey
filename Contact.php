<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question1',
        'question2a',
        'question2b',
        'question2c',
        'question2d',
        'question2e',
        'question2f',
        'question3a',
        'question3b',
        'question3c',
        'question3d',
        'question4',
        'question5',
        'question6',
        'question7',
        'question8',
        'question9',
        'question10',
        'question11',
        'question12',
        'question13',
        'question14',
        'question15',
        'question16',
        'question17',
        'question18',
        'question19',
        'comments'

    ];
}
