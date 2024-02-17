<a href="{{ route($post->category->slug.'.show', $post->slug) }}">
    <img class="object-cover object-center rounded border border-secondary-default hover:opacity-75" 
    alt="{{ $post->title }}"
    src="{{ $post->thumbnail_url }}">
</a>