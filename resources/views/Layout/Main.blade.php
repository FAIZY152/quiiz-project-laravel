@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <x-dashboard.card title="Total Quizzes" value="18" color="bg-blue-100" />
    <x-dashboard.card title="Total Users" value="254" color="bg-green-100" />
    <x-dashboard.card title="Attempts Today" value="34" color="bg-yellow-100" />
    <x-dashboard.card title="Pending Reviews" value="5" color="bg-red-100" />
</div>

{{-- Recent Attempts Table --}}
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="w-full text-left table-auto">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-4">User</th>
                <th class="p-4">Quiz</th>
                <th class="p-4">Score</th>
                <th class="p-4">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t">
                <td class="p-4">Ali Khan</td>
                <td class="p-4">HTML Basics</td>
                <td class="p-4">85%</td>
                <td class="p-4">24 June 2025</td>
            </tr>
            <!-- Add more rows dynamically -->
        </tbody>
    </table>
</div>
@endsection
@section('sidebar')
    @include('layout.sidebar')