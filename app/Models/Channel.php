<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{

    protected $table = 'channel_v2';

    protected $primaryKey = 'channel_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'user_id', 'name'
    ];
}
