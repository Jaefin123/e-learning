  <nav
      class="fixed top-0 z-50 flex justify-between items-center px-8 h-16 w-full bg-white backdrop-blur-xl shadow-[0px_12px_32px_rgba(45,0,79,0.06)]">
      {{-- <div class="flex items-center gap-8">
          <span class="text-xl font-bold italic text-purple-950 ">The Academic Editorial</span>
          <div class="hidden md:flex items-center bg-surface-container-high px-4 py-2 rounded-xl w-80">
              <span class="material-symbols-outlined text-slate-500 text-sm">search</span>
              <input class="bg-transparent border-none focus:ring-0 text-sm w-full font-label"
                  placeholder="Search resources..." type="text" />
          </div>
      </div> --}}

      <div class="flex items-center gap-6">
          <!-- Logo & Nama Site -->
          <div class="flex items-center gap-3">
              <!-- Logo (Contoh menggunakan Icon, bisa ganti ke <img>) -->
              <div class="bg-purple-950 p-1.5 rounded-lg flex items-center justify-center">
                  <span class="material-symbols-outlined text-white text-xl">auto_stories</span>
              </div>
              <span class="text-xl font-bold text-purple-950 tracking-tight">LMS FT UNWIR</span>
          </div>

          <!-- Tombol Menu / Toggle Sidebar -->
          <button onclick="toggleSidebar(event)"
              class="p-2 hover:bg-slate-100 rounded-full transition-colors flex items-center justify-center">
              <span class="material-symbols-outlined text-purple-950 text-2xl">menu</span>
          </button>

          <!-- Search Bar -->
          <div class="hidden md:flex items-center bg-slate-100 px-4 py-2 rounded-xl w-80 ml-2">
              <span class="material-symbols-outlined text-slate-500 text-sm">search</span>
              <input class="bg-transparent border-none focus:ring-0 text-sm w-full font-sans ml-2"
                  placeholder="Search resources..." type="text" />
          </div>
      </div>

      <div class="flex items-center gap-6">
          {{-- notification --}}
          <div class="flex gap-4 items-center">
              <button class="p-2 rounded-full hover:bg-purple-50/50 transition-colors text-purple-900">
                  <span class="material-symbols-outlined">notifications</span>
              </button>
              <button class="p-2 rounded-full hover:bg-purple-50/50 transition-colors text-purple-900">
                  <span class="material-symbols-outlined">bookmark</span>
              </button>
          </div>

          <!-- user info -->
          <details class="group relative list-none">

              <!-- Bagian yang diklik (Summary) -->
              <summary
                  class="flex items-center gap-3 border-l border-outline-variant/20 pl-6 cursor-pointer list-none focus:outline-none [&::-webkit-details-marker]:hidden">
                  <div class="text-right hidden sm:block">
                      @if (Auth::user()->role == 'mahasiswa')
                          <p class="text-xs font-bold text-on-surface uppercase tracking-widest">
                              {{ Auth::user()->name }}</p>
                          <p class="text-[10px] text-slate-500 uppercase tracking-tighter">{{ Auth::user()->role }}</p>
                      @endif
                      @if (Auth::user()->role == 'admin')
                          <p class="text-xs font-bold text-on-surface uppercase tracking-widest">
                              {{ Auth::user()->name }}</p>
                          <p class="text-[10px] text-slate-500 uppercase tracking-tighter">{{ Auth::user()->role }}</p>
                      @endif
                      @if (Auth::user()->role == 'dosen')
                          <p class="text-xs font-bold text-on-surface uppercase tracking-widest">
                              {{ Auth::user()->name }}</p>
                          <p class="text-[10px] text-slate-500 uppercase tracking-tighter">{{ Auth::user()->role }} </p>
                      @endif
                  </div>
                  <img alt="Student Profile Avatar"
                      class="w-10 h-10 rounded-full border-2 border-primary-fixed object-cover"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuDK8n1srjCFgzibSqwc1_kMJBNDzTUzZ5a7ZlZ8mMxoQDNcYxYiSN8sUsIyKOu5IqOxmviNoon3udJWnvUwBKPpwQGytH1cvCae7xoXq4iCfkUV1DNLXK1-lT2jGBvfl9jtK2ItTACG90YPYdfJ9ecZ5UAOtVRQmiTla-uzMvvy3IqSdeyPgvt3SKjiWb-4hSiAuO9vYtGa-Wm-08Dw8w7ZarA2cvjHAu65wt9qxvqBYP5L3s1iC-_W5twI_RjpcqxByyfYsIZiNFw" />
              </summary>

              <!-- Isi Dropdown -->
              <!-- 'group-open:block' memastikan menu muncul saat details terbuka -->
              <div
                  class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                  <a href="{{ route('profile.saya') }}"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil Saya</a>
                  <hr class="my-1 border-gray-100">
                  <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                          Logout
                      </button>
                  </form>
              </div>
          </details>

      </div>
  </nav>
