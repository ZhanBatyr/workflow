<x-admin-layout>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Category
    </h2>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="{{ $action }}" method="post">
            @csrf
            @isset($model)
                @method('put')
            @endisset
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name *</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Fashion"
                    name="name"
                    required
                    value="{{ $model->name ?? '' }}"
                    >
            </label>
    
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Parent category
                </span>
                <select name="category_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option value="">None</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(isset($model) && $model->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
    
            <button class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Submit
            </button>
        </form>
    </div>
</x-admin-layout>
