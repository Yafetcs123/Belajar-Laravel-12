<x-layout>
    <h1 class="text-xl mb-5 font-bold">Daftar Siswa</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                    <th class="px-3 py-2 whitespace-nowrap">Jurusan</th>
                    <th class="px-3 py-2 whitespace-nowrap">Umur</th>
                    <th class="px-3 py-2 whitespace-nowrap">Status</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                    <th class="px-3 py-2 whitespace-nowrap">Details</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <h2>Selamat Datang di data</h2>
                <h3>Daftar Data</h3>
                @foreach ($data as $n)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap"> <a href="{{ url('/data/' . $n['id']) }}">
                                {{ $n['nama'] }}
                            </a>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $n['Jurusan'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $n['umur'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $n['status'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $n['nilai'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <a href="/data/{{ $n['id'] }}" class="text-teal-500 font-bold hover:opacity-50">
                                Views details
                            </a>
                        </td>
                        </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-slot:footer>
        <strong>Data</strong>
    </x-slot>
</x-layout>
