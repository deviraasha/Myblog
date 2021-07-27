<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariableInput extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'variable_input';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'int';
    protected $fillable = ['id', 'category_input_id', 'name_variable'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_input_id');
    }
}
