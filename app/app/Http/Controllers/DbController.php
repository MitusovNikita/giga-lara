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

    public function baseCommands()
    {
        // получить все записи
        $var = User::all();

        // найти запись по id (вызовет 404 ошибку)
        $var = User::findOrFail(1);

        // найти запись по условию
        $var = User::where('id', '<', 2)->first();

        // создать новую запись
//        User::create(
//            array(
//                'name' => 'Billy',
//                'email' => 'mit@mail.com',
//                'password' => '123'
//            )
//        );

        // обновить запись
        $user = User::find(16);

//        $user->update(
//            array(
//                'name' => 'Max',
//                'password' => '233424'
//            )
//        );

        // удалить запись
//        $user = User::find(16);
//        $user->delete();

        // сортировка
        $var = User::orderBy('name')->get();

        // агрегирующие функции
        $var = User::all()->count();
    }
}
