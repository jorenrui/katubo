@extends('layouts.dashboard')

@section('content')
    <div class="header py-7" style="background-color: #6b664d;"></div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.flash')
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">View Seller</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($sellers->count() > 0)
                                    @foreach($sellers as $seller)
                                        <tr>
                                            <td>{{ $seller->displayName() }}</td>
                                            <td>{{ $seller->address }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>No results found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
