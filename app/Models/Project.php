<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function registrations()
    {
        // TODO: Implement registrations() method.
        // Figure out which method to use to correctly define the relationship
        // https://laravel.com/docs/10.x/eloquent-relationships#one-to-many
    }
}
