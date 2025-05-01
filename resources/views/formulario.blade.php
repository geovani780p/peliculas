<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ $pelicula->titulo ?? old('titulo') }}" required>
    @error('titulo')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" class="form-control" required>{{ $pelicula->descripcion ?? old('descripcion') }}</textarea>
    @error('descripcion')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="genero" class="form-label">Género</label>
    <input type="text" name="genero" class="form-control" value="{{ $pelicula->genero ?? old('genero') }}" required>
    @error('genero')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="director" class="form-label">Director</label>
    <input type="text" name="director" class="form-control" value="{{ $pelicula->director ?? old('director') }}" required>
    @error('director')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fecha_estreno" class="form-label">Fecha de estreno</label>
    <input type="date" name="fecha_estreno" class="form-control" value="{{ $pelicula->fecha_estreno ?? old('fecha_estreno') }}" required>
    @error('fecha_estreno')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
