@extends('layouts.app')

@section('section')

@include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1),
'param2' => request()->segment(1)])

@endsection

@push('script')

<!-- bootstrap -->
<!-- Select2 -->
<script src="{{ asset('assets/js/lib/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/form-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/form-validation/jquery.validate-init.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

@endpush