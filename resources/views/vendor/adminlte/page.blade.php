@extends('adminlte::master')

@inject('layoutHelper', \JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper)

@if($layoutHelper->isLayoutTopnavEnabled())
@php( $def_container_class = 'container' )
@else
@php( $def_container_class = 'container-fluid' )
@endif

@section('adminlte_css')
@stack('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<style>
    #loadingDiv{
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 9999;
        padding: 20% 50%;
        background: rgba(255,255,255,0.5);
        display: none;
    }
    #loadingDiv img{
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: fixed;
    }
</style>
@yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
<div id="loadingDiv">
    <div class="spinner-border text-danger"></div>
</div>
<div class="wrapper">

    {{-- Top Navbar --}}
    @if($layoutHelper->isLayoutTopnavEnabled())
    @include('adminlte::partials.navbar.navbar-layout-topnav')
    @else
    @include('adminlte::partials.navbar.navbar')
    @endif

    {{-- Left Main Sidebar --}}
    @if(!$layoutHelper->isLayoutTopnavEnabled())
    @include('adminlte::partials.sidebar.left-sidebar')
    @endif

    {{-- Content Wrapper --}}
    <div class="content-wrapper {{ config('adminlte.classes_content_wrapper') ?? '' }}">

        {{-- Content Header --}}
        <div class="content-header">
            <div class="{{ config('adminlte.classes_content_header') ?: $def_container_class }}">
                @yield('content_header')
            </div>
        </div>

        {{-- Main Content --}}
        <div class="content">
            <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
                @yield('content')
            </div>
        </div>

    </div>

    {{-- Footer --}}
    @hasSection('footer')
    @include('adminlte::partials.footer.footer')
    @endif

    {{-- Right Control Sidebar --}}
    @if(config('adminlte.right_sidebar'))
    @include('adminlte::partials.sidebar.right-sidebar')
    @endif

</div>
@stop

@section('adminlte_js')
@stack('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
// toast configuration
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "0",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
function successMsg(msg) {
    toastr.success(msg);
}
function errorMsg(msg) {
    toastr.error(msg);
}
function showLoader() {
    $('#loadingDiv').fadeIn();
}
function hideLoader() {
    $('#loadingDiv').fadeOut();
}

</script>
@if(Session::has('success'))
<script>successMsg('<?php echo Session::get('success') ?>')</script>
@endif
@if($errors->any())
@foreach ($errors->all() as $key => $error)
<script>errorMsg("<?php echo $error ?>")</script>
@endforeach
@endif 
@yield('js')
@stop
