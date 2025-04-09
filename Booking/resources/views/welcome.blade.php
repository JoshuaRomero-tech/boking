@extends('app')

@section('content')
<div class="py-12">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h1 class="text-4xl font-bold text-gray-900">Welcome to the Booking System</h1>
        </div>

        <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">Easy Booking Management</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 text-sm">
                            Our booking system provides a seamless experience for managing your appointments. Create new bookings, view your existing ones, and delete them when necessary.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">User-friendly Interface</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 text-sm">
                            With our clean and intuitive interface, you can easily manage all your bookings in one place. No more confusion or missed appointments.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center">
            @if (Route::has('login'))
                <div class="text-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none transition ease-in-out duration-150">
                            Go to Dashboard
                        </a>
                    @else
                        <div class="space-x-4">
                            <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none transition ease-in-out duration-150">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    Register
                                </a>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 