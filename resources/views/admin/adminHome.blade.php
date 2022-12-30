@extends('../layouts.app')

@section('content')
<div class="container_me"">
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
                    

                    {{ __('You are logged in!') }}

                    <a href="admin/dashboard">You are an admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
