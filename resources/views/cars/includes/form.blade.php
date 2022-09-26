<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label for="targa">Targa</label>
                <input type="text" class="form-control" id="targa" name="targa" value="{{ old('title', $car->targa) }}">
            </div>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $car->marca) }}">
            </div>
            <div class="form-group">
                <label for="anno_immatricolazione">Anno immatricolazione</label>
                <input type="date" class="form-control" id="anno_immatricolazione" name="anno_immatricolazione" value="{{ old('anno_immatricolazione', $car->anno_immatricolazione) }}">
            </div>
            <div class="form-group">
                <label for="km">Km</label>
                <input type="text" class="form-control" id="km" name="km" value="{{ old('km', $car->km) }}">
            </div>
        </div>
        <div class="col-4">
            @foreach ($optionals as $optional)
                @if ($errors->any())
                    <div class="form-check">
                        <input type="checkbox" name="optionals[]" class="form-check-input" id="input-optionals" value="{{ $optional->id }}"
                        {{ in_array($optional->id, old('optionals', [])) ? 'checked' : '' }}>
                        <label for="input-optionals" class="m-0">{{ $optional->nome }}</label>
                    </div>
                @else
                    <div class="form-check">
                        <input type="checkbox" name="optionals[]" class="form-check-input" id="input-optionals" value="{{ $optional->id }}"
                        {{ $car->optionals->contains($optional) ? 'checked' : '' }}>
                        <label for="input-optionals" class="m-0">{{ $optional->nome }}</label>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
