@extends('layouts.app')

@section('content')
    <!--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif-->
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="ml-12">
                    <div class="mt-2 text-gray-1000 dark:text-gray-400 text-sm" style="color:black;font-size:30px;">
                    Ieškoti viešbučių
                    </div>
                    
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                
                        <div class="p-6 right-0">
                            <div class="pabel-heading">
                                <h2 class="text-center">Paieška</h2>
                            </div>
                            <div class="panel-body">
                            <form action="search" method="POST">
                                @csrf
                                <div class="col-md-3">
                                Ieškoti pagal:<br>
                                    <input type="text" name="searchtype" list="types">

                                    <datalist id="types">
                                    <option value="Miestas">
                                    <option value="Šalis">
                                    </datalist>
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    Terminas:<br>
                                    <input type="text" name="searchterm">
                                    <br>
                                </div>
                                <p>
                                <div class="col-md-3">
                                    <button class="btn btn-primary rounded" type="submit">Ieškoti</button>
                                </div> 
                                </p>  
                            </form> 
                            </div>   
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="grid grid-cols-1 md:grid-cols-2">
                        <table>
                        <?php
                            for ($x = 1; $x <= 3; $x++):?>
                            <tr>
                                <div class="p-6">
                            
                                <?php
                                    echo $x." Viešbučio informacija";
                                ?>

                            <!--<div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>
                            -->
                                    <a href="{{ url('/roominformation') }}" class="text-sm text-gray-700 underline">Pasirinkti viešbutį</a>
                                </div>
                            </tr>
                        <?php endfor; ?>
                        </table>
                    </div>
            </div>
        </div>
@endsection