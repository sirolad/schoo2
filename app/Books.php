<?php

namespace Sirolad;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    /**
     * Enable mass assignment
     *
     * @var array
     */
    protected $fillable = ['title', 'author', 'sbn_code', 'year'];
}
