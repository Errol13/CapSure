@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="dropdown text-end">
            <button id="service-dropdown" class="mt-3 btn btn-dark-purple dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if($user_type === 'Photographer')
                Photographer
                @elseif($user_type === 'Studio Owner')
                Studio Photoshoot
                @else
                Service
                @endif
            </button>
            <ul class="dropdown-menu">
                <li @if(!$user_type || $user_type==='Photographer' ) class="active" @endif>
                    <a class="dropdown-item" href="{{ route('services.index', ['user_type' => 'Photographer']) }}">Photographer</a>
                </li>
                <li @if($user_type==='Studio Owner' ) class="active" @endif>
                    <a class="dropdown-item" href="{{ route('services.index', ['user_type' => 'Studio Owner']) }}">Studio Photoshoot</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="container mt-4">
        <div class="row">
            @foreach($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card bg-green shadow-lg">
                    <div class="ms-2 card-body ltr-spng">
                        <img class="text-center avatar-ser" src="{{ asset('/img/' . $user->avatar) }}">
                        <h5 class="mt-2 card-title"><strong>{{ $user->name }}</strong></h5>
                        Project Count: <strong>{{ $user->profile ? $user->profile->project_count : null }}</strong><br />
                        Commission Fee: <strong>P{{ $user->profile ? $user->profile->fee : null }}/hr</strong>
                        @if ($user->profile && $user->profile->availability == "Available")
                        <p class="card-text"><strong class="avl-color">{{ $user->profile->availability }}</strong></p>
                        @else
                        <p class="card-text"><strong class="navl-color"> {{ $user->profile ? $user->profile->availability : null }}</strong></p>
                        @endif
                        <a href="{{ route('profile.show', ['user' => $user->id]) }}"><button class="btn btn-aqua">See Profile</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-menu li').click(function(event) {
            event.preventDefault();
            var selectedOption = $(this).find('a').text();
            $('#service-dropdown').text(selectedOption);
            var href = $(this).find('a').attr('href');
            window.location.href = href;
        });

        // Update button text on initial page load
        var selectedOption = $('.dropdown-menu li.active a').text();
        $('#service-dropdown').text(selectedOption);
    });
</script>
@endsection