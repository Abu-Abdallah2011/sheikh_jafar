<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sessions extends Model
{
    use HasFactory;

    protected $table = 'sessions';

    protected $fillable = [
        'session',
        'term',
        'term_starts',
        'term_ends',
        'next_term_starts',
        'days',
    ];
}
