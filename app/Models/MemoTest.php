<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MemoTest extends Model
{
    use HasFactory;

    protected $fillable = ['name','images'];

    protected $casts = [
        'images' => 'array',
    ];
    
    public function gameSessions(): HasMany
    {
        return $this->hasMany(GameSession::class, 'memotest_id');
    }
}
