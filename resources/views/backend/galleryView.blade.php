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
                <form method="POST" enctype="multipart/form-data" action="{{route('save.gallery')}}">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="linkName">Link Name</label>
                    <input class="form-control" id="photoDescription" name="photoDescription" rows="3"/>
                    <label class="form-label" for="linkName">Link Url</label>
                    <input class="form-control" type="file" id="photoFile" name="photoFile">
                  </div>

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
              <th>url</th>

            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($data as $photo)
            <tr>
              <td>{{$photo->photoDescription}}</td>
              <td>
                        <img src="{{asset('images/'.$photo->photoUrl)}}" width="96" />

                  
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
