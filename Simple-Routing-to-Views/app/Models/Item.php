<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // table associated with the model
    protected $table = 'items';

    // the primary key for the model
    protected $primaryKey = 'id';

    // Allow mass assignment on these fields
    protected $fillable = ['name', 'description'];
}