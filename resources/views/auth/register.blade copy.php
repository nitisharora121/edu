<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edumilestone</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('admin/images/favicon.png')}}" />
    </head>

    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                    <!-- <img src="{{ url('admin')}}/images/logo.svg" alt="logo"> -->
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Registration.</h6>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone Number -->
                    <div class="mt-4">
                        <x-input-label for="mobile" :value="__('Mobile No.')" />
                        <x-text-input id="mobile" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="tel" name="mobile" :value="old('mobile')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                    </div>

                    <!-- Location -->
                    <div class="mt-4">
                        <x-input-label for="location" :value="__('Location')" />
                        <x-text-input id="location" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="text" name="location" :value="old('location')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>

                    <!-- Age -->
                    <div class="mt-4">
                        <x-input-label for="age" :value="__('Age')" />
                        <x-text-input id="age" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="text" name="age" :value="old('age')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('age')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="form-control form-control-lg block mt-1 w-full" placeholder="name" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control form-control-lg block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="EmailId" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control form-control-lg block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-3">
                        <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn ms-3">
                            {{ __('SIGN IN') }}
                        </x-primary-button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                        All Ready have an account? <a href="{{url('login')}}" class="text-primary">Create</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('admin/js/off-canvas.js')}}"></script>
    <script src="{{ url('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ url('admin/js/template.js')}}"></script>
    <script src="{{ url('admin/js/settings.js')}}"></script>
    <script src="{{ url('admin/js/todolist.js')}}"></script>
    <!-- endinject -->


    </body>

    </html>
</x-guest-layout>
