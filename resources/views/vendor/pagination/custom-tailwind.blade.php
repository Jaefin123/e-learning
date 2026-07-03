@if ($paginator->hasPages())
    <div class="px-8 py-6 bg-surface-container-low flex items-center justify-between">
    
        <!-- Teks Informasi Kiri -->
        <p class="text-sm text-on-surface-variant font-medium">
            Menampilkan {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }} dari
            {{ number_format($paginator->total(), 0, ',', '.') }} anggota
        </p>
    
        <!-- Tombol Angka Kanan -->
        <div class="flex gap-2">
            {{-- Tombol Halaman Sebelumnya (Left Chevron) --}}
            @if ($paginator->onFirstPage())
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-300 cursor-not-allowed"
                    disabled>
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-400 hover:text-primary transition-all">
                    <span class="material-symbols-outlined">chevron_left</span>
                </a>
            @endif
    
            {{-- Logika Elemen Angka dan Titik-Titik (...) --}}
            @foreach ($elements as $element)
                {{-- String Pemisah Titik-Titik "..." --}}
                @if (is_string($element))
                    <span
                        class="w-10 h-10 flex items-center justify-center text-slate-400 font-medium">{{ $element }}</span>
                @endif
    
                {{-- Array Link Angka Halaman --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- Halaman Aktif --}}
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold shadow-md">{{ $page }}</button>
                        @else
                            {{-- Halaman Tidak Aktif --}}
                            <a href="{{ $url }}"
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-600 hover:bg-primary-fixed/20 transition-all font-medium">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
    
            {{-- Tombol Halaman Selanjutnya (Right Chevron) --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-400 hover:text-primary transition-all">
                    <span class="material-symbols-outlined">chevron_right</span>
                </a>
            @else
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-outline-variant/20 text-slate-300 cursor-not-allowed"
                    disabled>
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            @endif
        </div>
    </div>
@endif
