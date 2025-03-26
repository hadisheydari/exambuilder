@extends('layouts.app')
@section('title', 'Course Create')
@section('sidebar')
    <x-teacher.teacher_asid>
    </x-teacher.teacher_asid>
@endsection
@section('header','Create Course')

@section('content')


    <main class="flex-1 p-6">
        <x-dynamic-form
            :fields="[
        ['name' => 'name', 'type' => 'text', 'label' => 'name', 'value' => $course->name , 'required' => true ],
        ['name' => 'description', 'type' => 'textarea', 'value' => $course->description,'label' => 'description'],
        ['name' => 'image', 'type' => 'file', 'value' =>  $course->image,'label' => 'image'],
        ['name' => 'start_at', 'type' => 'date', 'label' => 'Start At','value' => $course->start_at, 'placeholder' => 'Choose'],
        ['name' => 'end_at', 'type' => 'date', 'label' => 'End At', 'value' => $course->end_at,'placeholder' => 'Choose']


    ]"
            action="{{route('courses.update', $course->id) }}"
            method="PUT"
        />

    </main>

@endsection

