```blade
@extends('layouts.app')

@section('title', 'Tambah Tugas')

@section('content')
<div class="mx-auto max-w-2xl">

    <a href="{{ route('todos.index') }}"
       class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-indigo-600">
        ← Kembali ke daftar tugas
    </a>

    <div class="mt-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

        <div class="mb-8">
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Tugas baru
            </p>

            <h1 class="mt-2 text-2xl font-bold text-slate-900">
                Tambah Tugas
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Isi informasi tugas yang ingin kamu catat.
            </p>
        </div>

        <form action="{{ route('todos.store') }}" method="POST"
              class="space-y-6">
            @csrf

            <div>
                <label for="title"
                       class="mb-2 block text-sm font-semibold text-slate-700">
                    Judul tugas <span class="text-red-500">*</span>
                </label>

                <input
                    id="title"
                    name="title"
                    type="text"
                    maxlength="255"
                    value="{{ old('title') }}"
                    required
                    placeholder="Contoh: Belajar Laravel"
                    class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                >
            </div>

            <div>
                <label for="description"
                       class="mb-2 block text-sm font-semibold text-slate-700">
                    Deskripsi
                    <span class="font-normal text-slate-400">(opsional)</span>
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    maxlength="5000"
                    placeholder="Tuliskan detail tugasmu di sini..."
                    class="w-full resize-y rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                >{{ old('description') }}</textarea>
            </div>

            <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 p-4">
                <input
                    type="checkbox"
                    name="is_completed"
                    value="1"
                    @checked(old('is_completed', false))
                    class="h-5 w-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500"
                >

                <span class="text-sm font-medium text-slate-700">
                    Tugas ini sudah selesai
                </span>
            </label>

            <div class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-5 sm:flex-row sm:justify-end">

                <a href="{{ route('todos.index') }}"
                   class="rounded-xl border border-slate-300 px-5 py-3 text-center text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                    Batal
                </a>

                <button type="submit"
                        class="rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700">
                    Simpan Tugas
                </button>

            </div>
        </form>
    </div>
</div>
@endsection
```
