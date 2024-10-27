<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    public $timestamps = true;
    protected $table = 'anggota';
    protected $fillable = ['nama', 'hp'];
    protected $guarded = ['id'];
}
