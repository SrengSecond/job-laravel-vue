<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'tags', 'location', 'company', 'email', 'salary','img'];

    public static function showTags($tags)
    {

    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tags'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tags'] . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search'] . '%')
                ->orWhere('tags', 'like', '%' . $filters['search'] . '%');
        }
    }

}
