<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\Villager;
use App\Models\VillagerCriteria;
use App\Traits\Helpers;
use App\Traits\Maut;
use Illuminate\Http\Request;

class SpkController extends Controller
{
    use Helpers, Maut;
    
    public function index()
    {
        $villagers = Villager::all();

        return view('admin.spk.index', [
            'title'     => 'spk',
            'subtitle'  => '',
            'count'     => count($villagers),
            'active'    => 'spk',
        ]);
    }

    public function calculate()
    {
        // $villager = $this->getVillagerId();
        $villagerData = Villager::all();
        $criteria = Criteria::all();
        $criteriaData = VillagerCriteria::all();
        // $criteria = $this->getCriteria();
        // $count = $this->countCatinCriteria($villager->toArray());

        // dump($villagerData);
        // dd();

        $a = [];
        $min = [];
        $max = [];
        $range = [];
        $aCalculate = [];
        $res = [];

        $data = [];
        $sortData = [];

        for ($i=0; $i < count($villagerData); $i++) { 
            $data[$i]['villager']['id'] = $villagerData[$i]->id ;
            $data[$i]['villager']['name'] = $villagerData[$i]->name ;
            for ($j=0; $j < count($criteria); $j++) { 

                $res = $criteriaData->where('criteria_id', $criteria[$j]->id)->where('villager_id', $villagerData[$i]->id)->first();

                $a[$i][$j] = $res->conversion;
                $val = $criteriaData->where('criteria_id', $criteria[$j]->id)->pluck('conversion');

                $min[$i] = $this->minVal($val->toArray());
                $max[$i] = $this->maxVal($val->toArray());
                $aCalculate[$i][$j] = $this->countA($a[$i][$j], $min[$i], $max[$i]);
                
                $data[$i]['a'][$j] = $a[$i][$j];
                $data[$i]['aCalculate'][$j] = $aCalculate[$i][$j];
                $data[$i]['min'] = $min[$i];
                $data[$i]['max'] = $max[$i];
            }
            $range[$i] = $this->range($max[$i], $min[$i]);
            $data[$i]['range'] = $range[$i];
            $data[$i]['value'] = $this->rank($data[$i]['aCalculate'], $criteria);
        }

        foreach($data as $item) {
            foreach($item as $key => $value){
                if(!isset($sortData[$key])){
                    $sortData[$key] = array();
                }
                $sortData[$key][] = $value;
            }
        }

        array_multisort($sortData['value'], SORT_DESC, $data);

        return response()->json($data);
    }
}
// 