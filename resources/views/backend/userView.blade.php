@extends('admin.admin_master')
@section('mainAdmin')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Basic Layout</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('save.user')}}">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Full Name</label>
                <input id="name" name="name" type="text" class="form-control" id="basic-default-fullname" placeholder="{{$data->name}}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Status</label>
                <input id="postStatus" name="postStatus" type="text" class="form-control" id="basic-default-company" placeholder="{{$data->postStatus}}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-email">Email</label>
                <div class="input-group input-group-merge">
                  <input
                    id="email" name="email"
                    type="text"
                    id="basic-default-email"
                    class="form-control"
                    placeholder="{{$data->email}}"
                    aria-label="john.doe"
                    aria-describedby="basic-default-email2"
                  />
                  <span class="input-group-text" id="basic-default-email2">@example.com</span>
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-phone">Phone No</label>
                <input
                    id="mobile" name="mobile"
                  type="text"
                  id="basic-default-phone"
                  class="form-control phone-mask"
                  placeholder="{{$data->mobile}}"
                />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-message">Date Of Birth</label>
                <input
                id="birthdate" name="birthdate"
                class="form-control"
                type="date"
                value="{{$data->birthdate}}"
                id="html5-date-input">
              </div>

          </div>
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
                <label  class="form-label" for="basic-default-fullname">Country</label>
                <input id="country" name="country" type="text" class="form-control" id="basic-default-fullname" placeholder="{{$data->country}}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">City</label>
                <input id="city" name="city" type="text" class="form-control" id="basic-default-company" placeholder="{{$data->city}}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-email">Languages</label>
                <div class="input-group input-group-merge">
                  <input
                  id="language" name="language"
                    type="text"
                    id="basic-default-email"
                    class="form-control"
                    placeholder="{{$data->language}}"
                    aria-label="john.doe"
                    aria-describedby="basic-default-email2"
                  />
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-phone">Experience In Years</label>
                <input
                id="experience" name="experience"
                  type="number"
                  id="basic-default-phone"
                  class="form-control phone-mask"
                  placeholder="{{$data->experience}}"
                />
              </div>

              <button type="submit" class="btn btn-primary ">Send</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
