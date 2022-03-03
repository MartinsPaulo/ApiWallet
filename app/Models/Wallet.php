<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wallet extends Model
{
    use HasFactory;

    protected $table = 'Wallet';
    protected $fillable = ['seller_code','client_code'];
    protected $primaryKey = 'code';

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class,'code','client_code');
    }

    public function sellers():BelongsTo
    {
        return $this->BelongsTo(Seller::class,'seller_code','code');
    }
}
