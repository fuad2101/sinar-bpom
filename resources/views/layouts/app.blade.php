<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'SINAR | Sistem Informasi Anggaran' }}</title>
    @vite('resources/css/app.css')
    @wirekitStyles
    @livewireStyles
</head>
<body>
    <div class="py-4 px-6 bg-blue-100">
        {{-- Navbar Section --}}
        <x-wirekit::navbar>
            <x-slot:brand>
                SINAR
            </x-slot:brand>
            <x-wirekit::navbar.item href="#" :active="true">Home</x-wirekit::navbar.item>
            <x-wirekit::navbar.item href="#">Features</x-wirekit::navbar.item>
            <x-wirekit::navbar.item href="#">Pricing</x-wirekit::navbar.item>
            <x-wirekit::navbar.item href="#">Docs</x-wirekit::navbar.item>
            <x-wirekit::dropdown>
                <x-wirekit::dropdown.trigger>
                    <x-wirekit::button intent="neutral" surface="ghost" size="sm">
                        More
                        <svg style="width: 1rem; height: 1rem; margin-left: 0.25rem; color: var(--color-wk-text-muted);" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </x-wirekit::button>
                </x-wirekit::dropdown.trigger>
                <x-wirekit::dropdown.panel>
                    <x-wirekit::dropdown.item href="#">Blog</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Changelog</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Roadmap</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Customers</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Integrations</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.separator />
                    <x-wirekit::dropdown.item href="#">Support</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Community</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Status</x-wirekit::dropdown.item>
                    <x-wirekit::dropdown.item href="#">Contact</x-wirekit::dropdown.item>
                </x-wirekit::dropdown.panel>
            </x-wirekit::dropdown>
            <x-slot:actions>
                <x-wirekit::button intent="neutral" surface="ghost" size="sm">Log In</x-wirekit::button>
                <x-wirekit::button size="sm">Sign Up</x-wirekit::button>
            </x-slot:actions>
        </x-wirekit::navbar>
        {{-- End Navbar Section --}}

        {{-- Hero Section --}}
        <x-wirekit::hero>
            <x-slot:title>Sinar BPOM Mamuju</x-slot:title>
            <x-slot:lede>Aplikasi Serba Bisa Inovasi BPOM Mamuju</x-slot:lede>
            <x-slot:actions>
                <x-wirekit::button>Get Started</x-wirekit::button>
            </x-slot:actions>
        </x-wirekit::hero>
        {{-- End Hero Section --}}

    </div>
    <div class="bg-blue-100">
        @yield('content')
    </div>
@wirekitScripts
@livewireScripts
</body>
</html>
