@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Dashboard
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">{{ auth()->user()->name }}</h1>
            </div>
        </div>
    </div>
@endsection