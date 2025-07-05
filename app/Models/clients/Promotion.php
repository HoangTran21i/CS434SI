<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'tbl_promotion';

    protected $fillable = [
        'code',
        'description',
        'discount',
        'start_date',
        'end_date',
    ];
}