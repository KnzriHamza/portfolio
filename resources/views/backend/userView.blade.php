@extends('admin.admin_master')
@section('mainAdmin')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>
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
                    <div class="card-body">
                      <form method="POST" action="{{route('save.user')}}">
                        @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">First Name</label>
                            <input id="name" name="name" type="text" class="form-control" id="basic-default-fullname" placeholder="{{$data->name}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                                id="email" name="email"
                                                type="text"
                                                id="basic-default-email"
                                                class="form-control"
                                                placeholder="{{$data->email}}"
                                                aria-label="john.doe"
                                                aria-describedby="basic-default-email2"
                                              />                          
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="postStatus" class="form-label">Status</label>
                            <input id="postStatus" name="postStatus" type="text" class="form-control" id="basic-default-company" placeholder="{{$data->postStatus}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">US (+1)</span>
                              <input
                                                  id="mobile" name="mobile"
                                                type="text"
                                                id="basic-default-phone"
                                                class="form-control phone-mask"
                                                placeholder="{{$data->mobile}}"
                              />                            
                          </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Date Of Birth</label>
                            <input
                                            id="birthdate" name="birthdate"
                                            class="form-control"
                                            type="date"
                                            value="{{$data->birthdate}}"
                                            id="html5-date-input">
                                          </div>                          
                          
                          <div class="mb-3 col-md-6">
                            <label for="city" class="form-label">State</label>
                            <input id="city" name="city" type="text" class="form-control" id="basic-default-company" placeholder="{{$data->city}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="231465" maxlength="6">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" name="country" class="select2 form-select">
                              <option value="">Select</option>
                              <option value="Australia">Australia</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Brazil">Brazil</option>
                              <option value="Canada">Canada</option>
                              <option value="China">China</option>
                              <option value="France">France</option>
                              <option value="Germany">Germany</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Japan">Japan</option>
                              <option value="Korea">Korea, Republic of</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Russia">Russian Federation</option>
                              <option value="South Africa">South Africa</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Language</label>
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
                          <div class="mb-3 col-md-6">
                            <label for="experience" class="form-label">Experience</label>
                            <input
                              id="experience" name="experience"
                                type="number"
                                id="basic-default-phone"
                                class="form-control phone-mask"
                                placeholder="{{$data->experience}}"
                              />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="currency" class="form-label">Currency</label>
                            <select id="currency" class="select2 form-select">
                              <option value="">Select Currency</option>
                              <option value="usd">USD</option>
                              <option value="euro">Euro</option>
                              <option value="pound">Pound</option>
                              <option value="bitcoin">Bitcoin</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" >Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>

                </div>
              </div>
    <!-- Basic Layout -->
  </div>
@endsection
