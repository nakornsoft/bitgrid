<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Province extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */



    protected $fillable = [
        'id',
        'province_id',
        'name',
        'code'
    ];
    protected $table = 'province_langs';
}
