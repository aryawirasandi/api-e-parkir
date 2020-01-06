<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Parkiran extends Model 

{
    protected $table = 'parkir';
    protected $fillable = [
        'id_reservasi','jenis_parkiran'
    ];
    protected $hidden = [
        'id_reservasi',
    ];
    public function listPaslon()
    {
        return $this->all();
    }


}