@extends('layouts.app')

@section('title', 'Courses page')

@section('sidebar')
    <x-teacher.teacher_asid />
@endsection

@section('header', 'Manage Courses')

@section('content')
    <main class="flex-1 p-6">
        <a href="{{ route('courses.create') }}"
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
                        <h3 class="!m-1.5 text-lg font-semibold text-blue-700 ml-2">{{ $course->name }}</h3>
                    </div>

                    <p class="mt-4 text-gray-600">{{ \Carbon\Carbon::parse($course->start_at)->format('Y-m-d') }}</p>
                    <p class="mt-2 text-gray-600">{{ \Carbon\Carbon::parse($course->end_at)->format('Y-m-d') }}</p>

                    <div class="flex flex-wrap gap-2 mt-4">
                        <a href="{{ route('courses.show', $course->id) }}"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="fa fa-eye mr-1"></i>View
                        </a>

                        <a href="{{ route('courses.edit', $course->id) }}"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="fa fa-pen mr-1"></i>Edit
                        </a>

                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                <i class="fa fa-trash mr-1"></i>Delete
                            </button>
                        </form>

                        <button type="button"
                                data-course-id="{{ $course->id }}"
                                onclick="openExamModal(this)"
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            <i class="fa fa-pencil mr-1"></i>Build Exam
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div id="buildExamModal" class="fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm z-50 hidden">
            <div class="bg-white w-10/12 md:w-8/12 lg:w-6/12 mx-auto mt-24 p-6 rounded-lg shadow-lg relative">
                <button id="modalCloseBtn" class="absolute top-4 right-4 text-2xl text-gray-700">
                    <i class="fa fa-close"></i>
                </button>

                <x-dynamic-form
                    :fields="[
                        ['name' => 'course_id', 'type' => 'text', 'value' => '', 'hidden' => true],
                        ['name' => 'teacher_id', 'type' => 'text', 'value' => auth()->id(), 'hidden' => true],
                        ['name' => 'title', 'type' => 'text', 'label' => 'Title', 'required' => true],
                        ['name' => 'Max_Score', 'type' => 'number', 'label' => 'Max Score', 'min' => '1', 'max' => '100'],
                        ['name' => 'Max_Questions', 'type' => 'number', 'label' => 'Max Questions', 'min' => '1', 'max' => '50']
                    ]"
                    :button="['type' => 'submit', 'text' => 'Create']"
                    action="{{ route('Exams.store') }}"
                    method="POST"
                />
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function openExamModal(button) {
            const modal = document.getElementById('buildExamModal');
            modal.classList.remove('hidden');

            const courseId = button.dataset.courseId;

            setTimeout(() => {
                const input = document.querySelector('#buildExamModal input[name="course_id"]');

                if (input) {
                    input.value = courseId;
                    console.log("course_id set to:", input.value);
                } else {
                    console.error('course_id input not found!');
                }
            }, 100); // 100ms تاخیر برای اطمینان از اینکه DOM کامل رندر شده
        }

        document.getElementById('modalCloseBtn').addEventListener('click', function () {
            document.getElementById('buildExamModal').classList.add('hidden');
        });
    </script>
@endsection
