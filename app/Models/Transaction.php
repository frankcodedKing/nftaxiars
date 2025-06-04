<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    
    protected $fillable = ['user_id', 'artwork_id', 'amount', 'payment_method'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function artwork() {
        return $this->belongsTo(Artwork::class);
    }
}
