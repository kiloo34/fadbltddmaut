<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Villager\StoreVillagerRequest;
use App\Http\Requests\Admin\Villager\UpdateVillagerRequest;
use App\Models\Criteria;
use App\Models\Education;
use App\Models\Job;
use App\Models\Villager;
use App\Models\VillagerCriteria;
use App\Traits\Helpers;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use function GuzzleHttp\Promise\all;

class VillagerController extends Controller
{
    use Helpers;
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
            // $villagerCriteria = VillagerCriteria::all();
            // $criteria = Criteria::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                    $name = '';
                    $name = ucwords($row->name);
                    return $name;
                })
                ->addColumn('age', function($row){
                    $age = '';
                    $age = $row->age;
                    return $age;
                })
                ->addColumn('dependent', function($row){
                    $dependent = '';
                    $dependent = $row->dependent;
                    return $dependent;
                })
                ->addColumn('job', function($row){
                    $job = '';
                    $job = ucwords($row->job->as);
                    return $job;
                })
                ->addColumn('earnings', function($row){
                    $earnings = '';
                    $earnings = 'Rp. '.$row->earnings;
                    return $earnings;
                })
                ->addColumn('education', function($row){
                    $education = '';
                    $education = ucwords($row->education->as);
                    return $education;
                })
                ->addColumn('condition', function($row){
                    $condition = '';
                    $condition = $row->condition;
                    return $condition;
                })
                ->addColumn('action', function($row){
                    $valueCount = VillagerCriteria::where('villager_id',$row->id)->count();
                    $criteriaCount = Criteria::all()->count();
                    $actionBtn = '';
                    $btnTitle = $valueCount == $criteriaCount ? 'Ubah Nilai'  : 'Tambah Nilai';
                    if ($valueCount == $criteriaCount) {
                        $actionBtn .= '<a href="'.route("admin.warga.kriteriaValForm", $row->id).'" class="btn btn-sm btn-primary my-1 mr-1">
                                        <i class="fas fa-plus"></i> '
                                        . $btnTitle .
                                    '</a>';
                        $actionBtn .= '<a href="'.route("admin.warga.show", $row->id).'" class="btn btn-sm btn-info my-1">
                                    <i class="fas fa-eye"></i>
                                    Detail
                                </a>
                                <a href="'.route("admin.warga.edit", $row->id).'" class="btn btn-sm btn-info my-1">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="fas fa-edit"></i>
                                    Hapus
                                </a>';
                    } else {
                        $actionBtn .= '<a href="'.route("admin.warga.show", $row->id).'" class="btn btn-sm btn-info my-1">
                                            <i class="fas fa-eye"></i>
                                                Detail
                                        </a>
                                        <a href="'.route("admin.warga.edit", $row->id).'" class="btn btn-sm btn-info my-1">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fas fa-edit"></i>
                                            Hapus
                                        </a>';
                        $actionBtn .= '<a href="'.route("admin.warga.kriteriaValForm", $row->id).'" class="btn btn-sm btn-primary my-1 mx-1">
                                        <i class="fas fa-plus"></i> '
                                        . $btnTitle .
                                    '</a>';
                    }

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return response()->json(['text'=>'only ajax request']);
        }
    }

    public function kriteriaVal()
    {
        dump('masuk');
        dd();
        $criteria = Criteria::all();
        $villager = Villager::all();
        $data = VillagerCriteria::all();
        
        return view('admin.villager.kriteriavillager', [
            'title' => 'warga',
            'subtitle' => '',
            'criteria' => $criteria,
            'villager' => $villager,
            'data' => $data,
            'active' => 'kriteriavillager',
        ]);
    }

    public function formValue(Villager $warga)
    {
        $criteria = Criteria::all();
        // $data = VillagerCriteria::all();
        // dump($criteria);
        // dd();
        
        return view('admin.villager.kriteriaVillagerForm', [
            'title' => 'warga',
            'subtitle' => '',
            'criterias' => $criteria,
            'warga' => $warga,
            'pendidikan' => Education::all(),
            'job' => Job::all(),
            'active' => 'kriteriavillager',
        ]);
    }

    public function storeKriteriaVal(Request $request, Villager $warga) 
    {
        $criterias = Criteria::all();

        $name = $request->name;
        $id = $request->id;

        $msg = '';

        if (count($name) == count($id)) {
            for ($i=1; $i <= count($id); $i++) {
                $conversion = '';

                if (isset($name[$i])) {
                    switch ($criterias[$i-1]) {
                        case $criterias->where('id', $id[$i])->first()->code == 'A1':
                            $conversion = $this->pendidikanCheck($name[$i]);
                            break;
                        
                        case $criterias->where('id', $id[$i])->first()->code == 'A2':
                            $conversion = $this->tanggunganCheck($name[$i]);
                            break;
                        
                        case $criterias->where('id', $id[$i])->first()->code == 'A3':
                            $conversion = $this->pekerjaanCheck($name[$i]);
                            break;
                        
                        case $criterias->where('id', $id[$i])->first()->code == 'A4':
                            $conversion = $this->umurCheck($name[$i]);
                            break;

                        case $criterias->where('id', $id[$i])->first()->code == 'A5':
                            $conversion = $this->penghasilanCheck($name[$i]);
                            break;
                        
                        case $criterias->where('id', $id[$i])->first()->code == 'A6';
                            $conversion = $this->riwayatPenyakitCheck((int) $name[$i]);
                            break;

                    }
                    $this->storeDataVillagerCriteria($warga->id, $id[$i], $name[$i], $conversion);
                    $msg = 'Data Kriteria Penduduk ' . $warga->name .' berhasil ditambah';
                } 
                else {
                    $msg = "Form Harus Diisi";
                    return redirect()->back()->with('error_msg', $msg);            
                }
            }
        } else {
            $msg = 'Internal server error';
        }
        return redirect()->route('admin.warga.index')->with('success_msg', $msg);
    }

    protected function storeDataVillagerCriteria($warga, $criteria, $value, $conversion)
    {
        VillagerCriteria::updateOrCreate(
            [
                'villager_id' => $warga,
                'criteria_id' => $criteria,
            ],
            [
                'value' => $value,
                'conversion' => $conversion,
                'created_by' => auth()->user()->id,
                'updated_by' => auth()->user()->id
            ]
        );
        // HistoryCatinCriteria::create([
        //     'catin_id' => $warga,
        //     'criteria_id' => $criteria,
        //     'value' => $value,
        //     'conversion' => $conversion,
        // ]);
    }
}
