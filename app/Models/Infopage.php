<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infopage extends Model
{
    protected $fillable = ['title', 'subtitle', 'slug', 'content', 'is_form', 'published'];

    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }
}
