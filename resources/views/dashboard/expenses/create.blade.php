@extends('layouts.dashboardmaster')

@section('content')
    <!-- start page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Add Expense</h4>

                    <form action="{{ route('expenses.store') }}" method="POST" class="p-4 shadow rounded ">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}" placeholder="Enter expense title">
                            @error('title')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-bold">Amount</label>
                            <input type="number" step="0.01" name="amount"
                                class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}"
                                placeholder="Enter amount">
                            @error('amount')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-bold">Date</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Category</label>
                            <select name="category" class="form-select">
                                <option value="">-- Select Category --</option>
                                <option value="Food" {{ old('category') == 'Food' ? 'selected' : '' }}>Food</option>
                                <option value="Transport" {{ old('category') == 'Transport' ? 'selected' : '' }}>Transport
                                </option>
                                <option value="Shopping" {{ old('category') == 'Shopping' ? 'selected' : '' }}>Shopping
                                </option>
                                <option value="Others" {{ old('category') == 'Others' ? 'selected' : '' }}>Others</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback d-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">
                                Save
                            </button>
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
                gravity: "top",
                position: "right",
                stopOnFocus: true
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} 
            }).showToast();
        </script>
    @endif
