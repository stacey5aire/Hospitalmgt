@extends('admin.master')

@section('content')

<div class="p-2 text-end align-right">
    <a href="{{ route('admin.add.doctor') }}">
        <button class="btn btn-primary">Add New Doctor +</button>
    </a>
</div>

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Table with contextual classes</h4>
            {{-- <p class="card-description"> Add class <code>.table-{color}</code> --}}
            </p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-contextual">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Doctor Name</th>
                            <th>Phone</th>
                            <th>Speciality </th>
                            <th>Room No</th>
                            <th>Fees</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td> Photoshop </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                            <td> May 15, 2015 </td>
                            <td> May 15, 2015 </td>
                            <td>
                                <a href="{{ route('admin.edit.doctor') }}">
                                    <button class="btn btn-info">Edit</button>
                                </a>

                                <button class="btn btn-danger">Delete</button>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection