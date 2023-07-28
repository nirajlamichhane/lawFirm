<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProblemRequest;
use App\Mail\NewUserNotification;
use App\Models\Problem;
use App\Models\Service;
use App\Models\Updatecase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return('this is case page');
        $users = User::customer()->get();
        $cases = Problem::all();
        $services = Service::all();
        return view('admin.cases.index', compact("cases", "users", "services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = null;
        // dd($request->all());
        if ($request["user_id"] == "0") {
            $password = Str::random(8);
            $user = [
                'name' => $request['username'],
                'email' => $request['email'],
                'password' => bcrypt($password)
            ];
            $userId = User::create($user)->id;
            Mail::to(request('email'))->send(new NewUserNotification(
                array_merge($user, ['password' => $password])
            ));
        } else {
            $userId = $request['user_id'];
        }

        $request->merge(['customer_has_access' => $request['customer_has_access']  && $request['customer_has_access'] === 'on', 'user_id' => $userId]);
        Problem::create($request->only(['title', "user_id", 'service', 'description', 'next_hearing', 'customer_has_access', 'status']));



        return redirect()->back()->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $case = Problem::findorFail($id);
        return view('admin.cases.updateCase', compact('case'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problem = Problem::findOrFail($id);
        return view('admin.cases.edit', ['case' => $problem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problem $problem)
    {
        $request->merge(['customer_has_access' => $request['customer_has_access']   && $request['customer_has_access'] === 'on']);
        $problem->update($request->only('title', 'user_id', 'description', 'customer_has_access', 'type', 'next_hearing', 'status'));
        return redirect()->route('cases.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $case = Problem::find($id);
        $case->delete();
        return redirect()->back()->with("success", 'Case Deleted successfully');
    }
    public function updateCase(Request $request)
    {
        Updatecase::create($request->only('title', 'user_id', 'problem_id', 'service', 'status', 'next_hearing', 'description', 'customer_has_access'));
        return redirect()->route('cases.index')->with('success', 'Data updated successfuy');
    }
}
