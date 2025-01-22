<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = "data_level";
    protected $guarded = ['id'];

    public function pseudocode()
    {
        return $this->hasMany(Pseudocode::class, 'id_level', 'id');
    }
    
    public function sourcecode()
    {
        return $this->hasMany(Sourcecode::class, 'id_level', 'id');
    }
}
