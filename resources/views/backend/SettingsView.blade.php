@extends('admin.admin_master')
@section('mainAdmin')

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Default</h5>
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Float label</h5>
                    <div class="card-body">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" aria-describedby="floatingInputHelp">
                        <label for="floatingInput">Name</label>
                        <div id="floatingInputHelp" class="form-text">
                          We'll never share your details with anyone else.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Switches -->
                  <div class="card mb-4">
                    <h5 class="card-header">Switches</h5>
                    <form method="POST" action="{{route('save.settings')}}">
                            @csrf
                            <div class="card-body">
                      <div class="form-check form-switch mb-2">
                        <input class="form-check-input"  name="set1" type="checkbox" id="flexSwitchCheckDefault"
                        
                        
                        @if ($settings->underMaintnance == true)
                            checked
                            
                        @endif
                        >
                        <label class="form-check-label" for="flexSwitchCheckDefault">Put Under Maintnance</label>
                      </div>
                      
                      <div class="form-check form-switch mb-2">
                        <input class="form-check-input"  name="set2" type="checkbox" id="flexSwitchCheckDefault"
                        
                        
                        @if ($settings->setting2 == true)
                            checked
                            
                        @endif
                        >
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                      </div>

                      <div class="form-check form-switch mb-2">
                        <input class="form-check-input" name="set3" type="checkbox" id="flexSwitchCheckDefault"
                        
                        
                        @if ($settings->setting3 == true)
                            checked
                            
                        @endif
                        >
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                      </div>

                      <div class="form-check form-switch mb-2">
                        <input class="form-check-input" name="set4" type="checkbox" id="flexSwitchCheckDefault"
                        
                        
                        @if ($settings->setting4 == true)
                            checked
                            
                        @endif
                        >
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                      </div>

                      <div class="form-check form-switch mb-2">
                        <input class="form-check-input" name="set5" type="checkbox" id="flexSwitchCheckDefault"
                        
                        
                        @if ($settings->setting5 == true)
                            checked
                            
                        @endif
                        >

                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                      </div>

                      <div class="form-check form-switch mb-2">

                        <input type="submit">
                      </div>
                    </div>
                    </form>
                  </div>
              </div>
            </div>

@endsection
