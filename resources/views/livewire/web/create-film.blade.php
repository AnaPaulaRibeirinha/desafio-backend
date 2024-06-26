<div>
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white py-2 px-4 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" id="title" wire:model="title" class="form-control">
            @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="summary">Resumo</label>
            <textarea id="summary" wire:model="summary" class="form-control"></textarea>
            @error('summary') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="cover">Capa (URL da Imagem)</label>
            <input type="text" id="cover" wire:model="cover" class="form-control">
            @error('cover') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Filme</button>
    </form>
</div>