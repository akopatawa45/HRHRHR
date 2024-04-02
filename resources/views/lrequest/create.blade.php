<x-admin-layout>

    <div class="w-full py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="mx-auto max-w-md rounded-md bg-white p-8 shadow-md">
                    <h2 class="mb-6 text-2xl font-semibold">Leave Request</h2>
                    <form action="{{ route('employee.leaverequests.store', $employee_id) }}" method="POST">
                        @csrf
                        <div class="md:col-span-2">

                            <label for="role" class="float-left block text-lg font-normal text-gray-400">Leave
                                Type</label>
                            <select id="leavetype" name="leavetype"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-700 focus:outline-none">
                                <option value="">...</option>
                                @foreach ($ltypes as $ltype)
                                    <option value="{{ $ltype->name }}">{{ $ltype->name }}</option>
                                @endforeach
                            </select>
                            <div class="mb-4">
                                <label for="from" class="mb-2 block text-sm font-bold text-gray-700">From:</label>
                                <input type="date" id="from" name="from" placeholder="..." required
                                    class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="end" class="mb-2 block text-sm font-bold text-gray-700">End:</label>
                                <input type="date" id="end" name="end" placeholder="..." required
                                    class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="details" class="mb-2 block text-sm font-bold text-gray-700">Details</label>
                                <input type="description" id="details" name="details" placeholder="Optional..."
                                    required
                                    class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                            </div>

                            <button type="submit"
                                class="focus:shadow-outline-blue mt-5 rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none">
                                Add
                            </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
