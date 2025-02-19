<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onomatope extends Model
{
    protected $table = 'onomatopes';
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'memo',
        'image_url',
    ];

    use HasFactory;

    public function getByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function category()
    {
        return $this->belongsTo(Category::class); 
    }

    public function users(){

        return $this->belongsToMany(User::class);
    }
    
}