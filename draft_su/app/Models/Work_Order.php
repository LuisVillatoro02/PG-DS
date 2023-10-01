<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_Order extends Model
{
    use HasFactory;
    protected $table = 'work_order';

    protected $fillable = [
        'file_no',
        'branch',
        'terminal',
        'product',
        'vessel',
        'file_status',
    ];
}
