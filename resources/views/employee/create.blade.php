<x-admin-layout>

    <div class="w-full py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="mx-auto max-w-md rounded-md bg-white p-8 shadow-md">
                    <h2 class="mb-6 text-2xl font-semibold">Add Employee</h2>
                    <form action="{{ route('admin.employees.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="first_name" class="mb-2 block text-sm font-bold text-gray-700">First Name</label>
                            <input type="text" id="first_name" name="first_name" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-4">
                            <label for="last_name" class="mb-2 block text-sm font-bold text-gray-700">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>
                        <h2 class="mb-6 text-2xl font-semibold">Employee Account</h2>

                        <div class="mb-4">
                            <label for="name" class="mb-2 block text-sm font-bold text-gray-700">Name</label>
                            <input type="text" id="name" name="name" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="mb-2 block text-sm font-bold text-gray-700">Email</label>
                            <input type="email" id="email" name="email" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="mb-2 block text-sm font-bold text-gray-700">Password</label>
                            <input type="password" id="password" name="password" placeholder="..." required
                                class="w-full rounded-md border px-3 py-2 focus:border-blue-500 focus:outline-none">
                        </div>
                        <h2 class="mb-6 text-2xl font-semibold">Assign Role</h2>
                        <div class="md:col-span-2">

                            <label for="role" class="float-left block text-lg font-normal text-gray-400"></label>
                            <select id="role" name="role"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-700 focus:outline-none">
                                <option value="">...</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>

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
