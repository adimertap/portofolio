<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectBootcamp extends Controller
{
    public function index()
    {
        return view('project.bootcamp.bootcamp');
    }

    public function bengkel()
    {
        return view('project.e-bengkel.bengkel');
    }

    public function payroll()
    {
        return view('project.payroll.payroll');
    }

    public function hrd()
    {
        return view('project.pegawai.hrd');
    }

    public function sewa()
    {
        return view('project.sewa.sewa');
    }

    public function kasir()
    {
        return view('project.kasir.kasir');
    }

    public function inventory()
    {
        return view('project.inventory.inventory');
    }
    public function movie()
    {
        return view('project.react.movie');
    }
    public function travel()
    {
        return view('project.react.travel');
    }
    public function inventoryKPP()
    {
        return view('project.inventory-kpp.inventory-kpp');
    }
    public function laundry()
    {
        return view('project.laundry.laundry');
    }

    public function ic()
    {
        return view('project.iceducation.iceducation');
    }

    public function tobacco()
    {
        return view('project.tobacco.tobacco');

    }
}
