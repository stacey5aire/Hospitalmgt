@extends('admin.master')

@section('content')

<div class="p-2 text-end align-right">
    <a href="{{ route('admin.add.purchase') }}">
        <button class="btn btn-primary">Add A Purchase Receipt</button>
    </a>
</div>

<div class="col-lg-12 stretch-card " style="min-height: 28em">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Purchased Medicines Status</h4>
            {{-- <p class="card-description"> Add class <code>.table-{color}</code> --}}
            </p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-contextual">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>

                            <th>Email</th>
                            <th>Phone</th>
                            <th>Medicine Name</th>
                            <th>Medicine ID</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Vendor</th>
                            <th>Date</th>
                            <th>Payment Status</th>
                            <th>Delivery Status</th>
                            <th>Created At</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Herman Beck</td>

                            <td>herman@example.com</td>
                            <td>123456789</td>
                            <td>Photoshop</td>
                            <td>456</td>
                            <td>$77.99</td>
                            <td>1</td>
                            <td>Vendor X</td>
                            <td>2024-04-15</td>
                            <td>Paid</td>
                            <td>Not Delivered</td>
                            <td>2024-04-15 10:00:00</td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection