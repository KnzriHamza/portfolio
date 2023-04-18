@extends('admin.admin_master')
@section('mainAdmin')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <form method="POST" action="{{route('save.socials')}}">
            @csrf
            <input type="submit">
            <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Tool Name</th>
                    <th>Image</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                  @foreach ( $socialData as $social)
                      <tr>
                          <td><input type="checkbox" name="selected[]" id="selected" value="{{$social->socialName}}"
                              @if ($social->socialStatus == 1)
                                  checked
                              @endif></td>
                              <td>{{$social->socialName}}</td>
                          <td >
                              <img src="{{$social->socialImageUrl}}" width="15%" alt="">
                          </td>

                          <td><input type="text" name="{{$social->socialUrl}}" id="{{$social->socialUrl}}" placeholder="{{$social->socialUrl}}"></td>
                          <td><span class="badge bg-label-success me-1">

                              @if ($social->socialStatus == 1)
                                  Active
                              @else
                                  Disabled
                              @endif
                          </span></td>

                      </tr>
                  @endforeach

                </tbody>
              </table>
        </form>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>


@endsection
