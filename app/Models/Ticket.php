<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'user_id',
        'priority_id',
        'category_id',
        'status_id',
        'workspace_id'
    ];

    public function messages(){
        $this->hasMany(Message::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function client(){
        $this->belongsTo(Client::class);
    }

    public function priority(){
        $this->belongsTo(Priority::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function status(){
        $this->belongsTo(Status::class);
    }
}
