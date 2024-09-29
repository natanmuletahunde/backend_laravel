<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Specify the table name (optional if the table follows Laravel naming conventions)
    protected $table = 'todos';

    // Specify which fields can be mass-assigned
    protected $fillable = ['task'];
}
