```blade
@extends('layouts.app')

@section('title', 'Daftar Tugas')

@section('content')
<div class="space-y-6">

    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Task Manager
            </p>

            <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">
                Daftar Tugas
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Catat tugasmu, kerjakan, lalu tandai selesai.
            </p>
        </div>

        <a href="{{ route('todos.create') }}"
           class="inline-flex items-center justify-center rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700">
            + Tambah Tugas
        </a>
    </div>

    <div class="space-y-4">
        @forelse ($todos as $todo)

            <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:shadow-md sm:p-6">

                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">

                    <div class="min-w-0 flex-1">
                        <h2 class="break-words text-lg font-bold text-slate-900">
                            <a href="{{ route('todos.show', $todo) }}"
                               class="transition hover:text-indigo-600">
                                {{ $todo->title }}
                            </a>
                        </h2>

                        <p class="mt-3">
                            @if ($todo->is_completed)
                                <span class="inline-flex rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">
                                    ✓ Selesai
                                </span>
                            @else
                                <span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">
                                    Belum selesai
                                </span>
                            @endif
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-2">
                        <a href="{{ route('todos.show', $todo) }}"
                           class="rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                            Detail
                        </a>

                        <a href="{{ route('todos.edit', $todo) }}"
                           class="rounded-lg bg-indigo-50 px-3 py-2 text-sm font-medium text-indigo-700 transition hover:bg-indigo-100">
                            Edit
                        </a>

                        <form action="{{ route('todos.destroy', $todo) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus tugas ini?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    aria-label="Hapus tugas {{ $todo->title }}"
                                    class="rounded-lg bg-red-50 px-3 py-2 text-sm font-medium text-red-600 transition hover:bg-red-100">
                                Hapus
                            </button>
                        </form>
                    </div>

                </div>
            </article>

        @empty
            <div class="rounded-2xl border-2 border-dashed border-slate-300 bg-white px-6 py-12 text-center">
                <div class="text-4xl">📝</div>

                <h2 class="mt-4 text-lg font-bold text-slate-800">
                    Belum ada tugas
                </h2>

                <p class="mt-2 text-sm text-slate-500">
                    Yuk, tambahkan tugas pertamamu!
                </p>

                <a href="{{ route('todos.create') }}"
                   class="mt-5 inline-flex rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700">
                    + Buat Tugas
                </a>
            </div>
        @endforelse
    </div>

</div>
@endsection
```
