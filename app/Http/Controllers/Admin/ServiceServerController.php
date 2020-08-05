<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ServiceServer;
use Illuminate\Http\Request;
use App\Service;

class ServiceServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceServers = ServiceServer::get();
        return view('auth.admin.servers.index', compact('serviceServers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get();
        return view('auth.admin.servers.add-form', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ServiceServer::create($request->all());
        return redirect()->route('serviceServers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceServer  $serviceServer
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceServer $serviceServer)
    {
        return view('auth.admin.servers.show', compact('serviceServer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceServer  $serviceServer
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceServer $serviceServer)
    {
        $services = Service::get();
        return view('auth.admin.servers.add-form', compact('serviceServer','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceServer  $serviceServer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceServer $serviceServer)
    {
        $serviceServer->update($request->all());
        return redirect()->route('serviceServers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceServer  $serviceServer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceServer $serviceServer)
    {
        $serviceServer->delete();
        return redirect()->route('serviceServers.index');
    }
}
