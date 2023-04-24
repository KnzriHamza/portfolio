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
                <form method="POST" action="{{route('save.project')}}">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Project Name</label>
                    <input id="projectName" name="projectName" type="text" class="form-control" id="basic-default-company" placeholder="" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Live Link</label>
                    <input id="liveLink" name="liveLink" type="text" class="form-control" id="basic-default-company" placeholder="" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Github Link</label>
                    <input id="githubLink" name="githubLink" type="text" class="form-control" id="basic-default-company" placeholder="" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Description</label>
                    <textarea class="form-control" id="projectDescription" name="projectDescription" rows="3"></textarea>                  </div>

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
              <th>Name</th>
              <th>Desscription</th>
              <th>Live Link</th>
              <th>Github</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">

            @foreach ( $data as $project)
                <tr>
                    <td>{{$project->projectName}}</td>
                    <td>
                        {{$project->projectDescription}}
                    </td>
                    <td>{{$project->liveLink}}</td>
                    <td>{{$project->githubLink}}</td>
                    <td>
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
