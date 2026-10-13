```blade
@extends('layouts.app')

@section('title', 'Detail Tugas')

@section('content')
<div class="mx-auto max-w-2xl">

    <a href="{{ route('todos.index') }}"
       class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-indigo-600">
        ← Kembali ke daftar tugas
    </a>

    <article class="mt-5 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="border-b border-slate-100 bg-slate-50 px-6 py-6 sm:px-8">
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Detail tugas
            </p>

            <h1 class="mt-2 break-words text-2xl font-bold text-slate-900 sm:text-3xl">
                {{ $todo->title }}
            </h1>

            <div class="mt-4">
                @if ($todo->is_completed)
                    <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1.5 text-sm font-semibold text-emerald-700">
                        ✓ Selesai
                    </span>
                @else
                    <span class="inline-flex rounded-full bg-amber-100 px-3 py-1.5 text-sm font-semibold text-amber-700">
                        Belum selesai
                    </span>
                @endif
            </div>
        </div>

        <div class="px-6 py-7 sm:px-8">
            <h2 class="text-sm font-semibold text-slate-700">
                Deskripsi tugas
            </h2>

            <div class="mt-3 min-h-24 whitespace-pre-line break-words rounded-xl bg-slate-50 p-4 text-sm leading-7 text-slate-600">{{ $todo->description ?: 'Tidak ada deskripsi.' }}</div>

            <div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

                <a href="{{ route('todos.index') }}"
                   class="rounded-xl border border-slate-300 px-5 py-3 text-center text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                    Kembali
                </a>

                <a href="{{ route('todos.edit', $todo) }}"
                   class="rounded-xl bg-indigo-600 px-5 py-3 text-center text-sm font-semibold text-white transition hover:bg-indigo-700">
                    Edit Tugas
                </a>

            </div>
        </div>
    </article>
</div>
@endsection
```
