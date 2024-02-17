<div class="p-2">
@foreach ($breadcrumbs as $url=>$name)
    <span class="text-xs"> / </span><a href="{{ $url }}" class="text-xs text-blue-500">{{ $name }}</a>
@endforeach
</div>