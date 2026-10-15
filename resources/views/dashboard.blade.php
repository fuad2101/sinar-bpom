@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="flex-1 w-1.5 p-4">
            <x-wirekit::sidebar style="width: 16rem;">
                <x-wirekit::sidebar.item href="#" :active="true">Dashboard</x-wirekit::sidebar.item>
                <x-wirekit::sidebar.collapsible label="Keuangan" :open="true" icon="truck">
                    <x-wirekit::sidebar.item href="#">Perencanaan Anggaran</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Realisasi Anggaran</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Pembuatan Invoice</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Pembuatan LPJ</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Pejabat Perbendaharaan</x-wirekit::sidebar.item>
                </x-wirekit::sidebar.collapsible>
                <x-wirekit::sidebar.collapsible label="Pengadaan & PDTT" icon="map">
                    <x-wirekit::sidebar.item href="#">Katalog Barang</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Rekapan Pengajuan</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Pengadaan Barang & Jasa (PBJ)</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Pengadaan Barang & Jasa (PBJ)</x-wirekit::sidebar.item>
                </x-wirekit::sidebar.collapsible>
                <x-wirekit::sidebar.item href="#">Help</x-wirekit::sidebar.item>
            </x-wirekit::sidebar>
        </div>
    </div>
@endsection
