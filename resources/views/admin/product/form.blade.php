<x-admin-layout>

    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
              selector: '#description'
            });
          </script>
    @endpush

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Product
    </h2>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            @isset($model)
                @method('put')
            @endisset

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name *</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Basic T-Shirt"
                    name="name"
                    required
                    value="{{ $model->name ?? '' }}"
                    >
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Price *</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="$149"
                    name="price"
                    type="number"
                    required
                    min="0"
                    value="{{ $model->price ?? 0 }}"
                    >
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Image *</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="image"
                    @if(!isset($model)) required @endif
                    type="file"
                    accept="image/*"
                    oninput="preview.src=window.URL.createObjectURL(this.files[0])"
                    >
            </label>

            <div class="rounded mt-4 w-100 h-1/4 text-center">
                <img id="preview" src="{{ $model->image ?? '' }}">
            </div>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea name="description" id="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Product description...">{!! $model->description ?? '' !!}</textarea>
              </label>
    
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Category *
                </span>
                <select required name="category_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(isset($model) && $model->category_id == $category->id) selected @endif>{{ $category->name }} @if($category->category_id) ({{ $category->category->name }}) @endif</option>
                    @endforeach
                </select>
            </label>
    
            <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Submit
            </button>
        </form>
    </div>
</x-admin-layout>
