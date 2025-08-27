<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapels';
    protected $fillable = [ 'nama_mapel'];
    protected $guarded = ['Kode_mapel'];
}       
