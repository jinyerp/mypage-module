@extends('mypage::layouts.master')

@section('content')

<!-- Vital Info -->
<div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
    <div class="p-5 lg:p-6 grow w-full">
        <div class="md:flex">
            <div class="md:flex-none md:w-1/3 border-b md:border-0 mb-5 md:mb-0">
                <h3 class="flex items-center space-x-2 font-semibold mb-2">
                    <svg class="hi-solid hi-user-circle inline-block w-5 h-5 text-indigo-500" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>User Profile</span>
                </h3>
                <p class="text-gray-500 text-sm mb-5">
                    Your account’s vital info. Only your username and photo will be publicly visible.
                </p>

                <hr>

                @include("mypage::submenu")

            </div>

            <div class="md:w-2/3 md:pl-24">
                @livewire('mypage-avata')
                @livewire('mypage-profile')
            </div>
        </div>
    </div>
</div>
<!-- END Vital Info -->

@endsection
