<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familles extends Model
{
    protected $table = 'familles';
    protected $primaryKey = 'id';
    protected $fillable = ['familles'];




    use HasFactory;
}
?>
