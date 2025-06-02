@extends('layouts.app')
@section('title', 'Course Show')
@section('sidebar')
    <x-teacher.teacher_asid>
    </x-teacher.teacher_asid>
@endsection
@section('header','Show Course')

@section('content')


    <main class="flex-1 p-6">
        @php
            $fields = [
                ['name' => 'name', 'type' => 'text', 'label' => 'name', 'value' => $course->name , 'required' => true ],
                ['name' => 'description', 'type' => 'textarea', 'value' => $course->description,'label' => 'description'],
                ['name' => 'image', 'type' => 'file', 'value' =>  $course->image,'label' => 'image'],
                ['name' => 'start_at', 'type' => 'date', 'label' => 'Start At','value' => $course->start_at, 'placeholder' => 'Choose'],
                ['name' => 'end_at', 'type' => 'date', 'label' => 'End At', 'value' => $course->end_at,'placeholder' => 'Choose']
            ];

            $button = ['type' => 'button' ,'action' => 'window.history.back()' ,  'text' => 'Return' ];
        @endphp
        <x-dynamic-form
            :fields="$fields"
            :button="$button"
            action="{{route('courses.show', $course->id) }}"
            method="GET"


        />

    </main>

@endsection

