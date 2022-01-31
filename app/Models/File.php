<?php

namespace App\Models;

use App\Models\User;
use App\Models\Access;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['unique', 'name', 'type', 'bin', 'access', 'access_type', 'file'];
    protected $with = ['access'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function access()
    {
        return $this->hasMany(Access::class)->witDefault();
    }

    public static function accessType()
    {
        return [
            'private' => 'Private',
            'global' => 'Global',
            'group' => 'Group'
        ];
    }
}
