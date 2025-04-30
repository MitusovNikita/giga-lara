<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Db;


class DbController
{
    public function transaction() : bool
    {
        // вывожу всех users через Eloquent
        // $users = User::all();

        // пример транзакции силами Laravel
        DB::transaction(
            function() {
                $userOne = User::find(1);
                $userTwo = User::find(2);

                $userOneName = $userOne->name;
                $userTwoName = $userTwo->name;

                $userOne->name = $userTwoName;
                $userTwo->name = $userOneName;

                $userOne->save();
                $userTwo->save();
            }
        ,'READ COMMITTED');
        // уровень изоляции указывает как эта транзакция видит изменения других транзакций

        return true;
    }
}
