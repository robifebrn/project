@extends('template')

@section('content')
<div class="container" style="margin-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda Telah Login
                </div>
            </div>
        </div>
    </div>
</div>
@endsection