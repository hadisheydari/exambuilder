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
        ['name' => 'name', 'type' => 'text', 'label' => 'name', 'required' => true],
        ['name' => 'description', 'type' => 'textarea', 'label' => 'description'],
        ['name' => 'image', 'type' => 'file', 'label' => 'image'],
        ['name' => 'start_at', 'type' => 'date', 'label' => 'Start At', 'placeholder' => 'Choose'],
        ['name' => 'end_at', 'type' => 'date', 'label' => 'End At', 'placeholder' => 'Choose']


    ]"
            :button="['type' => 'submit' , 'text' => 'Create' ]"
            action="{{route('courses.store') }}"
            method="POST"
        />

    </main>

@endsection

