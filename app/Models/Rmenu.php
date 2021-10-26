<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmenu extends Model
{
    use HasFactory;

    protected $table = 'r_menu';
    protected $primaryKey = 'idr_menu';

    protected $fillable = [
        'idr_parent',
        'name_menu',
        'kode_menu',
        'position_menu',
        'controller_menu',
        'icon_menu',
        'order_menu',
        'status_menu',
        'read_menu',
        'add_menu',
        'edit_menu',
        'delete_menu',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
