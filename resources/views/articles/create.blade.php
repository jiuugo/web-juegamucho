@extends('layouts.admin')
@section('page-title', 'Crear Artículo')
@section('main-content')
    <div>
        <h1>Crear Nuevo Artículo</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nombre del Artículo</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="@error('name')
                        error-input
                    @enderror" required>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description">Descripción del Artículo</label>
                <textarea name="description" id="description" rows="4" class="@error('description') error-input @enderror"
                    required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="brand_id">Marca</label>
                <select name="brand_id" id="brand_id" class="@error('brand_id')
                @enderror" required>
                    <option value="">Seleccione una marca</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('brand_id')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="category_id">Categoría</label>
                <select name="category_id" id="category_id"
                    class="@error('category_id')
                    error-input
                @enderror" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="price">Precio (€)</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01"
                    min="0" class="@error('price')
                        error-input
                    @enderror"
                    required>
                @error('price')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="min_age">Edad Mínima Recomendada</label>
                <input type="number" name="min_age" id="min_age" value="{{ old('min_age') }}" min="0"
                    class="@error('min_age')
                    error-input
                @enderror" required>
                @error('min_age')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="max_age">Edad Máxima Recomendada</label>
                <input type="number" name="max_age" id="max_age" value="{{ old('max_age') }}" min="0"
                    class="@error('max_age')
                    error-input
                @enderror" required>
                @error('max_age')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Crear Artículo</button>
        </form>
    </div>
@endsection
