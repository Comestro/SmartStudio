<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LetterPad extends Model
{
    protected $fillable = ['name', 'address', 'subject', 'body', 'signature_image'];

}
