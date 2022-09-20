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
<button type="submit" class="btn btn-primary">Submit</button>
