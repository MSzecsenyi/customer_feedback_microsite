<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'issuer_ip',
        'first_name',
        'last_name',
        'description',
        'email',
        'location',
        'photo',
    ];

    public function of_company()
    {
        return $this->belongsTo(Company::class);
    }

    public function of_project()
    {
        return $this->belongsTo(Project::class);
    }
}
