<?php

namespace App\Repository\Modules;
use App\Interface\Modules\AccountRepositoryInterface;
use App\Models\Account;

class AccountRepository implements AccountRepositoryInterface{

public function all(){
    
    $account=  account::all();
    return $account;
}

public function create($input){
    return account::create($input);

}

public function find($account){
    return account::findorfail($account);

}

public function update($request, $account){

        $input = $request->all();
        $accounts = account::find($account->id);
        $accounts->fill($input)->save();

}

public function delete($account){

    return account::findorfail($account)->delete();

    // account::findOrFail($account->id)->delete();
}

}

?>