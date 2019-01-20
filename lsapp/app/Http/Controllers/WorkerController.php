<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;
use App\Worker;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //ROOM1 FUNCTION
    public function index()
    {
        Worker::inRandomOrder()->where('room_id', '1')->take(10)->update(['location'=>'1']);
        Worker::inRandomOrder()->where('location', '1')->update(['table_id'=> '1']);
        $posts = Worker::where('location', '1')->get();

        return view('posts.index')->with('posts', $posts);
    }

    //ROOM2 FUNCTION
    public function Room2index()
    {
        Worker::inRandomOrder()->where('room_id', '2')->update(['location'=>'2']);
        Worker::inRandomOrder()->where('location', '2')->update(['table_id'=>'2']);
        $posts = Worker::where('location', '2')->get();

        return view('posts.index')->with('posts', $posts);
    }

    //ROOM3 FUNCTION
    public function Room3index()
    {
        Worker::inRandomOrder()->where('room_id', '3')->take(8)->update(['location'=>'3']);
        Worker::inRandomOrder()->where('location', '3')->update(['table_id'=>'3']);
        $posts = Worker::where('location', '3')->get();

        return view('posts.index')->with('posts', $posts);
    }

    //FREE AREA FUNCTION
    public function FreeSpaceindex()
    {
        Worker::inRandomOrder()->where('location', '4')->update(['table_id'=>'4']);
        $posts = Worker::where('location', '4')->get();

        return view('posts.index')->with('posts', $posts);
    }

    //ISLEMLERI SIFIRLA BUTTON FUNCTION
    public function Deleteindex(){
        Worker::where('location', '1','2','3','4')->update(['location'=>'4']);
        Worker::where('location', '1','2','3','4')->update(['table_id'=>'']);
        $posts = Worker::where('location', '1')->get();

        return view('posts.index')->with('posts', $posts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        //Post::inRandomOrder()->where('room_id', '1')->take(2)->update(['worker_location'=>'1']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
