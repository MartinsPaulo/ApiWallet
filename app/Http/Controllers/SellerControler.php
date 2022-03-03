<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class SellerControler extends Controller
{
    public function getClients ($code)
    {
        $seller = Seller::where('code',$code)->with(['wallet.clients'])->first();

        $clients = [];

        //get all clients in te relationship and add to array
        foreach ($seller->wallet as $wallet){
            array_push($clients,$wallet->clients->toArray());
        }

        return response()->json(["clients"=>$clients]);
    }
}
