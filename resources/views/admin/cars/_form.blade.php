<div class="space-y-4">
    <div>
        <label for="brand_id" class="block text-sm font-medium text-gray-700">Бренд</label>
        <select id="brand_id" name="brand_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ (old('brand_id', $car->brand_id ?? '') == $brand->id) ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Остальные поля аналогично -->

    <div>
        <label for="images" class="block text-sm font-medium text-gray-700">Изображения</label>
        <input type="file" id="images" name="images[]" multiple class="mt-1 block w-full" accept="image/*">
    </div>
</div>