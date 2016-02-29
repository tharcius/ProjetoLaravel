<?php

namespace ProjetoX\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{
    protected $fillable = [
        'name',
        'description',
        'progress',
        'status',
        'due_date',
        'owner_id',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function owner(){
        return $this->belongsTo(User::class);
    }
}
