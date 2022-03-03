<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers';
    protected $fillable = ['full_name','short_name','date_of_hire'];
    protected $primaryKey = 'code';

    public function wallet(): hasMany
    {
        return $this->hasMany(Wallet::class,'seller_code','code');
    }
}
