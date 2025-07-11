<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Бренд -->
    <div>
        <label for="brand_id" class="block text-sm font-medium text-gray-700">Бренд *</label>
        <select id="brand_id" name="brand_id" required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option value="">Выберите бренд</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ old('brand_id', $car->brand_id ?? '') == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
        @error('brand_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Модель -->
    <div>
        <label for="model" class="block text-sm font-medium text-gray-700">Модель *</label>
        <input type="text" id="model" name="model" value="{{ old('model', $car->model ?? '') }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @error('model')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Тип кузова -->
    <div>
        <label for="body_type_id" class="block text-sm font-medium text-gray-700">Тип кузова *</label>
        <select id="body_type_id" name="body_type_id" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option value="">Выберите тип кузова</option>
            @foreach($bodyTypes as $bodyType)
                <option value="{{ $bodyType->id }}" {{ old('body_type_id', $car->body_type_id ?? '') == $bodyType->id ? 'selected' : '' }}>
                    {{ $bodyType->name }}
                </option>
            @endforeach
        </select>
        @error('body_type_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Тип двигателя -->
    <div>
        <label for="engine_type_id" class="block text-sm font-medium text-gray-700">Тип двигателя *</label>
        <select id="engine_type_id" name="engine_type_id" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option value="">Выберите тип двигателя</option>
            @foreach($engineTypes as $engineType)
                <option value="{{ $engineType->id }}" {{ old('engine_type_id', $car->engine_type_id ?? '') == $engineType->id ? 'selected' : '' }}>
                    {{ $engineType->name }}
                </option>
            @endforeach
        </select>
        @error('engine_type_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Тип привода -->
    <div>
        <label for="drive_type_id" class="block text-sm font-medium text-gray-700">Тип привода *</label>
        <select id="drive_type_id" name="drive_type_id" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option value="">Выберите тип привода</option>
            @foreach($driveTypes as $driveType)
                <option value="{{ $driveType->id }}" {{ old('drive_type_id', $car->drive_type_id ?? '') == $driveType->id ? 'selected' : '' }}>
                    {{ $driveType->name }}
                </option>
            @endforeach
        </select>
        @error('drive_type_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Год выпуска -->
    <div>
        <label for="year" class="block text-sm font-medium text-gray-700">Год выпуска *</label>
        <input type="number" id="year" name="year" min="1900" max="{{ date('Y')+1 }}" 
               value="{{ old('year', $car->year ?? '') }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @error('year')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Цена -->
    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Цена (₽) *</label>
        <input type="number" id="price" name="price" min="0" step="1000" 
               value="{{ old('price', $car->price ?? '') }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @error('price')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Пробег -->
    <div>
        <label for="mileage" class="block text-sm font-medium text-gray-700">Пробег (км)</label>
        <input type="number" id="mileage" name="mileage" min="0" 
               value="{{ old('mileage', $car->mileage ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @error('mileage')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Цвет -->
    <div>
        <label for="color" class="block text-sm font-medium text-gray-700">Цвет</label>
        <input type="text" id="color" name="color" value="{{ old('color', $car->color ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @error('color')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Коробка передач -->
    <div>
        <label for="transmission" class="block text-sm font-medium text-gray-700">Коробка передач</label>
        <select id="transmission" name="transmission"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option value="">Выберите коробку</option>
            <option value="Автомат" {{ old('transmission', $car->transmission ?? '') == 'Автомат' ? 'selected' : '' }}>Автомат</option>
            <option value="Механика" {{ old('transmission', $car->transmission ?? '') == 'Механика' ? 'selected' : '' }}>Механика</option>
            <option value="Робот" {{ old('transmission', $car->transmission ?? '') == 'Робот' ? 'selected' : '' }}>Робот</option>
            <option value="Вариатор" {{ old('transmission', $car->transmission ?? '') == 'Вариатор' ? 'selected' : '' }}>Вариатор</option>
        </select>
        @error('transmission')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Мощность -->
    <div>
        <label for="power" class="block text-sm font-medium text-gray-700">Мощность (л.с.)</label>
        <input type="number" id="power" name="power" min="0" 
               value="{{ old('power', $car->power ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @error('power')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Статус -->
    <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Статус *</label>
        <select id="status" name="status" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option value="in_stock" {{ old('status', $car->status ?? '') == 'in_stock' ? 'selected' : '' }}>В наличии</option>
            <option value="new" {{ old('status', $car->status ?? '') == 'new' ? 'selected' : '' }}>Новинка</option>
            <option value="on_order" {{ old('status', $car->status ?? '') == 'on_order' ? 'selected' : '' }}>Под заказ</option>
        </select>
        @error('status')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Описание -->
    <div class="md:col-span-2">
        <label for="description" class="block text-sm font-medium text-gray-700">Описание</label>
        <textarea id="description" name="description" rows="3"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description', $car->description ?? '') }}</textarea>
        @error('description')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Изображения -->
    <div class="md:col-span-2">
        <label for="images" class="block text-sm font-medium text-gray-700">Изображения</label>
        <input type="file" id="images" name="images[]" multiple
               class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
               accept="image/*">
        @error('images')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
        @error('images.*')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        <!-- Превью существующих изображений (для редактирования) -->
        @isset($car)
            <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($car->images as $image)
                    <div class="relative">
                        <img src="{{ asset('storage/' . $image->path) }}" alt="Car image" class="w-full h-auto rounded">
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