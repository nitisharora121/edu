<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <ul>
                        <a href="{{url('/view_detail')}}" class="btn btn-primary">Profile</a>
                        <a href="{{url('/study_abroad')}}" class="btn btn-primary">career Assessment</a>
                        <a href="#" class="btn btn-primary">Abroad Study Profiling</a>
                        <a href="#" class="btn btn-primary">College Recommendation</a>
                        <a href="#" class="btn btn-primary">Document</a>
                        <a href="#" class="btn btn-primary">College Application</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Edumilestones</title>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </head>
    <body>
        
    </body>
    </html>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Detail Page</h1>

    @if ($user)
        {{ $user->id }}
        {{ $user->name }}
        {{ $user->email }}
        {{ $user->mobile }}
        {{ $user->location }}
        {{ $user->age }}
        {{ $user->status }}
    @else
        <p>No user data found</p>
    @endif
    
</body>
</html>
