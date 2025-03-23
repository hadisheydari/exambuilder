@extends('layouts.app')
@section('title', 'Courses page')
@section('sidebar')
    <x-teacher.teacher_asid>
    </x-teacher.teacher_asid>
@endsection
@section('header','Manage Courses')

@section('content')


            <main class="flex-1 p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    @foreach($courses as $course)
                        <div class="p-6 bg-white shadow-lg rounded-lg">
                            <div class="flex items-center space-x-reverse space-x-4">
                                <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                                    <img src="{{asset('storage/' .$course->img)}}" class="rounded-full" >
                                </div>
                                <h3 class="!m-1.5 text-lg font-semibold text-blue-700 ml-2">{{$course->name}}</h3>
                            </div>
                            <p class="mt-4 text-gray-600">Number of Users: <span class="font-bold">150</span></p>
                            <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"><i class="fa fa-eye m-1"></i>View</button>
                        </div>

                    @endforeach

                </div>
            </main>

@endsection

