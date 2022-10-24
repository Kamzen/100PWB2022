<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['s_code',
        's_settlement',
        's_discount',
        's_register',
        's_vat',
        's_phone',
        's_email',
        's_contact',
        's_category',
        's_name',
        's_nb',];
}
