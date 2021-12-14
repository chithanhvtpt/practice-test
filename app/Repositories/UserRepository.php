<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\ipl\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function create(Request $request)
    {
        $data = $request->only("category_id", "name", "birthday", "sex", "phone", "cmnd", "email", "address");
        $user = User::query()->create($data);
        return $user;
    }

    public function edit(Request $request, $id)
    {
        User::query()->findOrFail($id);
        $data = $request->only("category_id", "name", "birthday", "sex", "phone", "cmnd", "email", "address");
        return User::query()->where("id", "=", $id)->update($data);
    }


}
