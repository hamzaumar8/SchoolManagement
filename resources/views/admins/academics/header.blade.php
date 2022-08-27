<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="vtabs customevtav">
                <ul class="nav nav-tabs tabs-horizontal" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="{{ route('levels.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i>
                            </span> <span class="hidden-xs-down">{{__('Levels')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{ route('grades.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span
                                class="hidden-xs-down">{{__('Grades')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{ route('classes.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span
                                class="hidden-xs-down">{{__('Classes')}}</span>
                        </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="{{ route('shifts.index') }}"
                            role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span>
                            <span class="hidden-xs-down">{{__('Shifts')}}</span></a> </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{ route('subjects.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span>
                            <span class="hidden-xs-down">{{__('Subjects')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{ route('sections.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span>
                            <span class="hidden-xs-down">{{__('Sections')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{ route('days.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span>
                            <span class="hidden-xs-down">{{__('Day')}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{ route('times.index') }}" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span>
                            <span class="hidden-xs-down">{{__('Time Slot')}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>