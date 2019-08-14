<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;
use Lcobucci\JWT\Parser;


class AdminController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::guard('admin')->user();
            $success['token'] =  $user->createToken('admin')-> accessToken;
            return response()->json([$success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = admin::create($input);
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus);
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */

    public function getuser(){
        $user = DB::table('admins')
            ->get();
        return response()->json([
            'status' => true,
            'data' => $user
        ], $this-> successStatus);
    }

    public function logout(Request $request){
        if ($value = $request->bearerToken()) {
            $id = (new Parser())->parse($value)->getHeader('jti');
            DB::table('oauth_access_tokens')
                ->where('id', $id)
                ->delete();
            return response()->json([
                'message' => 'Successfully logged out',
                'status' => $this->successStatus
            ]);
        }
        else{
            return response()->json(['message' => 'Gagal Logout']);
        }




    }
}
