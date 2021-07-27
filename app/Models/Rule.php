<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'rule';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'int';
    protected $fillable = ['id', 'v1', 'v2', 'v3', 'v4', 'v5', 'then'];

}
