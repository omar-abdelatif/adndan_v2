<!-- latest jquery-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<!-- Plugins JS start-->
<script id="menu" src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('script')
<script>
    @if(Session::has('message'))
        let type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.options = {
                    "progressBar": true
                }
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.options = {
                    "progressBar": true
                }
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.options = {
                    "progressBar": true
                }
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.options = {
                    "progressBar": true
                }
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
    @endif
    @if (Route::currentRouteName() == 'home')
        new WOW().init();
    @endif
</script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('assets/js/script.js') }}"></script>
{{-- ! Validation Forms ! --}}
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src={{asset('assets/js/custom-script.js')}}></script>
