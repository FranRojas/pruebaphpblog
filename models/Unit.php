<?php
// example of using model with eloquent
namespace models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'eldar_units';
    protected $fillable = ['name'];
}
