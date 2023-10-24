<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    protected $fillable = [
        'id', 'circuito', 'estado','updated_at'
	];
}
?>