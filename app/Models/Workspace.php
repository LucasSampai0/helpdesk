<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
