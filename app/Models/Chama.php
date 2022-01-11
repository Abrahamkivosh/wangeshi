<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chama extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * The users that belong to the Chama
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'chama_user')->withPivot(['approved','received','receive_date'])->withTimestamps();
    }
}
