
        <!-- Main Content Wrapper -->
        <main class="flex flex-1 flex-col overflow-y-auto bg-background-dark">
            <!-- Top Navbar -->
            <header class="sticky top-0 z-10 flex h-16 w-full items-center justify-between border-b border-surface-border bg-background-dark/80 px-6 backdrop-blur-md transition-all">
                <div class="flex items-center gap-4 lg:hidden">
                    <button class="text-text-muted hover:text-white">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <div class="size-8 rounded-full bg-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-lg">auto_fix_high</span>
                    </div>
                </div>
                <div class="hidden items-center gap-2 lg:flex">
                    <span class="material-symbols-outlined text-primary">flight</span>
                    <h2 class="text-lg font-bold tracking-tight text-white">The Daily Oracle <span class="text-text-muted font-normal text-sm ml-2">/ Manage Posts</span></h2>
                </div>
                <div class="flex flex-1 justify-end gap-6">
                    <div class="relative hidden max-w-md flex-1 md:flex">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-muted">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input class="block w-full rounded-lg border-0 bg-surface-dark py-2 pl-10 pr-4 text-white placeholder-text-muted focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6" placeholder="Search the archives..." type="text" />
                    </div>
                    <button class="flex items-center justify-center rounded-full bg-surface-dark p-2 text-text-muted hover:text-white md:hidden">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                    <button class="flex items-center justify-center rounded-full bg-surface-dark p-2 text-text-muted hover:text-white">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                </div>
            </header>
            <!-- Scrollable Content -->
            <div class="flex flex-1 flex-col gap-8 p-6 md:px-12 md:py-8 lg:px-16 lg:py-10 max-w-7xl mx-auto w-full">
                <!-- Heading Section -->
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-3xl md:text-4xl font-black tracking-tight text-white">
                            Your Magical Manuscripts
                        </h1>
                        <p class="text-base text-text-muted">
                            Manage your published scrolls, drafts, and prohibited texts.
                        </p>
                    </div>
                    <button class="group relative inline-flex items-center gap-2 overflow-hidden rounded-lg bg-primary px-6 py-3 font-semibold text-white shadow-lg shadow-primary/30 transition-all hover:bg-red-700 hover:shadow-primary/50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-background-dark">
                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                        <span>Inscribe New</span>
                        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-700 group-hover:animate-[shimmer_1.5s_infinite]"></div>
                    </button>
                </div>
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm transition-transform hover:-translate-y-1">
                        <div class="mb-2 flex items-center gap-2 text-text-muted">
                            <span class="material-symbols-outlined text-primary">library_books</span>
                            <span class="text-sm font-medium">Published Scrolls</span>
                        </div>
                        <p class="text-3xl font-bold text-white">12</p>
                        <p class="mt-2 text-sm text-[#0bda8e]">+2 this moon cycle</p>
                    </div>
                    <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm transition-transform hover:-translate-y-1">
                        <div class="mb-2 flex items-center gap-2 text-text-muted">
                            <span class="material-symbols-outlined text-primary">visibility</span>
                            <span class="text-sm font-medium">Crystal Ball Gazes</span>
                        </div>
                        <p class="text-3xl font-bold text-white">1,402</p>
                        <p class="mt-2 text-sm text-[#0bda8e]">+15% engagement</p>
                    </div>
                    <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm transition-transform hover:-translate-y-1">
                        <div class="mb-2 flex items-center gap-2 text-text-muted">
                            <span class="material-symbols-outlined text-yellow-500">stars</span>
                            <span class="text-sm font-medium">House Points Earned</span>
                        </div>
                        <p class="text-3xl font-bold text-white">50</p>
                        <p class="mt-2 text-sm text-text-muted">Top contributor</p>
                    </div>
                    <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm transition-transform hover:-translate-y-1">
                        <div class="mb-2 flex items-center gap-2 text-text-muted">
                            <span class="material-symbols-outlined text-blue-400">hourglass_empty</span>
                            <span class="text-sm font-medium">Pending Review</span>
                        </div>
                        <p class="text-3xl font-bold text-white">3</p>
                        <p class="mt-2 text-sm text-text-muted">Requires Headmaster approval</p>
                    </div>
                </div>
                <!-- Filters & Controls -->
                <div class="flex flex-col gap-4 border-b border-surface-border pb-6 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex flex-wrap gap-2">
                        <button class="rounded-lg bg-primary px-4 py-2 text-sm font-medium text-white shadow-md shadow-primary/20">All Scrolls</button>
                        <button class="rounded-lg bg-surface-dark px-4 py-2 text-sm font-medium text-text-muted border border-surface-border hover:border-text-muted hover:text-white transition-colors">Published</button>
                        <button class="rounded-lg bg-surface-dark px-4 py-2 text-sm font-medium text-text-muted border border-surface-border hover:border-text-muted hover:text-white transition-colors">Drafts</button>
                        <button class="rounded-lg bg-surface-dark px-4 py-2 text-sm font-medium text-text-muted border border-surface-border hover:border-text-muted hover:text-white transition-colors">Archived</button>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-text-muted">Sort by:</span>
                        <button class="flex items-center gap-1 text-sm font-medium text-white hover:text-primary">
                            Date Created
                            <span class="material-symbols-outlined text-[16px]">arrow_drop_down</span>
                        </button>
                    </div>
                </div>
                <!-- The Ledger (Article List) -->
                <div class="flex flex-col gap-4">
                    <!-- Ledger Header (Hidden on small screens) -->
                    <div class="hidden grid-cols-12 gap-4 px-4 text-xs font-bold uppercase tracking-wider text-text-muted lg:grid">
                        <div class="col-span-5">Scroll Title</div>
                        <div class="col-span-2">Department</div>
                        <div class="col-span-2">Status</div>
                        <div class="col-span-2">Last Inscribed</div>
                        <div class="col-span-1 text-right">Actions</div>
                    </div>
                    <!-- Ledger Item 1 -->
                    <div class="group relative flex flex-col gap-4 rounded-xl border border-surface-border bg-[#26161a] p-4 transition-all hover:bg-surface-dark lg:grid lg:grid-cols-12 lg:items-center lg:gap-4 lg:py-3">
                        <div class="col-span-5 flex items-center gap-4">
                            <div class="hidden h-10 w-10 shrink-0 overflow-hidden rounded-md bg-gray-800 sm:block">
                                <div class="h-full w-full bg-cover bg-center opacity-80 mix-blend-overlay" data-alt="Abstract red smoke texture representing dragon breath" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlf_vVddI2zgwanGvhHJ0717IAWi4ensYRBGJ7hUovUL5kTGuGuFI9ohYC4lXEV1lom7YOWgr1IJrDDAQ8VfzP3R1AIRZeEjjxRyMawE7EhxO_bJbI8EosKOrCP1kQrEA8x9xFVYCVxbmifEbmwcKt5xbjWz_1--9_QvsqJ47HjPZjZp56cPTThEko7iXZB-Jw_vta1kOj81Ueq-oar96oNqz52ZE5ExVt9O6AWbltz-RuMIkC2Gv-7Rtgyp9ZeGTqQtBFchD_7kge');"></div>
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-bold text-white group-hover:text-primary transition-colors">10 Uses for Dragon's Blood</h3>
                                <p class="text-sm text-text-muted lg:hidden">Alchemy • Published</p>
                            </div>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#39282c] px-2.5 py-0.5 text-xs font-medium text-text-parchment">
                                <span class="size-1.5 rounded-full bg-orange-500"></span>
                                Alchemy
                            </span>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1 rounded-md bg-green-500/10 px-2 py-1 text-xs font-medium text-green-400 ring-1 ring-inset ring-green-500/20">
                                Published
                            </span>
                        </div>
                        <div class="col-span-2 hidden text-sm text-text-muted lg:block">
                            Oct 31, 1994
                        </div>
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-white/5 hover:text-white transition-colors" title="View">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-primary/10 hover:text-primary transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">edit_square</span>
                            </button>
                        </div>
                    </div>
                    <!-- Ledger Item 2 -->
                    <div class="group relative flex flex-col gap-4 rounded-xl border border-surface-border bg-[#26161a] p-4 transition-all hover:bg-surface-dark lg:grid lg:grid-cols-12 lg:items-center lg:gap-4 lg:py-3">
                        <div class="col-span-5 flex items-center gap-4">
                            <div class="hidden h-10 w-10 shrink-0 overflow-hidden rounded-md bg-gray-800 sm:block">
                                <div class="h-full w-full bg-cover bg-center opacity-80 mix-blend-overlay" data-alt="Old map texture of Hogwarts grounds" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDS2M_jeoBxBfKIeZBS7rVMr3apm3Y5TTbl6XQTbShydWCvpUgHCuehW2OqGrQ9CnhSUV069n-RkzqcmHcAmfi8J25YNeRFiI1aEvuhjUUof3O9cIz8-JtcjiR4IUuYkWRteFyNkM6_X1xoa-FEbPpno42dj1Tll3yXqDWpfKEE8O9l9xVWOCfi-wrtHkYJ-VpMii9ZJI6HApg3Hzm9Vt1tA6wVgwellEDcbLSqLHwnxx7P-8gPF5GL_FOZsaFNZrOjThmM_DvyU8cw');"></div>
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-bold text-white group-hover:text-primary transition-colors">Why Muggles Can't See Hogwarts</h3>
                                <p class="text-sm text-text-muted lg:hidden">Muggle Studies • Draft</p>
                            </div>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#39282c] px-2.5 py-0.5 text-xs font-medium text-text-parchment">
                                <span class="size-1.5 rounded-full bg-blue-400"></span>
                                Muggle Studies
                            </span>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1 rounded-md bg-yellow-500/10 px-2 py-1 text-xs font-medium text-yellow-500 ring-1 ring-inset ring-yellow-500/20">
                                Draft
                            </span>
                        </div>
                        <div class="col-span-2 hidden text-sm text-text-muted lg:block">
                            Nov 02, 1994
                        </div>
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-white/5 hover:text-white transition-colors" title="View">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-primary/10 hover:text-primary transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">edit_square</span>
                            </button>
                        </div>
                    </div>
                    <!-- Ledger Item 3 -->
                    <div class="group relative flex flex-col gap-4 rounded-xl border border-surface-border bg-[#26161a] p-4 transition-all hover:bg-surface-dark lg:grid lg:grid-cols-12 lg:items-center lg:gap-4 lg:py-3">
                        <div class="col-span-5 flex items-center gap-4">
                            <div class="hidden h-10 w-10 shrink-0 overflow-hidden rounded-md bg-gray-800 sm:block">
                                <div class="h-full w-full bg-cover bg-center opacity-80 mix-blend-overlay" data-alt="Dark green potion liquid texture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCO4NHwnB-cfZrnwTcjesS41WIWVsZ_yYEz-zrOIEGDw6M4VRhA_6Z4SR1LOD2LWuq9SP3cRm_VZdpnOzoEQEC8B0D8cTVVa2qS-8IlmPH3YbV-ugtQDA40cyGgmKZH-MGYfe14KgCTEl7nWTDQndadXGthrgYqMcf1UMMq8_m6ZreOKdXLGBL6wVdtnNFHFijzj5HbLkfqI7tnM-o5NKCTxjd0Xm843UMGzYz7FSub3ZD9PRdGKUWj7ZjE6ItrLc9qd8xcYtm7UlYr');"></div>
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-bold text-white group-hover:text-primary transition-colors">Advanced Potion Making: Tips &amp; Tricks</h3>
                                <p class="text-sm text-text-muted lg:hidden">Potions • Published</p>
                            </div>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#39282c] px-2.5 py-0.5 text-xs font-medium text-text-parchment">
                                <span class="size-1.5 rounded-full bg-green-600"></span>
                                Potions
                            </span>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1 rounded-md bg-green-500/10 px-2 py-1 text-xs font-medium text-green-400 ring-1 ring-inset ring-green-500/20">
                                Published
                            </span>
                        </div>
                        <div class="col-span-2 hidden text-sm text-text-muted lg:block">
                            Sep 15, 1994
                        </div>
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-white/5 hover:text-white transition-colors" title="View">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-primary/10 hover:text-primary transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">edit_square</span>
                            </button>
                        </div>
                    </div>
                    <!-- Ledger Item 4 -->
                    <div class="group relative flex flex-col gap-4 rounded-xl border border-surface-border bg-[#26161a] p-4 transition-all hover:bg-surface-dark lg:grid lg:grid-cols-12 lg:items-center lg:gap-4 lg:py-3 opacity-70">
                        <div class="col-span-5 flex items-center gap-4">
                            <div class="hidden h-10 w-10 shrink-0 overflow-hidden rounded-md bg-gray-800 sm:block">
                                <div class="h-full w-full bg-cover bg-center opacity-80 mix-blend-overlay" data-alt="Texture of old dusty books" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA5N5YBuBd0_Uf_kaU34dYq8Cb2fXIYZZy4nEh4LhLrtNJqE6cXiH-ZTAJWCyVIS40DZU0rqJgi3LItrTLlDIKEMOhIDc9ABeK7w8D7d-ZUpBpsLyxXETp1rBXZW2jWe-OjkQUfu_u5xaocPVyCG-YsgICWZ7vToLjJDmSce0cRL-pAoEG5rJE3Hncg_R4FOh5uYsNJ_CDT2MP7ACmSL48o4fdIOe-yyiV1RDzKMmw7RAMy6WHUAgwuWdFqp2k4ribQpvLuQvYonf_f');"></div>
                            </div>
                            <div class="flex flex-col">
                                <h3 class="font-bold text-white/60 group-hover:text-primary transition-colors">The History of Quidditch (v1)</h3>
                                <p class="text-sm text-text-muted lg:hidden">History of Magic • Archived</p>
                            </div>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#39282c] px-2.5 py-0.5 text-xs font-medium text-text-parchment">
                                <span class="size-1.5 rounded-full bg-purple-500"></span>
                                History of Magic
                            </span>
                        </div>
                        <div class="col-span-2 hidden items-center lg:flex">
                            <span class="inline-flex items-center gap-1 rounded-md bg-gray-500/10 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-gray-500/20">
                                Archived
                            </span>
                        </div>
                        <div class="col-span-2 hidden text-sm text-text-muted lg:block">
                            Aug 01, 1994
                        </div>
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-white/5 hover:text-white transition-colors" title="View">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="rounded-md p-1.5 text-text-muted hover:bg-primary/10 hover:text-primary transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">restore_from_trash</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="mt-4 flex items-center justify-between border-t border-surface-border pt-4">
                    <p class="text-sm text-text-muted">Showing <span class="font-medium text-white">1</span> to <span class="font-medium text-white">4</span> of <span class="font-medium text-white">12</span> scrolls</p>
                    <div class="flex gap-2">
                        <button class="flex items-center gap-1 rounded-lg border border-surface-border bg-surface-dark px-3 py-1.5 text-sm font-medium text-text-muted hover:bg-[#39282c] hover:text-white disabled:opacity-50">
                            <span class="material-symbols-outlined text-[16px]">chevron_left</span>
                            Previous
                        </button>
                        <button class="flex items-center gap-1 rounded-lg border border-surface-border bg-surface-dark px-3 py-1.5 text-sm font-medium text-text-muted hover:bg-[#39282c] hover:text-white">
                            Next
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
