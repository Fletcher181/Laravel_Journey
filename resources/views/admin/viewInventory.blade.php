<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INVENTORY MANAGEMENT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="">
                        <input type="text" name="category_name" placeholder="Enter Category Name" required>
                        <input type="submit" name="submit" style="background-color:green; color: white; padding: 8px;" value="Add category">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
