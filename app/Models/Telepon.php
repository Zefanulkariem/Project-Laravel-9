<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;

    protected $fillable = ['id','nomor_telepon','pengguna_id']; //pilih pilih field dalam table
    //protected $table = ['penggunas']; //all in table
    public $timelaps = true;

    public function pengguna()
    {
        return $this->BelongsTo(Pengguna::class, 'pengguna_id');
    }
}
