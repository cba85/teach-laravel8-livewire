<div>

    @if ($postAdded)
    <div class="alert alert-success">Post added</div>
    @endif

    @if (session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <livewire:form>

        @foreach ($posts as $post)
        <livewire:post :post="$post" :key="$post->id">
            @endforeach

            {{ $posts->links() }}
</div>
