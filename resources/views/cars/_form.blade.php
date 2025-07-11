<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Бренд -->
    <div class="mb-4">
        <label for="brand_id" class="block text-gray-700 text-sm font-bold mb-2">Бренд *</label>
        <select name="brand_id" id="brand_id" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="">Выберите бренд</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ old('brand_id', $car->brand_id ?? '') == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
        @error('brand_id')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Модель -->
    <div class="mb-4">
        <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Модель *</label>
        <input type="text" name="model" id="model" value="{{ old('model', $car->model ?? '') }}" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('model')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Год выпуска -->
    <div class="mb-4">
        <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Год выпуска *</label>
        <input type="number" name="year" id="year" min="1900" max="{{ date('Y') + 1 }}" 
               value="{{ old('year', $car->year ?? '') }}" required
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('year')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Цена -->
    <div class="mb-4">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Цена (₽) *</label>
        <input type="number" name="price" id="price" min="0" step="1000" 
               value="{{ old('price', $car->price ?? '') }}" required
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('price')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Тип кузова -->
    <div class="mb-4">
        <label for="body_type_id" class="block text-gray-700 text-sm font-bold mb-2">Тип кузова *</label>
        <select name="body_type_id" id="body_type_id" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="">Выберите тип кузова</option>
            @foreach($bodyTypes as $bodyType)
                <option value="{{ $bodyType->id }}" {{ old('body_type_id', $car->body_type_id ?? '') == $bodyType->id ? 'selected' : '' }}>
                    {{ $bodyType->name }}
                </option>
            @endforeach
        </select>
        @error('body_type_id')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Тип двигателя -->
    <div class="mb-4">
        <label for="engine_type_id" class="block text-gray-700 text-sm font-bold mb-2">Тип двигателя *</label>
        <select name="engine_type_id" id="engine_type_id" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="">Выберите тип двигателя</option>
            @foreach($engineTypes as $engineType)
                <option value="{{ $engineType->id }}" {{ old('engine_type_id', $car->engine_type_id ?? '') == $engineType->id ? 'selected' : '' }}>
                    {{ $engineType->name }}
                </option>
            @endforeach
        </select>
        @error('engine_type_id')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Тип привода -->
    <div class="mb-4">
        <label for="drive_type_id" class="block text-gray-700 text-sm font-bold mb-2">Тип привода *</label>
        <select name="drive_type_id" id="drive_type_id" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="">Выберите тип привода</option>
            @foreach($driveTypes as $driveType)
                <option value="{{ $driveType->id }}" {{ old('drive_type_id', $car->drive_type_id ?? '') == $driveType->id ? 'selected' : '' }}>
                    {{ $driveType->name }}
                </option>
            @endforeach
        </select>
        @error('drive_type_id')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Изображения -->
    <div class="mb-4 md:col-span-2">
        <label for="images" class="block text-gray-700 text-sm font-bold mb-2">Изображения</label>
        <input type="file" name="images[]" id="images" multiple
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        @error('images')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        
        @isset($car)
            <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($car->images as $image)
                    <div class="relative">
                        <img src="{{ Storage::url($image->path) }}" alt="Car image" class="w-full h-auto rounded">
                        <button type="button" onclick="deleteImage({{ $image->id }})" 
                                class="absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                @endforeach
            </div>
        @endisset
    </div>
</div>

@isset($car)
    @push('scripts')
        <script>
            function deleteImage(imageId) {
                if (confirm('Удалить изображение?')) {
                    fetch(`/cars/{{ $car->id }}/images/${imageId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        }
                    }).then(response => {
                        if (response.ok) {
                            location.reload();
                        }
                    });
                }
            }
        </script>
    @endpush
@endisset