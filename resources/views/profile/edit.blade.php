<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="page-body">
        <div class="container-fluid">
        <div class="page-title">
            <div class="row">
            <div class="col-sm-6 col-12"> 
                <h2>Edit Profile</h2>
            </div>
            <div class="col-sm-6 col-12">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header card-no-border pb-0">
                            <h3 class="card-title mb-0">My Profile</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row mb-2">
                                <div class="profile-title">
                                <div class="d-flex gap-3">
                                    <img class="img-70 rounded-circle" alt="" src="{{  asset('assets/images/user/10.jpg')}}"/>
                                    <div class="flex-grow-1">
                                    <h3 class="mb-1">{{ Auth::user()->name }}</h3>
                                    <p></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            @if (session('status') === 'profile-updated')
                                <p class="text-success">{{ __('Profile Updated.') }}</p>
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" value="{{ old('name', $user->name) }}" name="name" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" type="email" value="{{ old('email', $user->email) }}" readonly name="email"/>
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block" type="submit">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header card-no-border pb-0">
                            <h3 class="card-title mb-0">Change Password</h3> 
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('password.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @if (session('status') === 'password-updated')
                                <p class="text-success">Password Updated</p>
                            @endif
                            <div class="mb-3 mt-4">
                                <label class="form-label">Old Password</label>
                                <input class="form-control" type="password" name="current_password" required />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input class="form-control" type="password" name="password" required/>
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" required/>
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block" type="submit">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>
