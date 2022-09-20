@props(['url', 'faIcon'])

<a href="{{ $url }}" target="_blank">
    <i class="fa-brands {{ $faIcon }}"></i>
</a>