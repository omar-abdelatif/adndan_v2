@php
    $user = Auth::user();
@endphp
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('home') }}">
                <h3>جمعية أدندان الخيرية</h3>
            </a>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper text-center mt-3 mb-5 mx-3 p-0">
            <a href={{ route('home') }}>
                <img class="img-fluid me-0" src="{{ asset('assets/images/logo/لوجو الجمعية.png') }}" width="70"
                    alt="Logo">
            </a>
        </div>
        <nav class="sidebar-main">
            <div id="sidebar-menu">
                <ul class="sidebar-links w-100" id="simple-bar">
                    @if ($user->role === 'kfala')
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="{{ route('home') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <span>لوحة التحكم</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a href="#" class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <span>الكفالة</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                        </svg>
                                        <span>السكن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                        </svg>
                                        <span>السن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}"></use>
                                        </svg>
                                        <span>الوظائف</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات الخارجية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات الداخلية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>مديونية الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="h')}}">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>متأخرات الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>المنتسبين</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الخزنة</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>البنك</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a href="#" class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <span>المقابر</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                        </svg>
                                        <span>السكن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                        </svg>
                                        <span>السن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}">
                                            </use>
                                        </svg>
                                        <span>الوظائف</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات الخارجية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات الداخلية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>مديونية الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>متأخرات الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>المنتسبين</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الخزنة</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>البنك</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @elseif ($user->role === 'tomb')
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="{{ route('home') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <span>لوحة التحكم</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a href="#" class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <span>المقابر</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                        </svg>
                                        <span>السكن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                        </svg>
                                        <span>السن</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}">
                                            </use>
                                        </svg>
                                        <span>الوظائف</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات الخارجية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات الداخلية</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>مديونية الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>متأخرات الإشتراكات</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>المنتسبين</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الخزنة</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>البنك</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="{{ route('home') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <span>لوحة التحكم</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a href="#" class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <span>الكفالة</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li class="sidebar-list">
                                    <a href="{{route('cases.index')}}">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>الحالات</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                        </svg>
                                        <span>التبرع</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a href="#" class="sidebar-link sidebar-title">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                        </svg>
                                        <span>التقارير</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                                </svg>
                                                <span>الحالات</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                                </svg>
                                                <span>التبرع</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                                </svg>
                                                <span>الخزنة</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                                </svg>
                                                <span>البنك</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a href="#" class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                </svg>
                                <span>المقابر</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>المناطق</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                        </svg>
                                        <span>المقابر</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                        </svg>
                                        <span>المتوفيين</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-job-search') }}">
                                            </use>
                                        </svg>
                                        <span>المتوفيين السابقين</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                        </svg>
                                        <span>التبرعات</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a href="#" class="sidebar-link sidebar-title">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                                        </svg>
                                        <span>التقارير</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profit') }}"></use>
                                                </svg>
                                                <span>الحالات</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                                </svg>
                                                <span>التبرع</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                                </svg>
                                                <span>الخزنة</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a href="">
                                                <svg class="stroke-icon">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                                </svg>
                                                <span>البنك</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="{{ route('user.index') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <span>كل المستخدمين</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
