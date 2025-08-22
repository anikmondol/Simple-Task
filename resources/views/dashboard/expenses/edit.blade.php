@extends('layouts.dashboardmaster')

@section('content')
    <!-- start page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Edit Expense</h4>

                    <form action="{{ route('expenses.update', $expense->id) }}" method="POST" class="p-4 shadow rounded">
                        @csrf


                        <div class="mb-3">
                            <label class="form-label fw-bold">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $expense->title) }}">
                            @error('title')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-bold">Amount</label>
                            <input type="number" step="0.01" name="amount"
                                class="form-control @error('amount') is-invalid @enderror"
                                value="{{ old('amount', $expense->amount) }}">
                            @error('amount')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-bold">Date</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                value="{{ old('date', $expense->date) }}">
                            @error('date')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-bold">Category</label>
                            <select name="category" class="form-select @error('category') is-invalid @enderror">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat }}"
                                        {{ old('category', $expense->category) == $cat ? 'selected' : '' }}>
                                        {{ $cat }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback d-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">Update</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
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
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        </script>
    @endif
