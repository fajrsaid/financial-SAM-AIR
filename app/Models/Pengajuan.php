<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pengajuan extends Model
{
    use HasFactory;
    // protected $fillabel = ['nama_project','tanggal_pengajuan','total','status_id'];
    protected $guarded=[];
    public $timestamps = false;

}
