<x-app-layout>

<script src="https://cdn.tiny.cloud/1/t1c3opari55uwisatczu66ln76h2kvtq7w79zsko3ccl0m6r/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'.text-editor',toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded'});</script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white  p-6">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" class="max-w-sm-mx-auto">
                @csrf
                <div class="mb-6">
                    <h6 class="font-bold mb-6">Package</h6>
                    <div class="mb-5">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Your Title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-5">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 text-editor"
                            placeholder="Description Product...">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-5">
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Category</label>
                        <select id="category_id"
                            name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" id="price" name="price"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Your Price" value="{{ old('price') }}">
                    </div>
                    <div>
                        <div class="flex items-center justify-end">
                            <button id="addFileInput" class="bg-orange-500 px-5 py-2 rounded-md text-white" type="button">Tambah File</button>
                        </div>
    
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                            Foto Product</label>
                        <div id="fileInputs">
                            <div class="mb-3 file-input">
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                        name="images[]"
                                        aria-describedby="user_avatar_help"
                                        type="file"
                                        multiple>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h6 class="font-bold mb-6">Package Location</h6>
                    <div class="mb-5">
                        <label for="country"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <select id="countries"
                            name="country"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="indonesia">Select Country</option>    
                            <option value="indonesia">Indonesia</option>    
                            <option value="Malaysa">Malaysa</option>    
                            <option value="Jepang">Jepang</option>    
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                            <input type="text" id="city" name="city"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="input city" value="{{ old('city') }}">  
                    </div>
                    <div class="mb-5">
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <textarea id="address" name="address" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500"
                            placeholder="address Package...">{{ old('address') }}</textarea>
                    </div>
                </div>
                <div>
                    <h6 class="font-bold mb-6">Package Catalogs</h6>
                    <div class="mb-5">
                        <label for="catalog_title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="catalog_title" name="catalog_title"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="input catalog title" value="{{ old('catalog_title') }}">  
                    </div>
                    <div class="mb-5">
                        <label for="price_base"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price Catalog</label>
                            <input type="number" id="price_base" name="price_base"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="input price catalog" value="{{ old('price') }}">  
                    </div>
                    <div class="mb-5">
                        <label for="price_base" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Available Days</label>
                        <div class="grid grid-cols-7">
                            <div class="flex items-center mb-3">
                                <input checked id="monday-checkbox" type="checkbox" name="available_days[]" value="1" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="monday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Senin</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="tuesday-checkbox" type="checkbox" name="available_days[]" value="2" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="tuesday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Selasa</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="wednesday-checkbox" type="checkbox" name="available_days[]" value="3" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="wednesday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Rabu</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="thursday-checkbox" type="checkbox" name="available_days[]" value="4" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="thursday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Kamis</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="friday-checkbox" type="checkbox" name="available_days[]" value="5" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="friday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Jumat</label>
                            </div>
                            <div class="flex items-center mb-3">
                                <input id="saturday-checkbox" type="checkbox" name="available_days[]" value="6" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="saturday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Sabtu</label>
                            </div>
                            <div class="flex items-center">
                                <input id="sunday-checkbox" type="checkbox" name="available_days[]" value="7" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="sunday-checkbox" class="ms-2 text-md font-medium text-gray-900 dark:text-gray-300">Minggu</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-5">
                        <label for="discount_catalog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount</label>
                        <input type="number" id="discount_catalog" name="discount_catalog"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                               placeholder="input price catalog %"  min="0" max="100" value="0" value="{{ old('discount') }}">
                    </div>
                    <div class="mb-5">
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description Catalog</label>
                            <textarea id="description_catalog" name="description_catalog" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 text-editor"
                            placeholder="description_catalog Package...">{{ old('description') }}</textarea>
                    </div>
                    
                </div>
                <button  type="submit" class="mt-5 px-6 bg-gray-900 rounded-md text-white text-sm py-3">
                    Submit
                </button>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#addFileInput').on('click', function () {
            var newInput = $(`<div class="mb-3 file-input flex items-center space-x-3">
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" name="images[]" aria-describedby="user_avatar_help" type="file" multiple>
                <button class="delete-file-input bg-red-700 px-5 py-2 rounded-md text-white ml-3" type="button">Hapus</button></div>`);
            $('#fileInputs').append(newInput);
        });

        $(document).on('click', '.delete-file-input', function () {
            var container = $(this).closest('.file-input');
            if ($('#fileInputs').children('.file-input').length > 1) {
                container.remove();
            } else {
                alert('Minimal satu input file harus ada.');
            }
        });

        $('#itinerary_select').on('change', function () {
            var selectedSection = $(this).val();
            $('#p_section_itinerary').text('Psection ' + selectedSection + ' itinerary');
        });
    });
</script>
</x-app-layout>
