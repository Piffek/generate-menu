<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $fillable = [
        'id',
        'name',
        'parent_id'
    ];

    public $timestamps = false;

    public function childs()
    {
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }
}