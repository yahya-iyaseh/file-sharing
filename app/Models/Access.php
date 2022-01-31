<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Access extends Model
{
    use HasFactory;
    protected $fillable =  ['email', 'file_id'];


    public function file(){
        return $this->belongsTo(File::class);
    }
}
