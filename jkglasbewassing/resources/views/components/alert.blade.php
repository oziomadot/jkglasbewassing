@props(['message', 'type'])
@if($message)
<div class="alert alert-{{ $type }}">
    {{ $message }}
</div>
@endif
