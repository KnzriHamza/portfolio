@extends('admin.admin_master')
@section('mainAdmin')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

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
