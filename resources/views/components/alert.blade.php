@props(['type' => 'success'])

@if(session($type))
    <div>
        {{ session($type) }}
    </div>
@endif