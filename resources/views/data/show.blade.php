<x-layout>
        <div class="flow-root">

            <dl class="-my-3 divide-y divide-gray-200 text-sm">
                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Nama</dt>

                    <dd class="text-gray-700 sm:col-span-2">{{ $dat->nama }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Id</dt>

                    <dd class="text-gray-700 sm:col-span-2">{{ $dat->id }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">jurusan</dt>

                    <dd class="text-gray-700 sm:col-span-2">{{ $dat->jurusan }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Status</dt>

                    <dd class="text-gray-700 sm:col-span-2">{{ $dat->status }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Umur</dt>

                    <dd class="text-gray-700 sm:col-span-2">{{ $dat->umur }}</dd>
                </div>
            </dl>
        </div>
    <x-slot:footer>
        <strong>Details</strong>
    </x-slot>
</x-layout>
