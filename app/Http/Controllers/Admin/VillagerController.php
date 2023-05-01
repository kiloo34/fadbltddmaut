<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Villager\StoreVillagerRequest;
use App\Http\Requests\Admin\Villager\UpdateVillagerRequest;
use App\Models\Villager;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.villager.index', [
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
        return view('admin.villager.create', [
            'title'     => 'warga',
            'subtitle'  => 'create',
            'data'      => '',
            'active'    => 'village',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVillagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Villager $warga)
    {
        return view('admin.villager.detail', [
            'title'     => 'warga',
            'subtitle'  => 'detail',
            'village'   => $warga,
            'active'    => 'village',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Villager $warga)
    {
        return view('admin.villager.edit', [
            'title'     => 'warga',
            'subtitle'  => 'detail',
            'villager'  => $warga,
            'active'    => 'village',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVillagerRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Villager $warga)
    {
        //
    }

    public function getAllData(Request $request)
    {
        if($request->ajax()) {
            $data = Villager::all();        
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    $name = '';
                    $name = $row->name;
                    return $name;
                })
                ->addColumn('alias', function($row){
                    $alias = '';
                    $alias = ucwords($row->as);
                    return $alias;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route("admin.kriteria.show", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("admin.kriteria.edit", $row->id).'" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="fas fa-edit"></i>
                                    Hapus
                                </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return response()->json(['text'=>'only ajax request']);
        }
    }
}
