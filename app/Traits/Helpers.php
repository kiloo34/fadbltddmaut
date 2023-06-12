<?php

namespace App\Traits;

use App\Models\Education;
use App\Models\Job;
use App\Models\Villager;

trait Helpers {
    
    protected function pendidikanCheck($value)
    {
        return Education::select('type')->where('id', $value)->first()->type;
    }

    protected function tanggunganCheck($value) 
    {
        $res = '';
        if ($value > 2) {
            $res = 5;
        } elseif ($value == 1) {
            $res = 3;
        } else {
            $res = 1;
        }
        return $res;
    }

    protected function pekerjaanCheck($value) 
    {
        return Job::select('type')->where('id', $value)->first()->type;
    }

    protected function umurCheck($value) 
    {
        $res = '';
        if ($value > 60) {
            $res = 5;
        } elseif ($value < 40) {
            $res = 1;
        } else {
            $res = 3;
        }
        return $res;
    }

    protected function penghasilanCheck($value) 
    {
        $res = '';
        switch ($value) {
            case $value < 20000:
                $res = 5;
                break;

            case $value > 40000:
                $res = 1;
                break;
            
            default:
                $res = 3;
                break;
        }
        return $res;
    }

    protected function riwayatPenyakitCheck($value) 
    {
        $res = '';
        if ($value == 0) {
            $res = 1;
        } elseif ($value > 2) {
            $res = 5;
        } else {
            $res = 3;
        }
        
        return $res;
    }

    protected function getVillagerId()
    {
        return Villager::pluck('id');   
    }
}