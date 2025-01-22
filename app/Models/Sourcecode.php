<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sourcecode extends Model
{
    use HasFactory;

    protected $table = 'data_sourcecode';
    protected $guarded = ['id'];

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id');
    }
    
    public function pseudocode()
    {
        return $this->belongsTo(Pseudocode::class, 'id_pseudocode', 'id');
    }
}
