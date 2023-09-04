<div class="d-flex justify-content-center">
    <div class="wrapper">
        @if ($videogame->exists)
            <form action="{{ route('admin.videogames.update', $videogame) }}" method="POST" class="card p-5">
                @method('PUT')
            @else
                <form action="{{ route('admin.videogames.store') }}" method="POST" class="card p-5">
        @endif
        @csrf
        <div class="row">
            <div class="col-5">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo del videogame</label>
                    <input type="text"
                        class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                        id="title" name="title" value="{{ old('title', $videogame->title ?? '') }}" required
                        autofocus>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-2">
                <div class="mb-3">
                    <label for="min_age" class="form-label">Età minima consigliata</label>
                    <input type="text"
                        class="form-control @error('min_age') is-invalid @elseif(old('min_age')) is-valid @enderror"
                        id="min_age" name="min_age" value="{{ old('min_age', $videogame->min_age ?? '') }}">
                    @error('min_age')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="release_date" class="form-label">Data di uscita</label>
                    <input type="date"
                        class="form-control @error('release_date') is-invalid @elseif(old('release_date')) is-valid @enderror"
                        id="release_date" name="release_date"
                        value="{{ old('release_date', $videogame->release_date ?? '') }}">
                    @error('release_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="mb-3">
                    <label for="img" class="form-label">Copertina</label>
                    <input type="text"
                        class="form-control @error('img_path') is-invalid @elseif(old('img_path')) is-valid @enderror"
                        id="img" value="{{ old('img_path', $videogame->img_path ?? '') }}" name="img_path">
                    @error('img_path')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror"
                        id="description" name="description">{{ old('description', $videogame->description ?? '') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center">
                <figure>
                    <img src="http://marcolanci.it/utils/placeholder.jpg" alt="" class="img-fluid">
                </figure>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col d-flex justify-content-end">
                <button class="btn btn-warning me-3" type="reset">Reset</button>
                <button class="btn btn-success" type="submit">Invia</button>
            </div>
        </div>
        </form>

    </div>
</div>
