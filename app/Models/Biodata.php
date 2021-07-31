<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'biodata';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = true;
    protected $fillable = ['id', 'name', 'gender', 'age', 'email', 'place_of_birth', 'address', 'updated_at', 'created_at'];

    public function result()
    {
        return $this->hasMany(Result::class, 'biodata_id');
    }
}
