<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'url',
        'color',
        'logo',
        'company_name',
        'image'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
