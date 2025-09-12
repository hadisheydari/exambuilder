@extends('layouts.app')
@section('title', 'Exam Create')
@section('sidebar')
    <x-teacher.teacher_asid/>
@endsection
@section('header','Create Exam')

@section('content')
    <main class="flex-1 p-6">
        <!-- Overlay -->
        <div class="bg-white w-11/12   flex justify-self-center justify-around m-4 p-4 align-middle rounded-2xl shadow-2xl">
            <h2 class="text-xl font-semibold text-blue-700">Max Score : {{$exam->Max_Score?? ''}}</h2>
            <h2 class="text-xl font-semibold text-blue-700">Exam Title : {{$exam->title ?? ''}}</h2>
            <h2 class="text-xl font-semibold text-blue-700">Max Questions : {{$exam->Max_Questions}}</h2>

        </div>
        <div id="ModalOverlay"
             class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300 ease-out">

            <!-- Modal -->
            <div id="Modal"
                 class="relative bg-white w-11/12 max-w-lg mx-auto mt-24 rounded-2xl shadow-2xl transform scale-95 opacity-0 transition-all duration-300 ease-out">

                <!-- Header -->
                <div class="flex justify-between items-center border-b px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Choose Question Type</h3>
                    <button id="Close"
                            class="text-gray-400 hover:text-gray-600 transition text-2xl">
                        <i class="fa fa-times"></i>
                    </button>
                </div>

                <!-- Content -->
                <div class="grid grid-cols-3 gap-4 p-6">
                    <button onclick="typeSelection('true-false')" id="true-false"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 shadow-sm hover:bg-green-50 hover:shadow-md transition">
                        <i class="fa fa-check text-green-600 text-xl"></i>
                        <span class="text-sm font-medium text-gray-700">True / False</span>
                    </button>

                    <button onclick="typeSelection('blank')" id="blank"
                            class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 shadow-sm hover:bg-blue-50 hover:shadow-md transition">
                        <i class="fa fa-ellipsis-h text-blue-600 text-xl"></i>
                        <span class="text-sm font-medium text-gray-700">Fill in Blank</span>
                    </button>

                    <button onclick="typeSelection('descriptive')" id="descriptive"
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
                <button type="button" id="AddQuestion"
                        class="fa fa-plus-circle text-4xl text-indigo-600 hover:text-indigo-800 transition"></button>
            </div>
            @csrf
        </form>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/exam/examMethods.js') }}"></script>
@endsection
