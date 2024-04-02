<x-admin-layout>

    <div class="w-full py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="mx-auto max-w-md rounded-md bg-white p-8 shadow-md">
                    <h2 class="mb-6 text-2xl font-semibold">Add Leave Type</h2>
                    <form action="{{ route('admin.leavetypes.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="mb-2 block text-sm font-bold text-gray-700">Leave Type
                                Name</label>
                            <input type="text" id="name" name="name" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-4">
                            <label for="count" class="mb-2 block text-sm font-bold text-gray-700">Leave Type
                                Count</label>
                            <input type="number" id="count" name="count" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>

                        <button type="submit"
                            class="focus:shadow-outline-blue rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none">
                            Add
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
