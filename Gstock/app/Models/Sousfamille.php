<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sousfamille extends Model
{

    protected $table = 'sousfamilles';
    protected $primaryKey = 'id';
    protected $fillable = ['sousfamilles'];

    use HasFactory;
}?>
