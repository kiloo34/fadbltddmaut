<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.job.index', [
            'title'     => 'warga',
            'subtitle'  => '',
            'data'      => '',
            'active'    => 'village',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.job.create', [
            'title'     => 'warga',
            'subtitle'  => 'create',
            'data'      => '',
            'active'    => 'village',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $pekerjaan)
    {
        return view('admin.job.detail', [
            'title'     => 'warga',
            'subtitle'  => 'detail',
            'village'   => $pekerjaan,
            'active'    => 'village',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $pekerjaan)
    {
        return view('admin.job.edit', [
            'title'     => 'warga',
            'subtitle'  => 'detail',
            'villager'  => $pekerjaan,
            'active'    => 'village',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
