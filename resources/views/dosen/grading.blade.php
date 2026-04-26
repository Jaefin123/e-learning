@extends('layouts.dosen.app')
@section('content')
<main class="ml-72 min-h-screen p-12">
    <!-- Top Navigation Shell -->
    
    <!-- Page Hero / Introduction -->
    <div class="mb-16">
        <h1 class="text-6xl font-['Inter'] font-black text-primary tracking-tighter mb-4 leading-tight">
            Assessment<br /><span class="italic text-on-surface font-['Noto_Serif'] font-normal">Curatorium.</span></h1>
        <p class="text-lg text-slate-500 max-w-2xl font-['Noto_Serif']">Welcome back, Professor. You have submissions
            awaiting review across three active curriculums. The current department average remains steady at 84%.</p>
    </div>
    <!-- Summary Grid (Bento Style) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <div
            class="bg-primary p-8 rounded-[2rem] flex flex-col justify-between h-56 shadow-2xl shadow-primary/20 text-white relative overflow-hidden group">
            <div class="z-10">
                <span class="font-['Inter'] uppercase tracking-widest text-[10px] font-bold opacity-70">Pending
                    Reviews</span>
                <h3 class="text-6xl font-['Inter'] font-black mt-2">24</h3>
            </div>
            <div class="z-10 flex items-center space-x-2 text-xs font-['Inter'] font-semibold">
                <span class="material-symbols-outlined text-sm">trending_up</span>
                <span>12% more than last week</span>
            </div>
            <!-- Abstract Design Decor -->
            <div
                class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700">
            </div>
        </div>
        <div
            class="bg-white p-8 rounded-[2rem] flex flex-col justify-between h-56 shadow-sm border border-slate-100 group">
            <div>
                <span class="font-['Inter'] uppercase tracking-widest text-[10px] font-bold text-slate-400">Average
                    Score</span>
                <div class="flex items-baseline space-x-2">
                    <h3 class="text-6xl font-['Inter'] font-black text-on-surface mt-2">84.2</h3>
                    <span class="text-lg font-bold text-slate-300">/100</span>
                </div>
            </div>
            <div class="w-full bg-secondary-fixed h-2 rounded-full overflow-hidden">
                <div class="bg-primary h-full w-[84%] shadow-[0_0_8px_rgba(76,0,128,0.4)]"></div>
            </div>
        </div>
        <div
            class="bg-surface-container-low p-8 rounded-[2rem] flex flex-col justify-between h-56 group border border-transparent hover:border-primary/10 transition-colors">
            <div>
                <span class="font-['Inter'] uppercase tracking-widest text-[10px] font-bold text-slate-400">Time to
                    Grade</span>
                <h3 class="text-6xl font-['Inter'] font-black text-on-surface mt-2">1.4 <span
                        class="text-xl font-medium text-slate-400">days</span></h3>
            </div>
            <p class="text-xs font-['Inter'] font-medium text-slate-500">Peak performance maintained in <span
                    class="text-primary font-bold">Classical Ethics</span></p>
        </div>
    </div>
    <!-- Pending Submissions - Editorial List Pattern -->
    <section class="space-y-8">
        <div class="flex justify-between items-end mb-4">
            <h2 class="text-2xl font-['Inter'] font-bold text-on-surface tracking-tight">Active Submissions Queue</h2>
            <div class="flex space-x-4 font-['Inter'] text-xs font-bold uppercase tracking-widest text-slate-400">
                <button class="text-primary border-b-2 border-primary pb-1">All Courses</button>
                <button class="hover:text-primary transition-colors pb-1">Ethics II</button>
                <button class="hover:text-primary transition-colors pb-1">Digital Rhetoric</button>
            </div>
        </div>
        <div class="space-y-4">
            <!-- Table Header (Styled as clean minimal labels) -->
            <div
                class="grid grid-cols-12 px-8 py-2 font-['Inter'] uppercase text-[10px] tracking-widest font-black text-slate-400">
                <div class="col-span-4">Student Name</div>
                <div class="col-span-4">Assignment Title</div>
                <div class="col-span-2 text-center">Submission Date</div>
                <div class="col-span-2 text-right">Actions</div>
            </div>
            <!-- Submission Entry 1 -->
            <div
                class="grid grid-cols-12 items-center px-8 py-6 bg-white rounded-3xl group hover:shadow-xl hover:shadow-purple-900/5 transition-all duration-300">
                <div class="col-span-4 flex items-center space-x-4">
                    <img alt="Student Profile" class="w-12 h-12 rounded-2xl object-cover"
                        data-alt="close-up of a young female student with a warm smile, library background with soft bokeh lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCc36aDMMwdk8epkIiCsuQmhcgcNpqcudGCk6QK5sOkDaJeIc0cbqNhZ4rb759XYsnuk7t3wi0F5QMWdT_Un5Skgeu6rOzWK_m6sfC4sL-YkVVRFh2puFlTwvHfsEuGcc7julrHYoD4uvrbSA8cVcRUjTkGOmPdKfGkST3JmIKn-qVqSCGj82Kfv6o3r_ycsB293EU4IKW7-TuazBS95PpaMhjkvLqn_W1SHIjU-qe5W4fgG2ND03ggH6-JEOVVoehRb2gESA3lQ84" />
                    <div>
                        <p class="font-['Noto_Serif'] font-bold text-on-surface text-lg">Amara Okafor</p>
                        <p class="font-['Inter'] text-[10px] uppercase font-bold text-slate-400 tracking-widest">ID:
                            2209384</p>
                    </div>
                </div>
                <div class="col-span-4">
                    <p class="font-['Noto_Serif'] text-on-surface text-lg">The Epistemology of Digital Identity</p>
                    <span
                        class="inline-block mt-1 px-2 py-0.5 bg-secondary-container text-on-secondary-container text-[10px] font-bold rounded-sm font-['Inter'] uppercase tracking-tighter">Philosophy
                        II</span>
                </div>
                <div class="col-span-2 text-center">
                    <p class="font-['Inter'] font-semibold text-on-surface">Oct 24, 2023</p>
                    <p class="font-['Inter'] text-[10px] font-bold text-slate-400">14:42 PM</p>
                </div>
                <div class="col-span-2 flex justify-end">
                    <button
                        class="bg-primary text-white px-6 py-2.5 rounded-xl font-['Inter'] font-bold text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-lg shadow-primary/20">Grade
                        Now</button>
                </div>
            </div>
            <!-- Submission Entry 2 -->
            <div
                class="grid grid-cols-12 items-center px-8 py-6 bg-white rounded-3xl group hover:shadow-xl hover:shadow-purple-900/5 transition-all duration-300">
                <div class="col-span-4 flex items-center space-x-4">
                    <img alt="Student Profile" class="w-12 h-12 rounded-2xl object-cover"
                        data-alt="candid portrait of a male student wearing a grey hoodie, urban campus environment, soft daylight"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp6n6rUBE6K3zfD_NPNd61txTxaIfki8mCr3MH8o2UnZ6LVVmU8Aar3wJhghub62uWlwli2UABLUDW-uaP1IqoJTQ34LF5D8Mf7M7UgTJMCMfc_fp2oIYJJa7fcK_mr2mu6r1z_LOqea5nbzEwqzJiZR_QwuE5U7DYSxKaYj5TJkjJlZWxhBXtNi9pNjFAyDuoWVKRRx8PPcz2VREYiKhSSdGxY1ZQj2ChCr3dpDJUFxIORJoPgrZ6HauOl6udoqXHN3Z2x600_PE" />
                    <div>
                        <p class="font-['Noto_Serif'] font-bold text-on-surface text-lg">Julian Vance</p>
                        <p class="font-['Inter'] text-[10px] uppercase font-bold text-slate-400 tracking-widest">ID:
                            2209112</p>
                    </div>
                </div>
                <div class="col-span-4">
                    <p class="font-['Noto_Serif'] text-on-surface text-lg">Structuralism in Modern Architecture</p>
                    <span
                        class="inline-block mt-1 px-2 py-0.5 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold rounded-sm font-['Inter'] uppercase tracking-tighter">Art
                        Theory</span>
                </div>
                <div class="col-span-2 text-center">
                    <p class="font-['Inter'] font-semibold text-on-surface">Oct 24, 2023</p>
                    <p class="font-['Inter'] text-[10px] font-bold text-error">Late (2h)</p>
                </div>
                <div class="col-span-2 flex justify-end">
                    <button
                        class="bg-primary text-white px-6 py-2.5 rounded-xl font-['Inter'] font-bold text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-lg shadow-primary/20">Grade
                        Now</button>
                </div>
            </div>
            <!-- Submission Entry 3 -->
            <div
                class="grid grid-cols-12 items-center px-8 py-6 bg-white rounded-3xl group hover:shadow-xl hover:shadow-purple-900/5 transition-all duration-300">
                <div class="col-span-4 flex items-center space-x-4">
                    <img alt="Student Profile" class="w-12 h-12 rounded-2xl object-cover"
                        data-alt="professional portrait of a young man with a neat beard, warm studio lighting with dark background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC--8aJkB63VqJWar7zJuvkIYqZc-JPpNw2rF-2jAu3rHBlhDcUB6agKFv3XGuZCQ8oiRVgKg_2HMt27Z9SjjYfrG90EuNon8aqA4cQoEsYzt5CHc_JzzLdxWlS0wx_HgpZxxBUOwJdWTMMb3tYjBxDsihBx4AFb5YNakLCd_qcjrxY4GzGidO-qvMQx52YTgvA1IksDvHkYzfbsAFU5_f1zK7J6SNQaeUjEnjVydIa4JpkUAatBT2KumREWpv6O7xNuyJM-WamrS8" />
                    <div>
                        <p class="font-['Noto_Serif'] font-bold text-on-surface text-lg">Leo Martinez</p>
                        <p class="font-['Inter'] text-[10px] uppercase font-bold text-slate-400 tracking-widest">ID:
                            2208543</p>
                    </div>
                </div>
                <div class="col-span-4">
                    <p class="font-['Noto_Serif'] text-on-surface text-lg">Linguistic Relativity in Code</p>
                    <span
                        class="inline-block mt-1 px-2 py-0.5 bg-secondary-container text-on-secondary-container text-[10px] font-bold rounded-sm font-['Inter'] uppercase tracking-tighter">Digital
                        Rhetoric</span>
                </div>
                <div class="col-span-2 text-center">
                    <p class="font-['Inter'] font-semibold text-on-surface">Oct 23, 2023</p>
                    <p class="font-['Inter'] text-[10px] font-bold text-slate-400">09:15 AM</p>
                </div>
                <div class="col-span-2 flex justify-end">
                    <button
                        class="bg-primary text-white px-6 py-2.5 rounded-xl font-['Inter'] font-bold text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-lg shadow-primary/20">Grade
                        Now</button>
                </div>
            </div>
            <!-- Submission Entry 4 -->
            <div
                class="grid grid-cols-12 items-center px-8 py-6 bg-white rounded-3xl group hover:shadow-xl hover:shadow-purple-900/5 transition-all duration-300">
                <div class="col-span-4 flex items-center space-x-4">
                    <img alt="Student Profile" class="w-12 h-12 rounded-2xl object-cover"
                        data-alt="close-up of a smiling young woman with short curly hair, bright sunlit outdoor setting, academic vibes"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAu3cLzsm9yAown7eEi3P2jX0Z9qd8EHRDDt3F33fKlkFtb88sVr7FLAlOzODyOKtnzSvt3T-G56CTmtQSl_kFqkP2nqNVodoeaGGoTFNM-XPoyCvUi_ktd6Gdg9NTSz31zDbGtwHsvTHNeB2eaELZL0BNa-KE6cV5GAJzQxZotSjzvjjerBBMNwx53UicGEFFPMoI4srjubasId8d77JGEevQHuu-02G1enYo3p-dOC_SU5VqfqjW440zW_AZYMJpnvvj3JH5tdYc" />
                    <div>
                        <p class="font-['Noto_Serif'] font-bold text-on-surface text-lg">Sasha Wu</p>
                        <p class="font-['Inter'] text-[10px] uppercase font-bold text-slate-400 tracking-widest">ID:
                            2209772</p>
                    </div>
                </div>
                <div class="col-span-4">
                    <p class="font-['Noto_Serif'] text-on-surface text-lg">The Ethics of AI in Peer Review</p>
                    <span
                        class="inline-block mt-1 px-2 py-0.5 bg-secondary-container text-on-secondary-container text-[10px] font-bold rounded-sm font-['Inter'] uppercase tracking-tighter">Philosophy
                        II</span>
                </div>
                <div class="col-span-2 text-center">
                    <p class="font-['Inter'] font-semibold text-on-surface">Oct 23, 2023</p>
                    <p class="font-['Inter'] text-[10px] font-bold text-slate-400">18:30 PM</p>
                </div>
                <div class="col-span-2 flex justify-end">
                    <button
                        class="bg-primary text-white px-6 py-2.5 rounded-xl font-['Inter'] font-bold text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-lg shadow-primary/20">Grade
                        Now</button>
                </div>
            </div>
        </div>
        <div class="pt-12 flex justify-center">
            <button
                class="flex items-center space-x-2 font-['Inter'] text-xs font-black uppercase tracking-[0.2em] text-slate-400 hover:text-primary transition-colors group">
                <span>View Archived Assessments</span>
                <span
                    class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </button>
        </div>
    </section>
</main>
@endsection