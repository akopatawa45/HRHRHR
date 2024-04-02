<x-admin-layout>

    <div class="w-full py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-2 shadow-sm sm:rounded-lg">
                <div class="flex justify-between">
                    <h1 class="mt-3 text-[1.5rem] font-bold leading-[4rem] tracking-tight text-black">Leave Request List
                    </h1>
                    <a href="{{ route('employee.leaverequests.create') }}">
                        <svg class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                            </path>
                        </svg>
                    </a>
                </div>
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                Name
                            </th>
                            <th
                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                Counts
                            </th>
                            <th
                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                Created at
                            </th>
                            <th
                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                Setting
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($ltypes as $ltype) --}}
                        <tr>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap text-gray-900">
                                    {{-- {{ $ltype->name }} --}}
                                </p>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap text-gray-900">
                                    {{-- {{ $ltype->count }} --}}
                                </p>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                    <span aria-hidden
                                        class="absolute inset-0 rounded-full bg-green-200 opacity-50"></span>
                                    <span class="relative">
                                        {{-- {{ $ltype->created_at }} --}}
                                    </span>
                                </span>
                            </td>

                            <td class="flex border-b border-gray-200 bg-white px-3 py-5 text-sm">
                                <p class="whitespace-no-wrap px-2 text-gray-900">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM13.5 10.5h-6" />
                                        </svg>
                                    </a>
                                </p>
                                <p class="whitespace-no-wrap px-1 text-gray-900">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>

                                    </a>
                                </p>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
