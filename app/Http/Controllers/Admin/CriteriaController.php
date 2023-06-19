<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Criteria\StoreCriteriaRequest;
use App\Http\Requests\Admin\Criteria\UpdateCriteriaRequest;
use App\Models\Criteria;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.criteria.index', [
            'title'     => 'kriteria',
            'subtitle'  => '',
            'data'      => '',
            'active'    => 'criteria',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.criteria.create', [
            'title'     => 'kriteria',
            'subtitle'  => 'create',
            'data'      => '',
            'active'    => 'criteria',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriteriaRequest $request)
    {
        $criteria = new Criteria;
        
        $criteria->name = $request->name;
        $criteria->value = $request->value;
        $criteria->as = $request->as;

        $criteria->save();

        return redirect()->route('admin.kriteria.index')->with('success_msg', 'Data Kriteria ' . $request->name .' berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Criteria $kriterium)
    {
        // dd($kriterium);
        return view('admin.criteria.edit', [
            'title' => 'kriteria',
            'subtitle' => 'detail',
            'criteria' => $kriterium,
            'active' => 'criteria',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criteria $kriterium)
    {
        return view('admin.criteria.edit', [
            'title' => 'kriteria',
            'subtitle' => 'edit',
            'criteria' => $kriterium,
            'active' => 'criteria',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCriteriaRequest $request, Criteria $kriterium)
    {
        $kriterium->fill($request->all());
        if ($kriterium->isDirty()) {
            $kriterium->save();
            return redirect()->route('admin.kriteria.index')->with('success_msg', 'Data Kriteria ' . $kriterium->name . ' berhasil dirubah');
        } else {
            return redirect()->route('admin.kriteria.index')->with('success_msg', 'Data Kriteria tidak ada perubahan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getAllData(Request $request)
    {
        if($request->ajax()) {
            $data = Criteria::all();        
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
                                <a href="'.route("admin.kriteria.destroy", $row->id).'" class="btn btn-sm btn-danger hapus-kriteria" data-id="'.$row->id.'">
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
