<x-app-layout>
    <x-table-card header="Assesment Sheet For {{$student->fullname()}} ">
        <div class="flex">
            <div class="mr-5">
                <x-avatar size="w-28 h-28"
                    src="{{asset('assets/img/addmission')}}/{{$student->addmission->passport_picture}}" />
            </div>
            <div>
                <ul>
                    <li class="capitalize mb-1">Index Number: <strong>{{$student->index_number}}</strong></li>
                    <li class="capitalize mb-1">Full Name: <strong>{{$student->fullname()}}</strong></li>
                    <li class="capitalize mb-1">Gender: <strong>{{$student->gender}}</strong></li>
                    <li class="capitalize mb-1">Class: <strong>{{$student->class->name}}
                            ({{$student->class->house_name}})</strong></li>
                    <li class="capitalize mb-1">Campus: <strong>{{$student->campus}} Campus</strong></li>
                </ul>
            </div>
        </div>
        <!-- Crech -->
        @if($classes->class_type == 'creche')

        <h1>{{$classes->class_type}}</h1>

        <!-- Kindergaten -->
        @elseif($classes->class_type == 'nursery')

        <livewire:staff.grade.assesment.nursery :classes="$classes" :subject="$subject" :grades="$grades" />

        <!-- Kindergaten -->
        @elseif($classes->class_type == 'kg')
        KG
        <livewire:staff.grade.assesment.kg :classes="$classes" :subject="$subject" :grades="$grades" />

        @endif
    </x-table-card>
</x-app-layout>