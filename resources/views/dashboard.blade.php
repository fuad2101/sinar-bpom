@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="flex-1 p-4">
            <x-wirekit::sidebar style="width: 16rem;">
                <x-wirekit::sidebar.item href="#" :active="true">Dashboard</x-wirekit::sidebar.item>
                <x-wirekit::sidebar.collapsible label="Projects" :open="true">
                    <x-wirekit::sidebar.item href="#">Frontend</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Backend</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Mobile App</x-wirekit::sidebar.item>
                </x-wirekit::sidebar.collapsible>
                <x-wirekit::sidebar.collapsible label="Settings">
                    <x-wirekit::sidebar.item href="#">General</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Security</x-wirekit::sidebar.item>
                    <x-wirekit::sidebar.item href="#">Billing</x-wirekit::sidebar.item>
                </x-wirekit::sidebar.collapsible>
                <x-wirekit::sidebar.item href="#">Help</x-wirekit::sidebar.item>
            </x-wirekit::sidebar>
        </div>
    </div>
@endsection
