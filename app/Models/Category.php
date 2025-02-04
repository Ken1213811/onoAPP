<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\OnoController;

class Category extends Model
{
    use HasFactory;

    public function ono()
    {
        return $this->hasMany(onomatope::class);
    }

    public function getByCategory(int $limit_count = 5)
    {
        
        return $this->ono()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
