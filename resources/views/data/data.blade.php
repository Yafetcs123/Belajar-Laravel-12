<x-layout>
    <h2>Selamat Datang di data</h2>
    <h3>Daftar Data</h3>
    <ul>
        @foreach ($data as $n)
        <li>{{ $n['nama'] }}</li>
        <h3>umur kamu : {{ $n['umur'] }}</h3>
        <p>Status : {{ $n['status'] }}</p>
        <p>Lihat <strong style="color : blue">Details</strong></p>
        @endforeach 
    </ul>
    <x-slot:footer>
        <strong>Data</strong>
    </x-slot>
</x-layout> 