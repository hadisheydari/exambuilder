@extends('layouts.app')
@section('title', 'Course Create')
@section('sidebar')
    <x-teacher.teacher_asid>
    </x-teacher.teacher_asid>
@endsection
@section('header','Create Course')

@section('content')

    <main class="flex-1 p-6">
        <div id="ModalOverlay"
             class="fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm z-50 hidden transition-opacity duration-300">

            <div id="Modal"
                 class="bg-slate-50  h-35 grid place-items-center grid-cols-3 gap-4 p-4 m-1 rounded-lg border-2 ">
                <p class="text-2xl text-gray-700 col-span-2">Choose type of question</p>
                <button id="Close" class="fa fa-remove text-2xl text-gray-700"></button>

                <div class="col-span-3 grid grid-cols-3 gap-4">
                    <button id="true-false" class="fa fa-check p-3 m-1 border rounded-lg hover:bg-gray-300"> True /
                        False
                    </button>
                    <button id="blank" class="fa fa-ellipsis-h p-3 m-1 border rounded-lg hover:bg-gray-300"> Fill in the
                        Blank
                    </button>
                    <button id="descriptive" class="fa fa-edit p-3 m-1 border rounded-lg hover:bg-gray-300">
                        Descriptive
                    </button>
                </div>
            </div>
        </div>


        <form action="#" method="POST" enctype="multipart/form-data"
              class="p-4 border rounded-lg shadow-lg grid place-items-center ">

            <div class="w-full h-35 grid place-items-center justify-center">
                <button type="button" id="AddQuestion" class="fa fa-plus-circle text-2xl text-gray-700 "></button>
            </div>
            @csrf
        </form>

    </main>

@endsection
@section('scripts')
    <script>
        document.getElementById('AddQuestion').onclick = function () {
            this.classList.add('!hidden');
            document.getElementById('ModalOverlay').classList.remove('hidden');
        }
        document.getElementById('Close').onclick = function () {
            document.getElementById('ModalOverlay').classList.add('hidden');
            document.getElementById('AddQuestion').classList.remove('!hidden');
        }
    </script>
@endsection
