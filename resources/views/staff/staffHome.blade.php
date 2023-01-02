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


                    {{ __('You are logged in!') }}

                    <a href="staff/dashboard">Welcome to the staff dashboard</a>
                    
                    <h3><p class="news">All news and announcements will be posted here. <br> Updates posted each morning.</p></h3>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
