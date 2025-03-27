@extends('layouts.app')
@section('title', 'Courses page')
@section('sidebar')
    <x-teacher.teacher_asid>
    </x-teacher.teacher_asid>
@endsection
@section('header','Manage Courses')

@section('content')

    <main class="flex-1 p-6">
        <a href="{{route('courses.create')}}"
           class="w-60 bg-blue-500 text-white px-4 py-2 rounded-lg h-12 m-4 inline-block">
            Create Course
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($courses as $course)
                <div class="p-6 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center space-x-reverse space-x-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                            <img src="{{ asset('storage/' . $course->image) }}" class="rounded-full w-14 h-14">
                        </div>
                        <h3 class="!m-1.5 text-lg font-semibold text-blue-700 ml-2">{{$course->name}}</h3>
                    </div>
                    <p class="mt-4 text-gray-600">{{ \Carbon\Carbon::parse($course->start_at)->format('Y-m-d') }}
                    </p>
                    <p class="mt-4 text-gray-600">{{ \Carbon\Carbon::parse($course->end_at)->format('Y-m-d') }}
                    </p>
                    <div class="flex space-x-2 mt-4">

                        <a href="{{route('courses.show' , $course->id)  }}"
                           class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition inline-block"><i
                                class="fa fa-eye m-1"></i>View</a>
                        <a href="{{route('courses.edit' , $course->id)  }}"
                           class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition inline-block"><i
                                class="fa fa-pen m-1"></i>Edit</a>
                        <form action="{{route('courses.destroy' , $course->id)  }}"
                              method="Post">@csrf @method('DELETE')
                            <button type="submit"
                                    class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition inline-block">
                                <i class="fa fa-trash m-1"></i>Delete
                            </button>
                        </form>
                    </div>

                </div>

            @endforeach

        </div>
    </main>

@endsection

