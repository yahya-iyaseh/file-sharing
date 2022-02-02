<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['unique', 'name', 'type', 'bin', 'access', 'access_type', 'file', 'description', 'user_id', 'expired_date'];
    protected $with = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSizeAttribute()
    {
        return  number_format(\Storage::size($this->file) / 1024, 2) . ' MB';
    }
    public static function accessType()
    {
        return [
            'private' => 'Private',
            'global' => 'Global',
            // 'group' => 'Group'
        ];
    }
}
