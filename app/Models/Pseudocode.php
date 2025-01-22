<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pseudocode extends Model
{
    use HasFactory;

    protected $table = 'data_pseudocode';
    protected $guarded = ['id'];

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id');
    }

    public function sourcecode()
    {
        return $this->hasMany(Sourcecode::class, 'id_pseudocode', 'id');
    }
}
