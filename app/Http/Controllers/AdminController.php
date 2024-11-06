<?php

namespace App\Http\Controllers;


use App\Models\Report;
use App\Models\Product;
use App\Models\ReportAdmin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $reports = Report::all();
        return view('admin.admin', compact('reports'));
    }

    public function edit($reportID) {
        $reports = Report::find($reportID);
        return view('admin.edit_laporanAdmin', compact('reports'));
    }

    public function update($reportID) {
        $reports = Report::find($reportID);

        if($reports){
            $reports->update([
                'status' => request()->status,
            ]);
            return redirect('/admin');
        }else{
            return response()->json(['message' => 'User not found'], 404);
        }

    }

    public function delete($reportID) {
        Report::destroy($reportID);
        return redirect('/admin');
    }
}
