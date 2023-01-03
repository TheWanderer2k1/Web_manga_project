<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tentruyen', 'tomtat' , 'kichhoat' ,'slug_truyen', 'image','theloai_id',
    ];
    protected $primaryKey = 'id';
    protected $table = 'truyen' ;

    public function theloaitruyen()
    {
        return $this->hasMany('App\Models\TheLoaiTruyen');
    }
}
