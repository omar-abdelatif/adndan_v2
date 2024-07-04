@extends('layouts.master')
@section('title', 'كل الحالات')
@section('breadcrumb-title')
    <h3>كل الحالات</h3>
@endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item active">كل الحالات</li>
@endsection
@section('script')
    <script src="{{asset('assets/js/form-wizard/form-wizard.js')}}"></script>
@endsection
@section('modals')
    {{-- ! Add New Case ! --}}
    <button type="button" class="btn btn-success px-2 py-1" data-bs-toggle="modal" data-bs-target="#add_subscriber">
        <i class="icofont icofont-plus fw-bold"></i>
        <span>إضافة حالة جديد</span>
    </button>
    {{-- ! Bulk Upload Cases ! --}}
    <button type="button" class="btn btn-success px-2 py-1 ms-2" data-bs-toggle="modal" data-bs-target="#bulk_upload">
        <i class="icofont icofont-plus fw-bold"></i>
        <span>إضافة حالات بالجملة</span>
    </button>
    {{-- ! Add New Case ! --}}
    <div class="modal fade" id="add_subscriber" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header align-content-center">
                    <h3 class="modal-title fs-5 text-white mb-0" id="exampleModalLabel">إضافة مشترك جديد</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body basic-wizard important-validation">
                    <div class="stepper-horizontal" id="stepper1">
                        <div class="stepper-one stepper step">
                            <div class="step-circle d-flex align-items-center justify-content-center">
                                <span class="text-primary">1</span>
                            </div>
                            <div class="step-title">البيانات الشخصية</div>
                            <div class="step-bar-left"></div>
                            <div class="step-bar-right"></div>
                        </div>
                        <div class="stepper-two step">
                            <div class="step-circle d-flex align-items-center justify-content-center">
                                <span class="text-primary">2</span>
                            </div>
                            <div class="step-title">البيانات العائلية</div>
                            <div class="step-bar-left"></div>
                            <div class="step-bar-right"></div>
                        </div>
                        <div class="stepper-three step">
                            <div class="step-circle d-flex align-items-center justify-content-center">
                                <span class="text-primary">3</span>
                            </div>
                            <div class="step-title">البيانات المالية</div>
                            <div class="step-bar-left"></div>
                            <div class="step-bar-right"></div>
                        </div>
                        <div class="stepper-four step">
                            <div class="step-circle d-flex align-items-center justify-content-center">
                                <span class="text-primary">4</span>
                            </div>
                            <div class="step-title">بيانات الصحية</div>
                            <div class="step-bar-left"></div>
                            <div class="step-bar-right"></div>
                        </div>
                        <div class="stepper-five step">
                            <div class="step-circle d-flex align-items-center justify-content-center">
                                <span class="text-primary">5</span>
                            </div>
                            <div class="step-title">النهاية</div>
                            <div class="step-bar-left"></div>
                            <div class="step-bar-right"></div>
                        </div>
                    </div>
                    <form action="" method="post" id="storeSubscriber" enctype="multipart/form-data">
                        @csrf
                        <div id="msform">
                            <article class="stepper-one row g-3 custom-input" style="display: flex;">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label for="CaseFullName" class="text-muted form-label">إسم الحالة</label>
                                                <input type="text" name="fullname" placeholder="إسم الحالة" id="CaseFullName" oninput="this.value = this.value.replace(/[^\u0600-\u06FF\s]/g, '')" pattern="[\u0600-\u06FF\s]{3,}" class="form-control text-center">
                                                <p id="CaseReq" class="required text-danger fw-bold d-none mb-0">هذا الحقل مطلوب</p>
                                                <p id="CaseMsg" class="required text-danger fw-bold d-none mb-0">يجب ان يكون الحقل لا يقل عن 3 أحرف</p>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="ssn" class="text-muted form-label">الرقم القومي</label>
                                                <input type="text" name="ssn" id="ssn" placeholder="الرقم القومي" maxlength="14" class="form-control text-center" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                <p id="ssnReq" class="required d-none text-danger fw-bold mb-0">هذا الحقل مطلوب</p>
                                                <p id="ssnMsg" class="required d-none text-danger fw-bold mb-0">يجب ان بكون الرقم القومي 14 رقماً لا غير</p>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="age" class="text-muted form-label">سن الحالة</label>
                                                <input type="text" name="age" placeholder="سن الحالة" id="age" class="form-control text-center" maxlength="2" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                <p class="required d-none mb-0 fw-bold text-danger" id="ageReq">هذا الحقل مطلوب</p>
                                                <p class="required d-none mb-0 fw-bold text-danger" id="ageMsg">يجب ان يكون السن مكون من 2 رقم فقط</p>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="files" class="text-muted form-label">الصور</label>
                                                <input type="file" name="files" class="form-control text-center" id="files" accept="image/*">
                                                <p class="required d-none fw-bold text-danger mb-0" id="filesReq">هذا الحقل مطلوب</p>
                                                <p class="required d-none fw-bold text-danger mb-0" id="filesExt">يجب ان يكون امتداد الصورة [ jpg, png, jpeg, webp ]</p>
                                                <p class="required d-none fw-bold text-danger mb-0" id="filesSize">يجب ان يكون حجم الصورة اقل من 2 ميجا</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label for="marital_status" class="text-muted form-label">الحالة الاجتماعية</label>
                                                <select name="marital_status" class="form-control" id="marital_status">
                                                    <option class="text-center" selected>إختار الحالة الاجتماعية للحالة</option>
                                                    <option value="single">أعزب</option>
                                                    <option value="married">متزوج/ة</option>
                                                    <option value="widow">أرمل/ة</option>
                                                    <option value="divorced">مطلق/ة</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="gov" class="text-muted form-label">المحافظة</label>
                                                <input type="text" name="gov" id="gov" class="form-control text-center" placeholder="المحافظة">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="mobile_no" class="text-muted form-label">رقم المحمول</label>
                                                <input type="text" name="phone_number" id="mobile_no" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="رقم المحمول" class="form-control text-center">
                                                <p id="mobileReq" class="required fw-bold text-danger d-none mb-0">هذا الحقل مطلوب</p>
                                                <p id="mobileMsg" class="required fw-bold text-danger d-none mb-0">يجب ان بكون رقم المحمول 11 رقماً لا غير</p>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="address" class="text-muted form-label">العنوان</label>
                                                <input type="text" name="address" placeholder="العنوان" id="address" oninput="this.value = this.value.replace(/[^\u0600-\u06FF\s]/g, '')" class="form-control text-center">
                                                <p class="required d-none mb-0 text-danger fw-bold" id="addressReq">هذا الحقل مطلوب</p>
                                                <p class="required d-none mb-0 text-danger fw-bold" id="addressMsg">يجب ان يكون العنوان باللغة العربية ولا يقل عن 5 احرف</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="stepper-two row g-3 needs-validation custom-input" style="display: none;">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="number" name="sons" class="form-control text-center" placeholder="عدد الأولاد">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="number" name="daughters" class="form-control text-center" placeholder="عدد البنات">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="stepper-three row g-3 needs-validation custom-input" style="display: none;">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <select name="income_type" class="form-control">
                                                    <option class="text-center" selected>إختار نوع الدخل</option>
                                                    <option value="معاش">معاش</option>
                                                    <option value="بدون">بدون</option>
                                                    <option value="مصدر_أخر">مصدر أخر</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <select name="benefit_duration" class="form-control">
                                                    <option class="text-center" selected>إختار مدة الإستفادة</option>
                                                    <option value="شهرية">شهرية</option>
                                                    <option value="موسمية">موسمية</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" name="another_source" class="form-control text-center" placeholder="مصدر أخر">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input id="total_income" type="number" name="total_income" class="form-control text-center" placeholder="إجمالي الدخل" readonly autofocus="none">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <select name="benefit_type" class="form-control">
                                                    <option class="text-center" selected>إختار نوع الإستفادة</option>
                                                    <option value="عينية">عينية</option>
                                                    <option value="نقدية">نقدية</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" name="retire_income" class="form-control text-center" placeholder="دخل المعاش">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_income" class="form-control text-center" placeholder="الدخل الشهري">
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="stepper-four row g-3 needs-validation custom-input" style="display:none;">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="text-muted form-label">الحالة الصحية</label>
                                                <input type="text" name="health_status" class="form-control text-center"placeholder="الحالة الصحية">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="stepper-five row g-3 needs-validation custom-input" style="display:none;">
                                <div class="col-lg-12 m-0">
                                    <div class="successful-form text-white text-center my-4">
                                        <img class="img-fluid" src="{{asset('assets/images/icons8-done.gif')}}" alt="successful">
                                        <h6 class="text-center mt-2">اضغط على تأكيد لإضافة المشترك</h6>
                                    </div>
                                </div>
                            </article>
                            <div id="submitButton"></div>
                        </div>
                    </form>
                    <div class="wizard-footer mt-4 d-flex gap-2 justify-content-end" id="wizard-footer">
                        <button class="btn btn-outline-danger" id="backbtn" onclick="backStep()" disabled>السابق</button>
                        <button class="btn btn-primary" id="nextbtn" onclick="nextStep()">التالي</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ! Bulk Upload Cases ! --}}
    <div class="modal fade" id="bulk_upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">إضافة بالجملة</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control" name="import" accept=".xlsx, .xls">
                        </div>
                        <button class="btn btn-success fw-bold text-white mt-3 w-100" type="submit">حفظ البيانات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
