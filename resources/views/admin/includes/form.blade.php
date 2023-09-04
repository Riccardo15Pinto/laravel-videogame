<div class="d-flex justify-content-center">
    <div class="wrapper">
        <form action="" class="card p-5">

            <div class="row">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del videogame</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $videogame->title) }}" required autofocus>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="min_age" class="form-label">Età minima consigliata</label>
                        <input type="numb" class="form-control" id="min_age" name="min_age" min="3"
                            max="18" value="{{ old('min_age', $videogame->min_age) }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="release_date" class="form-label">Data di uscita</label>
                        <input type="numb" class="form-control" id="min_age" name="release_date" min="3"
                            max="18" value="{{ old('release_date', $videogame->release_date) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="img" class="form-label">Copertina</label>
                        <input type="text" class="form-control" id="img"
                            value="{{ old('img_path', $videogame->img_path) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description">{{ old('description', $videogame->description) }}</textarea>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-center">
                    <figure>
                        <img src="http://marcolanci.it/utils/placeholder.jpg" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-warning me-3">Reset</button>
                    <button class="btn btn-success">Invia</button>
                </div>
            </div>
        </form>

    </div>
</div>
