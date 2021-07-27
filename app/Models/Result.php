<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'trn_result';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'int';
    public $timestamps = false;
    protected $fillable = ['id', 'biodata_id', 'category_input_id', 'v1', 'v2', 'v3', 'v4', 'v5', 'max_linear', 'rule', 'result'];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'biodata_id');
    }
}
