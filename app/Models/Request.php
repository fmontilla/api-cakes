<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cake_id',
        'client_id',
        'quantity'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function cake()
    {
        return $this->belongsTo(Cake::class);
    }
}
