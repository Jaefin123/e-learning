{{-- extend dari layouts --}}
@extends('layouts.guest.landingPage')

{{-- isi kontent landing page guest --}}
@section('contentLandingPage')
    <main class="">
        <!-- Hero Section -->
        <section class="relative px-6 py-12 md:py-24 max-w-screen-2xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 z-10">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold tracking-widest uppercase mb-6">
                        Excellence in Digital Learning
                    </span>
                    <h1 class="text-5xl md:text-7xl font-extrabold text-on-surface leading-[1.1] mb-8 tracking-tighter">
                        Pusat Pembelajaran Digital <span class="text-primary italic">Fakultas teknik universitas
                            wiralodra</span>
                    </h1>
                    <p class="text-lg text-on-surface-variant max-w-xl mb-10 leading-relaxed font-body">
                        Empowering the next generation of digital leaders through world-class academic resources and an
                        immersive learning ecosystem.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        {{-- <button
                            class="px-8 py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-105 transition-transform">
                            Explore Courses
                        </button> --}}
                        <x-button-satu size='lg'>Explore Courses</x-button-satu>
                        <x-button-satu size='lg' variant='ghost'>Learn More</x-button-satu>

                        {{-- <button
                            class="px-8 py-4 bg-surface-container-high text-on-surface font-bold rounded-xl hover:bg-surface-container-highest transition-colors">
                            Learn More
                        </button> --}}
                    </div>
                </div>
                <div class="lg:col-span-6 relative">
                    <div class="relative aspect-[4/5] md:aspect-square rounded-[2rem] overflow-hidden shadow-2xl">
                        <img alt="Modern University Campus" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbgBZhic-eJB91JNO6C-0MRIr_NZopb_xACa8Hkssi6d_lgtIGjCEoy8JnX8fFttGcp-hdZEfrJVjKexlF3o0EPJYBtiYsZByM6dHd3WHq6y424FS3QKuLbVETZYqivuf5Q1CksIfRE_MnmmSDGQ4O8s1hLItnS8b4pQhyJVK_s7l9ZfKdyiyJvCpDBUNSNdydgHuI17j8Sz07dWDR5jPmftlOIZb7K3DGDJZ1cUNNoc8Iu4fK8o0zVGzuIzP0npPNbKn1oG1zH0I" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                    <!-- Floating Card -->
                    <div
                        class="absolute -bottom-6 -left-6 md:-bottom-10 md:-left-10 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-white/20 max-w-[280px]">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">school</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-on-surface-variant uppercase">Accredited</p>
                                <p class="text-sm font-extrabold">Superior Status</p>
                            </div>
                        </div>
                        <p class="text-xs text-on-surface-variant font-medium">Official LMS of the #1 Private University
                            in Indonesia.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Key Metrics -->
        <section class="bg-surface-container-low py-16 px-6">
            <div class="max-w-screen-2xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex items-center gap-6 p-8 bg-surface-container-lowest rounded-2xl">
                    <div class="w-16 h-16 bg-primary-fixed rounded-2xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-3xl">menu_book</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-extrabold text-on-surface">100+</h3>
                        <p class="text-on-surface-variant font-semibold">Courses</p>
                    </div>
                </div>
                <div class="flex items-center gap-6 p-8 bg-surface-container-lowest rounded-2xl">
                    <div class="w-16 h-16 bg-primary-fixed rounded-2xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-3xl">group</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-extrabold text-on-surface">20k+</h3>
                        <p class="text-on-surface-variant font-semibold">Students</p>
                    </div>
                </div>
                <div class="flex items-center gap-6 p-8 bg-surface-container-lowest rounded-2xl">
                    <div class="w-16 h-16 bg-primary-fixed rounded-2xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-3xl">workspace_premium</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-extrabold text-on-surface">Expert</h3>
                        <p class="text-on-surface-variant font-semibold">Faculty</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Courses -->
        <section class="bg-surface-bright py-24 px-6 overflow-hidden">
            <div class="max-w-screen-2xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                    <div>
                        <h2 class="text-4xl font-extrabold text-on-surface mb-2">Featured Courses</h2>
                        <p class="text-on-surface-variant font-medium">Curated high-demand programs for your career
                            growth.</p>
                    </div>
                    <button class="text-primary font-bold flex items-center gap-2 hover:gap-4 transition-all">
                        View All Courses <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Course 1 -->
                    <div
                        class="group bg-surface-container-lowest rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all">
                        <div class="h-56 overflow-hidden relative">
                            <img alt="Data Science Course"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAz7s1D2caCSaVteGpm4FE-SCXhiI_9U6oCQUnhtTFhOc2fVFduRcQsTqU4jnMV6gvz5oE39HKUF4B6l9U_ev1dvuBJ7uNdJeHqnfGaoT3YqKqvojaqdNKX3HdF0CXjKHDlemcdS6DMhI3hW7fNDJHYPsYFTsTdm-ZXTzkrdxabcJrjiNETTl9CrNGSFbdnGxBL-jDGZXyS3PYdKxkW0EjoFFNYkha4y48lZaVBJzioU37F6nNpq4aLOSy6Cyg__UfLup5L2edVBU" />
                            <span
                                class="absolute top-4 left-4 bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Popular</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Data Science
                            </h4>
                            <p class="text-sm text-on-surface-variant mb-6">Master big data analytics and machine
                                learning techniques from experts.</p>
                            <div class="flex justify-between items-center pt-6 border-t border-surface-container">
                                <span class="text-xs font-bold text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 12 Weeks
                                </span>
                                <span class="text-xs font-bold text-primary">Enroll Now</span>
                            </div>
                        </div>
                    </div>
                    <!-- Course 2 -->
                    <div
                        class="group bg-surface-container-lowest rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all">
                        <div class="h-56 overflow-hidden relative">
                            <img alt="Digital Marketing Course"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuACaAxvlT3AmL-d0draa2OuexlrGWY-wEGKDZnBYI6_fWtzsvQGmYUbYTgKP9Wlg7hKmhH9cZMb8tnrQtMLuJOaXIqrqThxjDC4XDFNW2dbv7Nf1MlTCLyO3XkxBK9nWj1PtrhCAbDKW7lq5sSZhjca7s0af7DlZXSQ3Bbx85yO79cNtynFpqcolnvT0Qy2mw7h7BxkOreLzILBcqbzY8_w_vNo3dJ8ekIBEr6cgvpBUeE_gIDx8A9gliHaBa6V9oC4xtAV8oZu_b8" />
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">Digital
                                Marketing</h4>
                            <p class="text-sm text-on-surface-variant mb-6">Strategic growth hacking and brand
                                management in the digital era.</p>
                            <div class="flex justify-between items-center pt-6 border-t border-surface-container">
                                <span class="text-xs font-bold text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 8 Weeks
                                </span>
                                <span class="text-xs font-bold text-primary">Enroll Now</span>
                            </div>
                        </div>
                    </div>
                    <!-- Course 3 -->
                    <div
                        class="group bg-surface-container-lowest rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all">
                        <div class="h-56 overflow-hidden relative">
                            <img alt="Telecommunications Course"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlqtu5byIGF90OHYKuG5icLop2FE39K94Ex9x4PNH22kTQhNxKHZR7lDckKEL3qhks2endB-Dept99UrYzlDytVtEEXCeLXuWuMz-HV2vStoYxk_fJGItbrCnmocx_nL8QxaTvNcDP_2Eq-X2H-fuwcNjGzgZJE79_g5Q4lhXqBkHC3uQLJukscWrf1UmpJOkQN5DvTUltEITTYsyCclQQvHDMMj76qyhMNMk1BIn6b3QKArgUN9ZdJWXRuqkkO9P6BKIxPvuZGV8" />
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                                Telecommunications</h4>
                            <p class="text-sm text-on-surface-variant mb-6">Advanced network architecture and 5G
                                technology implementation studies.</p>
                            <div class="flex justify-between items-center pt-6 border-t border-surface-container">
                                <span class="text-xs font-bold text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">schedule</span> 15 Weeks
                                </span>
                                <span class="text-xs font-bold text-primary">Enroll Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Section (Editorial Layout) -->
        <section class="py-24 px-6 max-w-screen-2xl mx-auto">
            <h2 class="text-4xl font-extrabold text-on-surface mb-12">Latest Updates</h2>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-8">
                    <div class="relative rounded-[2.5rem] overflow-hidden group aspect-[21/9]">
                        <img alt="University Graduation"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBD0h7sjboL36Q4sBFnziIKb4LS2ZV531_qWcdFaBUxERW7SqU2jcHrIcKtgyKZKuuIQGKL0OjzwbON_IXPvf9OAv7TOPdoqq5CfFZekFkLaH7btQK-BGGLrsYwVUuW5CKxKYr1h4CoURNBKjpxChGTCu3Rm2hk0U9jX7ooK8rRidm1hbbDlr9kOg5ihb_G0HcyphPRJ0cJCf2r5VkvNCLJYrtjKMeqbRRjwOHG2cKP3wCRwnG7322GFxSeDp6OzLeppTVIuGAf52Q" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                            <span
                                class="text-primary-fixed font-bold text-xs uppercase tracking-widest mb-4">Announcement</span>
                            <h3 class="text-3xl font-extrabold text-white mb-4 max-w-2xl">Telkom University Achieves
                                Global Ranking Excellence for Digital Research</h3>
                            <button class="text-white text-sm font-bold flex items-center gap-2">Read Full Story <span
                                    class="material-symbols-outlined text-sm">open_in_new</span></button>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4 flex flex-col gap-8">
                    <div class="bg-surface-container-low p-6 rounded-3xl border-l-4 border-primary">
                        <p class="text-xs font-bold text-primary mb-2">EVENTS</p>
                        <h4 class="text-lg font-bold mb-2">Webinar: The Future of AI in Education</h4>
                        <p class="text-sm text-on-surface-variant mb-4">Join our expert panel to discuss AI's impact on
                            higher learning.</p>
                        <p class="text-xs font-medium text-on-surface-variant italic">October 24, 2024</p>
                    </div>
                    <div class="bg-surface-container-low p-6 rounded-3xl border-l-4 border-primary">
                        <p class="text-xs font-bold text-primary mb-2">ACADEMIC</p>
                        <h4 class="text-lg font-bold mb-2">Enrollment Open for Spring Semester 2025</h4>
                        <p class="text-sm text-on-surface-variant mb-4">Application window is now open for all graduate
                            and postgraduate programs.</p>
                        <p class="text-xs font-medium text-on-surface-variant italic">Closing soon</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Detailed LMS Information Section -->
        <section class="py-24 px-6 bg-surface-container-lowest">
            <div class="max-w-screen-2xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-on-surface mb-4">Experience Seamless Digital Education</h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto font-medium">Our Learning Management System is
                        designed to provide an integrated and immersive academic experience for students and faculty
                        alike.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="p-8 rounded-3xl border border-outline-variant/20 hover:border-primary/30 transition-all hover:bg-surface-container-low group">
                        <div
                            class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary">hub</span>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Centralized Learning</h4>
                        <p class="text-sm text-on-surface-variant leading-relaxed">Access all course materials,
                            assignments, and grades in one place with our unified student dashboard.</p>
                    </div>
                    <div
                        class="p-8 rounded-3xl border border-outline-variant/20 hover:border-primary/30 transition-all hover:bg-surface-container-low group">
                        <div
                            class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary">video_chat</span>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Interactive Classrooms</h4>
                        <p class="text-sm text-on-surface-variant leading-relaxed">Participate in live lectures and
                            engage seamlessly with peers and faculty through integrated virtual tools.</p>
                    </div>
                    <div
                        class="p-8 rounded-3xl border border-outline-variant/20 hover:border-primary/30 transition-all hover:bg-surface-container-low group">
                        <div
                            class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary">analytics</span>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Progress Tracking</h4>
                        <p class="text-sm text-on-surface-variant leading-relaxed">Monitor your academic journey with
                            detailed analytics and real-time performance reports updated daily.</p>
                    </div>
                    <div
                        class="p-8 rounded-3xl border border-outline-variant/20 hover:border-primary/30 transition-all hover:bg-surface-container-low group">
                        <div
                            class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary">smartphone</span>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Mobile Access</h4>
                        <p class="text-sm text-on-surface-variant leading-relaxed">Learn on the go with our fully
                            responsive mobile platform, optimized for any device you choose to use.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
