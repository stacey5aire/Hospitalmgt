@extends('admin.master')

@section('content')

<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center card-title">Add Doctor</h3>
            <form class="form-sample" action="{{ route('admin.add.new.doctor') }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                <p class="card-description"> Personal info </p>
                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="id">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" id="id" class="form-control" />
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="name">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="gender">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" id="gender" class="form-control">
                                    <option selected></option>Male
                                    </option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="email">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" id="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="phone">Phone</label>
                            <div class="col-sm-9">
                                <input type="tel" name="phone" id="phone" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="dob">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" id="dob" class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="speciality">Speciality</label>
                            <div class="col-sm-9">
                                <select name="speciality" id="speciality" class="form-control">
                                    <option>Surgeon</option>
                                    <option>Dentist</option>
                                    <option>Optician</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios"
                                            id="membershipRadios1" value="" checked> Full Time </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios"
                                            id="membershipRadios2" value="option2"> Part Time </label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <p class="card-description"> Address </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="address">Address </label>
                            <div class="col-sm-9">
                                <input type="text" name="address" id="address" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="state">State</label>
                            <div class="col-sm-9">
                                <input type="text" name="state" id="state" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="working_time">Working Time</label>
                            <div class="col-sm-9">
                                <input type="text" name="working_time" id="working_time" class="form-control"
                                    pattern="^(0?[1-9]|1[0-2]):[0-5][0-9] (am|pm) - (0?[1-9]|1[0-2]):[0-5][0-9] (am|pm)$"
                                    placeholder="Format 10:00 am - 3:00 pm" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="working_days">Working Days</label>
                            <div class="col-sm-9">
                                <input type="text" name="working_days" id="working_days" class="form-control"
                                    placeholder="Monday, Tuesday" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="room">Room</label>
                            <div class="col-sm-9">
                                <input type="text" name="room" id="room" class="form-control" placeholder="100" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="membership">Membership</label>
                            <div class="col-sm-9">
                                <input type="text" name="membership" id="membership" class="form-control"
                                    placeholder="Full time or Part time" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="description">Description</label>
                            <div class="col-sm-9">
                                <textarea placeholder="About the doctor..." name="description" id="description"
                                    class="form-control" cols="30" rows="30"></textarea>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="contact">Contact</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact" id="contact" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="fee">Fee</label>
                            <div class="col-sm-9">
                                <input type="text" name="fee" id="fee" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>

                <p>Other Files</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="image">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="image" class="col-span-2 row-span-2 form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
