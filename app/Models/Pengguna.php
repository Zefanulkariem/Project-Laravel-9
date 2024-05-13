<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama']; //pilih pilih field dalam table
    //protected $table = ['penggunas']; //all in table
    public $timelaps = true;

    public function telepon()
    {
        return $this->hasOne(Telepon::class);
    }
}
