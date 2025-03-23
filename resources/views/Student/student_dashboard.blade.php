@extends('layouts.app')
@section('title', 'Student page')
@section('sidebar')
    <x-student.student_asid>
    </x-student.student_asid>
@endsection
@section('header','Manage Student')

@section('content')


    <main class="flex-1 p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="p-6 bg-white shadow-lg rounded-lg">
                <div class="flex items-center space-x-reverse space-x-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                        </svg>
                    </div>
                    <h3 class=" text-lg font-semibold text-blue-700 ml-2">1Users</h3>
                </div>
                <p class="mt-4 text-gray-600">Number of Users: <span class="font-bold">150</span></p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
            </div>

            <!-- Card 2 -->
            <div class="p-6 bg-white shadow-lg rounded-lg">
                <div class="flex items-center space-x-reverse space-x-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m8 0h-8m0 0V3m0 18v-8m-8 8H3m8 0h11m0-11h-8m8 0V3" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-700">11Reports</h3>
                </div>
                <p class="mt-4 text-gray-600">Active Reports: <span class="font-bold">20</span></p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
            </div>

            <!-- Card 3 -->
            <div class="p-6 bg-white shadow-lg rounded-lg">
                <div class="flex items-center space-x-reverse space-x-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V4m0 12l-4-4m4 4l4-4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-700">1Settings</h3>
                </div>
                <p class="mt-4 text-gray-600">1System Configuration</p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">View</button>
            </div>
        </div>
    </main>

@endsection




