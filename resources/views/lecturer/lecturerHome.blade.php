@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--GET LOGGED IN USER INFORMATION-->
                    <h4>User ID</h4>
                    {{$user_id}}
                    <h4>User Name</h4>
                    {{$username}} <br>

                    {{ __('You are logged in!') }}

                    <a href="admin">You are an lecturer</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
