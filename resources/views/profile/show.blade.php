
<!--
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

-->

@extends('admin.admin_master')
@section('mainAdmin')
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i> Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a>
          </li>
        </ul>
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" id="uploadedAvatar" width="100" height="100">
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" id="upload" class="account-file-input" accept="image/png, image/jpeg" hidden="">
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                  <i class="bx bx-reset d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
          <hr class="my-0">
          <div class="row">
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Basic Layout</h5>
                  <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                  <form method="POST" action="http://127.0.0.1/user/save">
                      <input type="hidden" name="_token" value="THzN7fW9bu7K6ZZtyffcFmAbWWLnDg1kK7E9ksDU">              <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">Full Name</label>
                      <input id="name" name="name" type="text" class="form-control" placeholder="Hamza Kanzari">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Status</label>
                      <input id="postStatus" name="postStatus" type="text" class="form-control" placeholder="Full Stack Web Dev">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-email">Email</label>
                      <div class="input-group input-group-merge">
                        <input id="email" name="email" type="text" class="form-control" placeholder="Kanzari.Hamza@gmail.com" aria-label="john.doe" aria-describedby="basic-default-email2">
                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                      </div>
                      <div class="form-text">You can use letters, numbers &amp; periods</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-phone">Phone No</label>
                      <input id="mobile" name="mobile" type="text" class="form-control phone-mask" placeholder="21417443">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Date Of Birth</label>
                      <input id="birthdate" name="birthdate" class="form-control" type="date" value="1993-08-18">
                    </div>

                </form></div>
              </div>

            </div>
            <div class="col-xl">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Basic Layout</h5>
                  <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">old password</label>
                      <input id="country" name="country" type="password" class="form-control" placeholder="Gemany">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">new password</label>
                      <input id="city" name="city" type="password" class="form-control" placeholder="Halle">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-email">confirmation password</label>
                      <div class="input-group input-group-merge">
                        <input id="language" name="language" type="password" class="form-control" placeholder="English" aria-label="john.doe" aria-describedby="basic-default-email2">
                      </div>
                      <div class="form-text">You can use letters, numbers &amp; periods</div>
                    </div>


                    <button type="submit" class="btn btn-primary ">Send</button>

                </div>
              </div>

            </div>
          </div>
          <!-- /Account -->
        </div>
        <div class="card">
          <h5 class="card-header">Delete Account</h5>
          <div class="card-body">
            <div class="mb-3 col-12 mb-0">
              <div class="alert alert-warning">
                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
              </div>
            </div>
            <form id="formAccountDeactivation" onsubmit="return false">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
              </div>
              <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
