@extends('layouts.app')
@section('title', 'Exam Create')
@section('sidebar')
    <x-teacher.teacher_asid/>
@endsection
@section('header','Create Exam')

@section('content')
    <main x-data="examApp()" class="flex-1 p-6">
        <!-- Card -->
        <div class="bg-white w-11/12 mx-auto m-6 p-6 rounded-2xl shadow-2xl">
            <div class="flex flex-col space-y-8">

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-center">
                    <h2 class="text-lg font-semibold text-blue-700">
                        Max Score:
                        <span class="font-normal text-gray-700">{{$exam->Max_Score ?? ''}}</span>
                    </h2>

                    <h2 class="text-lg font-semibold text-blue-700">
                        Exam Title:
                        <span class="font-normal text-gray-700">{{$exam->title ?? ''}}</span>
                    </h2>

                    <h2 class="text-lg font-semibold text-blue-700">
                        Max Questions:
                        <span class="font-normal text-gray-700">{{$exam->Max_Questions ?? ''}}</span>
                    </h2>

                    <div class="md:col-span-3 flex justify-center gap-12 ">
                        <h2 class="text-lg font-semibold text-blue-700 mr-10 mt-5">
                            Left Questions:
                            <span class="font-normal text-gray-700">{{ $exam->Max_Questions - ($q?->sum('score') ?? 1) }}</span>
                        </h2>

                        <h2 class="text-lg font-semibold text-blue-700 ml-10 mt-5">
                            Another Info:
                            <span class="font-normal text-gray-700">19.5</span>
                        </h2>
                    </div>
                </div>

                <hr class="border-t border-gray-300">

                <div class="grid grid-cols-1 gap-4">



                </div>


                <div>
                    @php
                        $fields = [

                        ];
                        $button = ['type' => 'submit', 'text' => 'Create'];
                    @endphp
                    <x-dynamic-form
                        :fields="$fields"
                        :button="$button"
                        action="{{ route('courses.store') }}"
                        method="POST"
                    >
                        <div x-html="questionContainer"></div>


                    </x-dynamic-form>
                </div>
            </div>
        </div>

        <div x-show="isModalOpen" x-transition class="fixed inset-0 bg-black/50 flex justify-center items-center pt-20 z-50">
            <div @click.away="closeModal" class="bg-white w-11/12 max-w-lg rounded-2xl shadow-2xl p-6">

                <!-- Header -->
                <div class="flex justify-between items-center border-b px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Choose Question Type</h3>
                    <button @click="closeModal" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fa fa-times"></i>
                    </button>
                </div>

                <!-- Content -->
                <div class="grid grid-cols-3 gap-4 p-6">
                    <button @click="selectType('true-false')"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 shadow-sm hover:bg-green-50 hover:shadow-md transition">
                        <i class="fa fa-check text-green-600 text-xl"></i>
                        <span class="text-sm font-medium text-gray-700">True / False</span>
                    </button>

                    <button @click="selectType('blank')"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 shadow-sm hover:bg-blue-50 hover:shadow-md transition">
                        <i class="fa fa-ellipsis-h text-blue-600 text-xl"></i>
                        <span class="text-sm font-medium text-gray-700">Fill in Blank</span>
                    </button>

                    <button @click="selectType('descriptive')"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 shadow-sm hover:bg-purple-50 hover:shadow-md transition">
                        <i class="fa fa-edit text-purple-600 text-xl"></i>
                        <span class="text-sm font-medium text-gray-700">Descriptive</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Form -->
        <form id="typeForm" action="#" method="POST" enctype="multipart/form-data"
              class="p-4 border rounded-lg shadow-lg grid place-items-center">
            <div class="w-full h-35 grid place-items-center">
                <button type="button" @click="openModal"
                        class="fa fa-plus-circle text-4xl text-indigo-600 hover:text-indigo-800 transition">
                </button>

            </div>
            @csrf
        </form>
    </main>
@endsection

@section('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="{{ asset('js/exam/examMethods.js') }}"></script>
    <script src="{{ asset('js/exam/addKeyword.js') }}"></script>

@endsection
