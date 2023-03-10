@extends('layouts.app')
@section('title', 'Create a game')

@section('content')
<div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">Submit your new game!</h1>
                </div>
                <form action="{{ route('games.store') }}" method="post">
                    @csrf
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <label for="local_team">Local Team</label>
                                <select name="local_team" id="local_team">
                                @foreach($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                                </select>
                                @error('local_team')
                                    <br>
                                    <small class="text-red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative">
                                <label for="away_team">Away Team</label>
                                <select name="away_team" id="away_team">
                                @foreach($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                                </select>
                                @error('away_team')
                                    <br>
                                    <small class="text-red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative">
                                <input required autocomplete="off" id="date" name="date" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="01-01-2001" />
                                <label class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Date</label>
                                @error('date')
                                    <br>
                                    <small class="text-red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative">
                                <input required autocomplete="off" id="time" name="time" type="time" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="19:30" />
                                <label class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Time</label>
                                @error('time')
                                    <br>
                                    <small class="text-red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative">
                                <button type="submit" class="bg-blue-500 text-white rounded-md px-2 py-1">Create new game</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection