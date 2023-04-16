<?php

namespace App\Traits;

use App\Models\Catin;
use App\Models\CatinCriteria;
use App\Models\Criteria;

trait Helpers {
    
    protected function pendidikanCheck($value)
    {
        $res = '';
        switch ($value) {
            case $value == 'sarjana':
                $res = 1;
                break;
            
            case $value == 'slta' || 'sma':
                $res = 2;
                break;

            case $value == 'smp':
                $res = 3;
                break;

            case $value == 'sd':
                $res = 4;
                break;
            
            default:
                $res = 5;
                break;
        }
        return $res;
    }

    protected function tanggunganCheck($value) {
        $res = '';
        switch ($value) {
            case $value >= 2:
                $res = 5;
                break;
            
            case $value == 1:
                $res = 3;
                break;
            
            default:
                $res = 1;
                break;
        }
        return $res;
    }

    protected function pekerjaanCheck($value) {
        $res = '';
        switch ($value) {
            case $value == 'wiraswasta':
                $res = 1;
                break;
            
            case $value <= 'buruh' || 'petani':
                $res = 3;
                break;

            default:
                $res = 5;
                break;
        }
        return $res;
    }

    protected function umurCheck($value) {
        $res = '';
        switch ($value) {
            case $value > 60:
                $res = 5;
                break;
            
            case $value < 40:
                $res = 1;
                break;
            
            default:
                $res = 3;
                break;
        }
        return $res;
    }

    protected function penghasilanCheck($value) {
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

    protected function riwayatPenyakitCheck($value) {
        $res = '';
        switch ($value) {
            case $value > 2:
                $res = 5;
                break;

            case $value >= 1:
                $res = 3;
                break;
            
            default:
                $res = 1;
                break;
        }
        return $res;
    }

}