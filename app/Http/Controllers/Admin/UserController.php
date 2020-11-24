<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\RegisterUserRequest;

/* Importando repositorio */
use App\Repositories\Admin\User\UserRepositories;

/* Importación de modelos */
use App\User;
use App\Models\Question;


class UserController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositories $user)
    {
        $this->user = $user;
    }

    public function index(){    	
    	return view('admin.user.index',[ 'users' => User::all() ]);
    }

    public function show(user $user){
        return view('admin.user.show',['user' => $user]);
    }

    public function create(){
    	return view('admin.user.create',[ 
                  'questions' => Question::all(), 
                  'roles' => $this->user->allRoles()
                 ]);
    }

    public function store(RegisterUserRequest $request){
    	$this->user->createdUser($request);
    	return redirect()->route('user.index');
    }

    public function destroy(user $user){
        $user->delete();
        return redirect()->route('user.index');
    }

    public function edit(user $user){
        return view('admin.user.edit',['user' => $user, 
                                       'questions' => Question::all(), 
                                       'roles' => $this->user->allRoles()
                                      ]);
    }

    public function updated(user $user, Request $request){
        $this->user->update($user,$request);
        return redirect()->route('user.index');
    }
}
