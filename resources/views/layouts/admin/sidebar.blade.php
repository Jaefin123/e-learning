 <aside class="h-full w-64 fixed left-0 top-0 pt-20 bg-[#f3f4f5] flex flex-col hidden lg:flex">
     <div class="px-8 mb-8">
         <h2 class="font-serif text-lg text-purple-950">Curator View</h2>
         <p class="font-sans uppercase text-[10px] tracking-widest font-medium text-slate-500">Semester II, 2024</p>
     </div>
     <nav class="flex flex-col h-full space-y-2 py-6">
         <!-- Active Tab -->
         <a class="{{ $page == 'page-dashboard' ? 'bg-white text-purple-900 rounded-l-full ml-4 pl-4 py-3 shadow-sm flex items-center gap-4 transition-all duration-300 translate-x-1' : 'text-slate-500 hover:text-purple-700 ml-4 pl-4 py-3 flex items-center gap-4 transition-all duration-300 hover:bg-white/50' }}
         "
             href="{{ route('look') }}">
             <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
             <span class="font-sans uppercase text-xs tracking-widest font-medium">Dashboard</span>
         </a>
         <a class="{{ $page == 'page-coursemanagementadmin' ? 'bg-white text-purple-900 rounded-l-full ml-4 pl-4 py-3 shadow-sm flex items-center gap-4 transition-all duration-300 translate-x-1' : 'text-slate-500 hover:text-purple-700 ml-4 pl-4 py-3 flex items-center gap-4 transition-all duration-300 hover:bg-white/50' }}"
             href="{{ route('coursemanagementadmin') }}">
             <span class="material-symbols-outlined">menu_book</span>
             <span class="font-sans uppercase text-xs tracking-widest font-medium">Courses Management</span>
         </a>

         <a class="{{ $page == 'page-usermanagement' ? 'bg-white text-purple-900 rounded-l-full ml-4 pl-4 py-3 shadow-sm flex items-center gap-4 transition-all duration-300 translate-x-1' : 'text-slate-500 hover:text-purple-700 ml-4 pl-4 py-3 flex items-center gap-4 transition-all duration-300 hover:bg-white/50' }}"
             href="{{ route('usermanagementadmin') }}">
             <span class="material-symbols-outlined">assignment</span>
             <span class="font-sans uppercase text-xs tracking-widest font-medium">User Management</span>
         </a>

         {{-- <a class="{{ $page == 'page-grades' ? 'bg-white text-purple-900 rounded-l-full ml-4 pl-4 py-3 shadow-sm flex items-center gap-4 transition-all duration-300 translate-x-1' : 'text-slate-500 hover:text-purple-700 ml-4 pl-4 py-3 flex items-center gap-4 transition-all duration-300 hover:bg-white/50' }}"
             href="{{ route('grades.page') }}">
             <span class="material-symbols-outlined">grade</span>
             <span class="font-sans uppercase text-xs tracking-widest font-medium">Grades</span>
         </a> --}}
         
         <div class="mt-auto px-8 pb-10 space-y-6">
             
             <div class="pt-6 border-t border-outline-variant/30 space-y-4">
                 <a class="flex items-center gap-4 text-slate-500 hover:text-purple-700" href="#">
                     <span class="material-symbols-outlined text-sm">settings</span>
                     <span class="font-sans uppercase text-[10px] tracking-widest font-medium">Settings</span>
                 </a>
                 <a class="flex items-center gap-4 text-slate-500 hover:text-purple-700" href="#">
                     <span class="material-symbols-outlined text-sm">help</span>
                     <span class="font-sans uppercase text-[10px] tracking-widest font-medium">Support</span>
                 </a>
             </div>
         </div>
     </nav>
 </aside>
