<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\dataPcht;
use App\Models\dataMmea;

class TestController extends Controller
{
    public function test()
    {
        // dd($this->count());
        return view('test',[
            'count' => $this->count(),
        ]);
    }

    public function count()
    {
        $jtPchtDate = dataPcht::whereBetween('tgl_obc',[carbon::today()->startOfMonth(),today()])
                            ->where('tgl_verifikasi','<',carbon::today()->startOfMonth())
                            ->orderBy('tgl_jtempo')
                            ->first()->tgl_jtempo;

        $jtPchtSum  = dataPcht::where('tgl_jtempo',$jtPchtDate)
                            ->where('tgl_verifikasi','<',carbon::today()->startOfMonth())
                            ->sum('rencet');

        $jtMmeaDate = dataMmea::whereBetween('tgl_obc',[carbon::today()->startOfMonth(),today()])
                            ->where('tgl_verifikasi','<',carbon::today()->startOfMonth())
                            ->orderBy('tgl_jtempo')
                            ->first()->tgl_jtempo;

        $jtMmeaSum  = dataMmea::where('tgl_jtempo',$jtMmeaDate)
                            ->where('tgl_verifikasi','<',carbon::today()->startOfMonth())
                            ->sum('rencet');

        $pchtVerif = dataPcht::whereBetween('tgl_obc',[carbon::today()->startOfMonth(),today()])
                            ->where('tgl_verifikasi',today())
                            ->get()
                            ->unique('no_obc')
                            ->count('no_obc');

        $pchtSisa = dataPcht::whereBetween('tgl_obc',[carbon::today()->startOfMonth(),today()])
                            ->where('tgl_verifikasi','<',carbon::today()->startOfMonth())
                            ->get()
                            ->unique('no_obc')
                            ->count('no_obc');

        $mmeaVerif = dataMmea::whereBetween('tgl_obc',[carbon::today()->startOfMonth(),today()])
                            ->where('tgl_verifikasi',today())
                            ->get()
                            ->unique('no_obc')
                            ->count('no_obc');

        $mmeaSisa = dataMmea::whereBetween('tgl_obc',[carbon::today()->startOfMonth(),today()])
                            ->where('tgl_verifikasi','<',carbon::today()->startOfMonth())
                            ->get()
                            ->unique('no_obc')
                            ->count('no_obc');

        return [
            'pchtVerif' => $pchtVerif,
            'pchtSisa'  => $pchtSisa,
            'mmeaVerif' => $mmeaVerif,
            'mmeaSisa'  => $mmeaSisa,
            'jtPchtDate'=> $jtPchtDate,
            'jtMmeaDate'=> $jtMmeaDate,
            'jtPchtSum' => $jtPchtSum,
            'jtMmeaSum' => $jtMmeaSum,
        ];
    }
}
