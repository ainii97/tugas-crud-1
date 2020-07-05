<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table="Pertanyaan";
    protected $primaryKey="id";
    protected $fillable=['id','judul','isi'];
}
