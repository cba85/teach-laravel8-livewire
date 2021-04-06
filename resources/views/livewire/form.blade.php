<div class="mb-4">
    <form wire:submit.prevent="addPost">
        <div class="form-group">
            <label for="body" class="sr-only">Post</label>
            <textarea name="body" id="body" cols="30" rows="3" class="form-control @error('body') is-invalid @enderror" wire:model="body"></textarea>
            @error('body')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror

            {{ $body }}
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
