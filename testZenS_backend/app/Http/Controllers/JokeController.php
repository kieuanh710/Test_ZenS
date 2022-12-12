<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class JokeController extends Controller
{
    private $jokes;
    public function __construct()
    {
        $this->jokes = new Joke();
    }
    public function joke()
    {
        $listJoke = $this->jokes->getAll();
        return view('joke', compact('listJoke'));
    }
    public function addFunny(Request $request, $id)
    {
        // reload session
        session()->flush('cart');
    
        $jokes = Joke::find($id);
        $cart = session()->get('cart');
        //thêm mới
        $cart[$id] = [
            'id' => $jokes->id,
            'funny' => 1,
            'notfun' => 0,
        ];
        
        $funny = DB::table('joke')->where('id', $id)->update(['funny' => 1, 'notfun' => 0]);
        session()->put('cart', $cart);
        
        // check output
        // echo "<pre>";
        // print_r( session()->get('funny'));
       
    }
    public function addNotFun(Request $request, $id)
    {
        $jokes = Joke::find($id);
        $cart = session()->get('cart');
       
            //thêm mới
        $cart[$id] = [
            'id' => $jokes->id,
            'notfun' => 1,
            'funny' => 0,
        ];
        session()->put('cart', $cart);
        $notfun = DB::table('joke')->where('id', $id)->update(['notfun' => 1, 'funny' => 0]);;
    }

    //show check
    // public function detail(){
    //     // echo "<pre>";
    //     // print_r(session()->get('cart'));
    //     // $jokes = Joke::find($id);
    //     $carts = session()->get('cart');
       
    //     return view('cart', compact('carts'));
    // }
    
   
}