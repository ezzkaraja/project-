<div class="card">
    <h2>{{$titel ??'card Title'}}</h2>
    @if ($slot->isEmpty())
        <p>No content provided.</p>

    @else
    {{ $slot }}
    @endif
</div>
