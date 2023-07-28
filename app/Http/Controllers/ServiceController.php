<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Services\FileService;
use App\Models\Problem;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add_service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $image = FileService::storeImageFromRequest("services");
        $service = Service::create([
            'name' => $request['name'],
            'description' => $request['description']
            // 'thumbnail' => $image['url']
        ]);
        return redirect()->route('services.index')->with("success", 'Service Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $image = FileService::storeImageFromRequest("services");
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'thumbnail' => 'required|image|mimes:jpg,png,jpeg,svg'
        ]);
        // FileService::deleteFileFromUrl($service->thumbnail);
        // $request->merge(['thumbnail' => $image['url']]);
        $service->update([
            'name' => $request['name'],
            'description' => $request['description'],
            // 'thumbnail' => $image['url']
        ]);
        return redirect()->route('services.index')->with('success', "Service Deleted Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service) {
            $service->delete();
            return redirect()->back()->with('success', "deleted sucessfully");
        } else
            return ('no service');
    }

    public function user()
    {
        $services = Service::all();
        if (Auth::user()->type === 'user') {
            $services = $services->where('id', Auth::id());
        };
        $services = $services;
        return view('users.service.index', compact('services'));
    }
}
