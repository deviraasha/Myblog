<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInput extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'category_input';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'int';
    protected $fillable = ['id', 'name_category'];

    public function variable()
    {
        return $this->hashMany(VariableInput::class, 'category_input_id');
    }
}
