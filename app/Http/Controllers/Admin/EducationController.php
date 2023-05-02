<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.education.index', [
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
        return view('admin.education.create', [
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
    public function show(Education $pendidikan)
    {
        return view('admin.education.detail', [
            'title'     => 'warga',
            'subtitle'  => 'detail',
            'village'   => $pendidikan,
            'active'    => 'village',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $pendidikan)
    {
        return view('admin.education.edit', [
            'title'     => 'warga',
            'subtitle'  => 'detail',
            'villager'  => $pendidikan,
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
