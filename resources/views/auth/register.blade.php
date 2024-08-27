@extends('layouts.app')

@section('title')

    Register a new acount

@endsection

@section('content')

{{-- Principal div  --}}

<div class="md:flex md:justify-center md:items-center">
    <div class="md:w-4/12">
        <img src="{{ asset("calendar-concept-3d-illustration-icon-260nw-2152456191.webp") }}" alt="imagen to register usuario" class="rounded-xl">
    </div>

{{-- Form for create a new worker  --}}

    <div class="md:w-4/12 bg-white p-6 rounded-xl">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="text-center p-1 block uppercase text-indigo-900 font-bold hover:underline underline-offset-2 cursor-pointer">
                    Name
                </label>
                <input type="text" id="name" placeholder="Your name" name="name" value="{{ old('name') }}" class="border p-3 w-full rounded-lg h-10 @error('name') border-red-600 @enderror"> 

                @error('name') <span class=" bg-red-500 text-center block text-white font-bold rounded-lg mt-3 p-2"> {{$message}} </span> @enderror
            </div>

            <div class="mb-5">
                <label for="Username" class="text-center p-1 block uppercase text-indigo-900 font-bold hover:underline underline-offset-2 cursor-pointer">
                    Username
                </label>
                <input type="text" id="Username" placeholder="Username" name="username" class="border p-3 w-full rounded-lg h-10"> 
            </div>

            <div class="mb-5">
                <label for="email" class="text-center p-1 block uppercase text-indigo-900 font-bold hover:underline underline-offset-2 cursor-pointer">
                    Email
                </label>
                <input type="email" id="email" placeholder="example: appschedules@schedules.com" name="email" class="border p-3 w-full rounded-lg h-10"> 
            </div>

            <div class="mb-5">
                <label for="password" class="text-center p-1 block uppercase text-indigo-900 font-bold hover:underline underline-offset-2 cursor-pointer">
                    Password
                </label>
                <input type="password" id="password" placeholder="" name="Password" class="border p-3 w-full rounded-lg h-10"> 

            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="text-center p-1 block uppercase text-indigo-900 font-bold hover:underline underline-offset-2 cursor-pointer">
                    Confirm Password
                </label>
                <input type="password" id="password_confirmation" placeholder="" name="password_confirmation" class="border p-3 w-full rounded-lg h-10"> 
            </div>

            <input type="submit" value="Create Account" class="bg-cyan-600 hover:bg-cyan-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </form>
    </div>
</div>

@endsection