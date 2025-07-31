<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    
    public function users()
    {
        return $this->hasMany(User::class); // An entity can have many users. This is used to reference the id in the entities table to the entity_id in the users table.
    }
}
