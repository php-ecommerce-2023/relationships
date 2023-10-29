<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function project()
    {
        // TODO: Implement project() method.
        // Figure out which method to use to correctly define the relationship
        // https://laravel.com/docs/10.x/eloquent-relationships#many-to-many
    }
}
