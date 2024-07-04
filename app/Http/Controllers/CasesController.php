<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;
use App\Http\Requests\CasesRequest;
// use Illuminate\Support\Facades\Validator;

class CasesController extends Controller
{
    public function index(){
        $cases = Cases::all();
        return view('pages.cases.index', compact('cases'));
    }
    public function store(CasesRequest $casesRequest)
    {
        $validation = $casesRequest->validated();
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
                $notificationSuccess = [
                    'message' => 'تم الإضافة بنجاح',
                    'alert-type' => 'success',
                ];
                return redirect()->back()->with($notificationSuccess);
            }
        }
        return redirect()->back();
    }
}
