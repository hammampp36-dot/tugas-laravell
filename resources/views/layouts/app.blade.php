```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Daftar Tugas') — Todo</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 text-slate-800 antialiased">

    <header class="border-b border-slate-200 bg-white shadow-sm">
        <nav class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4 sm:px-6">
            <a href="{{ route('todos.index') }}"
               class="text-lg font-bold tracking-tight text-indigo-600">
                Todo <span class="text-slate-700">/ Belajar Laravel</span>
            </a>

            <span class="hidden text-sm text-slate-500 sm:inline">
                Kelola tugasmu dengan mudah
            </span>
        </nav>
    </header>

    <main class="mx-auto min-h-[75vh] max-w-5xl px-4 py-8 sm:px-6 sm:py-10">

        @if (session('success'))
            <div role="status"
                 class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div role="alert"
                 class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                <p class="font-semibold">Periksa kembali isianmu:</p>

                <ul class="mt-2 list-inside list-disc space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')

    </main>

    <footer class="border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-5xl px-4 py-5 text-center text-sm text-slate-500 sm:px-6">
            Latihan CRUD · Laravel · Blade · SQLite
        </div>
    </footer>

</body>
</html>
```
