<x-layout>
      <h3>woiiiii</h3>
    <h1>halo {{ $nama }}</h1>
    <p>umur kamu {{ $umur }}</p>
    @if ($umur > 17)
    <p>anda sudah dewasa</p>
    @else
    <p>anda masih anak-anak</p>
    @endif
    <x-slot:footer>
        <strong>Halaman Contact</strong>
    </x-slot:footer>
</x-layout>
