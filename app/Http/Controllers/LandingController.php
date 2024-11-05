<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Mentor;
use App\Models\OutsoleOut;
use App\Models\OutsoleIn;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Data Outsole Out dan total untuk setiap ukuran
        $outsolesout = OutsoleOut::all()->map(function ($outsoleout) {
            $outsoleout->total_size = [
                'size_36' => $outsoleout->size_36,
                'size_37' => $outsoleout->size_37,
                'size_38' => $outsoleout->size_38,
                'size_39' => $outsoleout->size_39,
                'size_40' => $outsoleout->size_40,
                'size_41' => $outsoleout->size_41,
                'size_42' => $outsoleout->size_42,
            ];
            return $outsoleout;
        });

        $outsolesoutSizes = [
            36 => $outsolesout->sum('total_size.size_36'),
            37 => $outsolesout->sum('total_size.size_37'),
            38 => $outsolesout->sum('total_size.size_38'),
            39 => $outsolesout->sum('total_size.size_39'),
            40 => $outsolesout->sum('total_size.size_40'),
            41 => $outsolesout->sum('total_size.size_41'),
            42 => $outsolesout->sum('total_size.size_42'),
        ];
        $totalOutsoleOut = array_sum($outsolesoutSizes);

        // Data Outsole In dan total untuk setiap ukuran
        $outsoles = OutsoleIn::all()->map(function ($outsole) {
            $outsole->total_size = [
                'size_36' => $outsole->size_36,
                'size_37' => $outsole->size_37,
                'size_38' => $outsole->size_38,
                'size_39' => $outsole->size_39,
                'size_40' => $outsole->size_40,
                'size_41' => $outsole->size_41,
                'size_42' => $outsole->size_42,
            ];
            return $outsole;
        });

        $outsolesSizes = [
            36 => $outsoles->sum('total_size.size_36'),
            37 => $outsoles->sum('total_size.size_37'),
            38 => $outsoles->sum('total_size.size_38'),
            39 => $outsoles->sum('total_size.size_39'),
            40 => $outsoles->sum('total_size.size_40'),
            41 => $outsoles->sum('total_size.size_41'),
            42 => $outsoles->sum('total_size.size_42'),
        ];
        $totalOutsoleIn = array_sum($outsolesSizes);

        // Perbandingan Persentase OutsoleOut terhadap OutsoleIn
        $percentOutsoleComparison = $totalOutsoleIn > 0 ? ($totalOutsoleOut / $totalOutsoleIn) * 100 : 0;

        return view('dashboard', compact('totalOutsoleIn', 'totalOutsoleOut', 'percentOutsoleComparison', 'outsolesSizes', 'outsolesoutSizes'));
    }

}
