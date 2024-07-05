<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(){
        $cases = Cases::all();
        return view('pages.cases.index', compact('cases'));
    }
    public function store(Request $casesRequest)
    {
        $validation = $casesRequest->validate([
            'fullname' => ['required', 'string'],
            'ssn' => ['required', 'unique:cases,ssn'],
            'phone_number' => ['required', 'unique:cases,phone_number'],
            'age' => ['required',],
            'address' => ['required', 'string'],
            'income_type' => ['required', 'string'],
            'benefit_type' => ['required', 'string'],
            'marital_status' => ['required', 'string'],
            'health_status' => ['required', 'string'],
            'monthly_income' => ['required',],
            'sons' => ['required',],
            'daughters' => ['required',],
            'gov' => ['required', 'string'],
            'imgs' => ['required', 'image', 'mimes:png,jpg,webp,jpeg', 'max:2048'],
        ]);
        if ($validation) {
            if ($casesRequest->file('imgs') && $casesRequest->file('imgs')->isValid()) {
                $upload = $casesRequest->file('imgs');
                $imageName = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = 'assets/images/cases/';
                $upload->move($destinationPath, $imageName);
            }
            $case = Cases::create([
                'fullname' => $validation['fullname'],
                'ssn' => $validation['ssn'],
                'phone_number' => $validation['phone_number'],
                'age' => $validation['age'],
                'address' => $validation['address'],
                'income_type' => $validation['income_type'],
                'benefit_type' => $validation['benefit_type'],
                'marital_status' => $validation['marital_status'],
                'health_status' => $validation['health_status'],
                'monthly_income' => $validation['monthly_income'],
                'sons' => $validation['sons'],
                'daughters' => $validation['daughters'],
                'gov' => $validation['gov'],
                'imgs' => $imageName ?? null,
            ]);
            if ($case) {
                toastr('تم الحفظ بنجااح');
                return redirect()->back();
            }
        }
    }
}
