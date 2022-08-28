@extends('layouts.app')

@push('style')
<link href="{{ asset('assets/css/lib/select2/select2.min.css') }}" rel="stylesheet">
@endpush

@section('content')

@include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1),
'param2' => request()->segment(1)])

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="form-validation">
                <form class="form-valide" action="#" method="post">
                    @include('admins.levels.field')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@push('script')
<!-- bootstrap -->
<!-- Select2 -->
<script src="js/lib/select2/select2.full.min.js"></script>
<script src="js/lib/form-validation/jquery.validate.min.js"></script>
<script src="js/lib/form-validation/jquery.validate-init.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

@endpush