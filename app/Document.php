<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'prisioners_id', 'name', 'address', 'purpose', 'relationship', 'job', 'expired', 'user_id', 
    ];

    public function officer() {
        return $this->belongsTo(Officer::class, 'officers_id', 'id');
    }
    public function users() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function prisioner() {
        return $this->belongsTo(Prisioner::class, 'prisioners_id', 'id');
    }
}
