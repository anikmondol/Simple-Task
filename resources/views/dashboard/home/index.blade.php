@extends('layouts.dashboardmaster')

@section('content')
    <!-- start page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                        <h4> Expense Tracker</h4>
                        <button onclick="window.location.href='{{ route('expenses.create') }}'" type="button"
                            class="btn btn-info waves-effect waves-light">Add Expenses</button>
                    </div>
                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Amount</th>
                                <th>Created By</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($expenses as $key => $expense)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $expense->title }}</td>
                                    <td>{{ $expense->category }}</td>
                                    <td>{{ number_format($expense->amount, 2) }}</td>
                                    <td>{{ $expense->user->name ?? 'N/A' }}</td>
                                    <td>{{ $expense->date }}</td>
                                    <td>
                                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-sm btn-primary">
                                            <i class="bx bx-file"></i> Edit
                                        </a>
                                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="mdi mdi-trash-can"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No expenses found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3" class="text-end">Total:</th>
                                <th>{{ number_format($totalAmount, 2) }}</th>
                                <th colspan="2"></th>
                            </tr>
                        </tfoot>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


    <!-- end row-->
@endsection

@section('script')
    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 5000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {}
            }).showToast();
        </script>
    @endif
@endsection
