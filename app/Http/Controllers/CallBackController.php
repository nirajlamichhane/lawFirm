<?php

namespace App\Http\Controllers;

use App\Models\CallBack;
use Illuminate\Http\Request;

class CallBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $callbacks = CallBack::all();
        return view('admin.callback.index', compact('callbacks'));
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
        // dd($request->all());
        CallBack::create($request->except("_token"));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallBack  $callBack
     * @return \Illuminate\Http\Response
     */
    public function show(CallBack $callBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CallBack  $callBack
     * @return \Illuminate\Http\Response
     */
    public function edit(CallBack $callBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CallBack  $callBack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CallBack $callBack)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallBack  $callBack
     * @return \Illuminate\Http\Response
     */
    public function destroy(CallBack $callBack, $id)
    {
        $call = CallBack::findOrFail($id);
        $call->delete();
        return redirect()->back();
    }

    public function markAsCompleted($id)
    {
        $callBack = CallBack::findOrFail($id);
        $callBack->update(['isComplete' => true]);
        return redirect()->back()->with("success", "Callback completed successfully!");
    }
}
