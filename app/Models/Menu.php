<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nome',
        'icon',
        'sub',
        'route',
        'order'
    ];

    public function subs()
    {
        return $this->hasMany(self::class, 'sub');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'sub');
    }

    public function hasSub()
    {
        return !! $this->subs->count();
    }
}
