<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Vendor extends Model
{
    use UuidTrait;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'active',
    ];
}
