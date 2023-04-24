@extends('admin.admin_master')
@section('mainAdmin')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
    <div class="mt-3">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
          Toggle End
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel" style="visibility: hidden;" aria-hidden="true">
            <div class="card-body">
                <form method="POST" action="{{route('save.experience')}}">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Year</label>
                    <input id="year" name="year" type="number" class="form-control" id="basic-default-fullname" placeholder="" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Company Name</label>
                    <input id="companyName" name="companyName" type="text" class="form-control" id="basic-default-company" placeholder="" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>                  </div>

                    <div class="mb-3">
                        <div class="d-grid gap-2 col-lg-6 mx-auto">
                          <button class="btn btn btn-primary" type="submit">Button</button>
                        </div>
                      </div>

              </div>
        </div>
      </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">

      <h5 class="card-header">Table Basic</h5>

      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Year</th>
              <th>Company Name</th>
              <th>Description</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">

            @foreach ( $data as $experience)
                <tr>
                    <td>{{$experience->year}}</td>
                    <td>
                        {{$experience->companyName}}
                    </td>
                    <td>{{$experience->description}}</td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                    <a  href="javascript:void(0);"><i class="bx-alt me-1"></i> Edit</a>
                    <a  href="javascript:void(0);"><i class="bx me-1"></i> Delete</a>
                    </td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>


@endsection
