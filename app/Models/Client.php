<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = ['cnpj','name','foundation_at'];
    protected $primaryKey = 'code';

    public function wallet():BelongsToMany
    {
        return $this->belongsToMany(Wallet::class,'client_code','code');
    }
}
