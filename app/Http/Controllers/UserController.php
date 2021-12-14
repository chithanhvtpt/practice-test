<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }

    public function showFormCreate()
    {
        $categories = Category::all();
        return view("backend.user.create", compact("categories"));
    }

    public function create(Request $request)
    {
        $request->validate([
            "category_id" => "required",
            "name" => "required",
            "birthday" => "required",
            "sex" => "required",
            "phone" => "required|min:9|max:10",
            "cmnd" => "required|min:8|max:9",
            "email" => "required|email",
            "address" => "required"
        ]);
        $this->userRepository->create($request);
        toastr()->success("Create Success");
        return redirect()->route("users.list");
    }


    public function delete($id)
    {
        $this->userRepository->delete($id);
        toastr()->success("Delete Success");
        return redirect()->route("users.list");
    }

    public function showFormEdit($id)
    {
        $categories = Category::all();
        $user =  $this->userRepository->getById($id);
        return view("backend.user.edit", compact("categories", "user"));

    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            "category_id" => "required",
            "name" => "required",
            "birthday" => "required",
            "sex" => "required",
            "phone" => "required|min:9|max:10",
            "cmnd" => "required|min:8|max:9",
            "email" => "required|email",
            "address" => "required"
        ]);
        $this->userRepository->edit($request, $id);
        toastr()->success("Update Success");
        return redirect()->route("users.list");
    }

    public function search(Request $request)
    {
        $search = $request->input("search");
        $users = User::query()->where("name", "like", "%{$search}%")->get();
        return view("backend.user.search", compact("users"));
    }
}
