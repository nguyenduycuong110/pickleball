@props(['title', 'canonical'])

<div class="join-button ">
    <a class="register-button style-2 uk-flex uk-flex-middle order-course" href="{{ $canonical ?? '/' }}">
        <span>{{ $title }}</span>
        <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
    </a>
</div>