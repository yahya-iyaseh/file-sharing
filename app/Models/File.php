<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['unique', 'name', 'type', 'bin', 'access', 'access_type', 'file', 'description', 'user_id'];
    protected $with = [];
    public function user()
    {
        return $this->belongsTo(User::class);
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
