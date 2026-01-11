


        <!-- Main Content -->
        <div class="flex flex-1 flex-col h-full overflow-hidden relative">
            <!-- Top Navbar -->
            <header class="flex items-center justify-between whitespace-nowrap border-b border-[#39282e] bg-[#221016]/90 backdrop-blur-md px-6 py-4 sticky top-0 z-10">
                <div class="flex items-center gap-4 text-white">
                    <!-- Mobile Menu Trigger (Visible only on small screens) -->
                    <button class="md:hidden text-white">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h2 class="text-white text-lg font-bold leading-tight tracking-wide hidden sm:block">Headmaster's Ledger</h2>
                </div>
                <div class="flex flex-1 justify-end items-center gap-4 sm:gap-6">
                    <div class="relative hidden sm:flex w-full max-w-xs group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-[#b99da6] group-focus-within:text-primary transition-colors">search</span>
                        </div>
                        <input class="block w-full rounded-lg border border-[#543b43] bg-[#1a0b0f] py-2 pl-10 pr-3 text-sm text-white placeholder-[#b99da6] focus:border-primary focus:bg-[#2a1219] focus:outline-none focus:ring-1 focus:ring-primary transition-all" placeholder="Lumos Search..." type="text" />
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="relative flex items-center justify-center rounded-lg p-2 text-[#b99da6] hover:bg-[#39282e] hover:text-white transition-colors">
                            <span class="material-symbols-outlined">notifications</span>
                            <span class="absolute top-2 right-2 size-2 bg-primary rounded-full border border-[#221016]"></span>
                        </button>
                        <button class="flex items-center justify-center rounded-lg p-2 text-[#b99da6] hover:bg-[#39282e] hover:text-white transition-colors">
                            <span class="material-symbols-outlined">settings</span>
                        </button>
                        <div class="h-8 w-[1px] bg-[#543b43] mx-1"></div>
                        <div class="flex items-center gap-3 pl-1">
                            <div class="bg-center bg-no-repeat bg-cover rounded-full size-9 border-2 border-[#543b43]" data-alt="Wizard Profile" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA24zYfyF3wz_u-xhd5e42qjN-NmJWRv2kMny38PbctK50Tzk_FOBlx8GnYSKTP5nHcbHsOgTBOMTQ1JhLW2JyfMQkyzUEeC_jA8FTphEIoLxPqq8L_sC4_E70BhjO6Ceo_Bo_1KM6CpW8oMiid2W2mERCPukOc-Jh-IXh_n0EB7b-bz2wk9aFJ5PgAk8pPsqBNtj44LbfNe2P9xJcFrAw_b4yfSbbTLxeN3fC46jPHOWEhoGCoavMol-JpP4hidYhzxGOnhYtaP8HL");'></div>
                            <span class="text-sm font-medium text-white hidden md:block">Prof. McGonagall</span>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Scrollable Content -->
            <main class="flex-1 overflow-y-auto bg-background-dark p-4 md:p-8 scroll-smooth">
                <div class="mx-auto max-w-7xl flex flex-col gap-8">
                    <!-- Page Heading & Intro -->
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 border-b border-[#39282e] pb-6">
                        <div class="flex flex-col gap-2">
                            <p class="text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">School Registry</p>
                            <p class="text-[#b99da6] text-lg font-normal">Overview of magical assets, student enrolments, and house points.</p>
                        </div>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 rounded-full bg-[#1a0b0f] border border-[#543b43] text-[#b99da6] text-xs font-medium flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">calendar_today</span> Autumn Term, 1994
                            </span>
                        </div>
                    </div>
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Stat Card 1 -->
                        <div class="group relative flex flex-col justify-between rounded-xl border border-[#543b43] bg-[#2a161d] p-6 shadow-lg hover:border-primary/50 transition-all duration-300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-[#b99da6] text-sm font-medium uppercase tracking-wider">Total Students</p>
                                    <p class="text-white text-3xl font-bold mt-1">1,250</p>
                                </div>
                                <div class="p-2 bg-primary/20 rounded-lg text-primary">
                                    <span class="material-symbols-outlined">school</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="text-emerald-400 text-sm font-bold flex items-center">
                                    <span class="material-symbols-outlined text-sm mr-0.5">trending_up</span> +15%
                                </span>
                                <span class="text-[#b99da6] text-xs">vs last term</span>
                            </div>
                        </div>
                        <!-- Stat Card 2 -->
                        <div class="group relative flex flex-col justify-between rounded-xl border border-[#543b43] bg-[#2a161d] p-6 shadow-lg hover:border-gold/50 transition-all duration-300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-[#b99da6] text-sm font-medium uppercase tracking-wider">Active Houses</p>
                                    <p class="text-white text-3xl font-bold mt-1">4</p>
                                </div>
                                <div class="p-2 bg-amber-900/30 rounded-lg text-amber-500">
                                    <span class="material-symbols-outlined">castle</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="text-[#b99da6] text-sm font-medium">Stable</span>
                            </div>
                        </div>
                        <!-- Stat Card 3 -->
                        <div class="group relative flex flex-col justify-between rounded-xl border border-[#543b43] bg-[#2a161d] p-6 shadow-lg hover:border-purple-500/50 transition-all duration-300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-[#b99da6] text-sm font-medium uppercase tracking-wider">Spells Taught</p>
                                    <p class="text-white text-3xl font-bold mt-1">42</p>
                                </div>
                                <div class="p-2 bg-purple-900/30 rounded-lg text-purple-400">
                                    <span class="material-symbols-outlined">auto_fix_high</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="text-emerald-400 text-sm font-bold flex items-center">
                                    <span class="material-symbols-outlined text-sm mr-0.5">trending_up</span> +2%
                                </span>
                                <span class="text-[#b99da6] text-xs">new curriculum</span>
                            </div>
                        </div>
                        <!-- Stat Card 4 -->
                        <div class="group relative flex flex-col justify-between rounded-xl border border-[#543b43] bg-[#2a161d] p-6 shadow-lg hover:border-blue-500/50 transition-all duration-300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-[#b99da6] text-sm font-medium uppercase tracking-wider">Club Charters</p>
                                    <p class="text-white text-3xl font-bold mt-1">12</p>
                                </div>
                                <div class="p-2 bg-blue-900/30 rounded-lg text-blue-400">
                                    <span class="material-symbols-outlined">diversity_3</span>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <span class="text-emerald-400 text-sm font-bold flex items-center">
                                    <span class="material-symbols-outlined text-sm mr-0.5">trending_up</span> +5%
                                </span>
                                <span class="text-[#b99da6] text-xs">student activity</span>
                            </div>
                        </div>
                    </div>
                    <!-- Action Panel -->
                    <div class="rounded-xl border border-[#543b43] bg-gradient-to-r from-[#2a161d] to-[#1a0b0f] p-6 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-10 opacity-5">
                            <span class="material-symbols-outlined text-9xl">history_edu</span>
                        </div>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 relative z-10">
                            <div class="flex flex-col gap-2 max-w-2xl">
                                <h3 class="text-white text-xl font-bold flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary">auto_awesome</span>
                                    Quick Enrolment
                                </h3>
                                <p class="text-[#b99da6] text-base leading-relaxed">The Book of Admittance has detected new magical signatures. Admit a new wizard or witch to the official registry to begin their sorting process.</p>
                            </div>
                            <button class="flex items-center gap-2 bg-primary hover:bg-[#b00c42] text-white px-6 py-3 rounded-lg font-bold shadow-lg shadow-primary/20 hover:shadow-primary/40 transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                                <span class="material-symbols-outlined">edit_document</span>
                                Enrol Student
                            </button>
                        </div>
                    </div>
                    <!-- Data Table Section -->
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-white text-2xl font-bold">Recent Enrolments</h3>
                            <div class="flex gap-2">
                                <button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-[#543b43] text-[#b99da6] hover:text-white hover:bg-[#39282e] transition-colors text-sm font-medium">
                                    <span class="material-symbols-outlined text-sm">filter_list</span> Filter
                                </button>
                                <button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-[#543b43] text-[#b99da6] hover:text-white hover:bg-[#39282e] transition-colors text-sm font-medium">
                                    <span class="material-symbols-outlined text-sm">download</span> Export
                                </button>
                            </div>
                        </div>
                        <div class="overflow-hidden rounded-xl border border-[#543b43] bg-[#1a0b0f] shadow-xl">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="border-b border-[#39282e] bg-[#2a161d]">
                                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6]">Student Name</th>
                                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6]">House</th>
                                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6]">Year</th>
                                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6]">Status</th>
                                            <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6] text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-[#39282e]">
                                        <!-- Row 1 -->
                                        <tr class="group hover:bg-[#39282e]/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-8 rounded-full bg-cover bg-center border border-[#543b43]" data-alt="Student 1" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAT95qsdtqHPCnnsztzdEKB8hKyDECmqjHQ5vZUjeLlxAh6_Jq4K1uq2CnIAax4gdOSpJO0HSgcTe9eaBcUn0EmDETtimi2VDHjff51REBOPSs7Rg7PRr_rih61qHXG8dEdrqMqZvdr7ldawfEMsmiB2vc6inQ-OS-413wsseZOQ0W5eZpsAWvqGAy6SjcwkxGncjfc-S2xUkXEqveMssLs74gjADfXq1RMnruYOUvFDldjlDhycQc7PuSxFuRoRAWmPGVGF62PIRHM");'></div>
                                                    <div class="flex flex-col">
                                                        <span class="text-white font-medium">Harry Potter</span>
                                                        <span class="text-[#b99da6] text-xs">harry.p@hogwarts.edu</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-red-900/30 border border-red-800 px-2.5 py-0.5 text-xs font-medium text-red-200">
                                                    Gryffindor
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-[#b99da6] font-medium">4th Year</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 text-emerald-400 text-sm font-medium">
                                                    <span class="size-1.5 rounded-full bg-emerald-400"></span> Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button class="text-[#b99da6] hover:text-white p-1" title="Edit">
                                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                                    </button>
                                                    <button class="text-[#b99da6] hover:text-red-400 p-1" title="Expel">
                                                        <span class="material-symbols-outlined text-[20px]">block</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 2 -->
                                        <tr class="group hover:bg-[#39282e]/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-8 rounded-full bg-cover bg-center border border-[#543b43]" data-alt="Student 2" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDf4i7W_1Q-0dCXOy6BXapBAiDTrBBrcTYAZ65YJKaoSGyf0afY2_2Z0xEVs8nA1IcJ9h-F15HHwACgprzpp-UZAIziaPIut_irL52pc3W_U5w6odrHoxsu4CHOx0o_oTnKFdEiEoyvmpeOf-PkJu_MDmZhTIEszMID2zjON7N-piOPUMiDSBNCdqvS7ww5tNHzFecSUmpGl4rcl8P-AkA-uUrt8O9ZjXgYZLjyG2raJ1yAd4YlZDWb8Kssqmamm_8GCCadrO6sag3N");'></div>
                                                    <div class="flex flex-col">
                                                        <span class="text-white font-medium">Hermione Granger</span>
                                                        <span class="text-[#b99da6] text-xs">h.granger@hogwarts.edu</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-red-900/30 border border-red-800 px-2.5 py-0.5 text-xs font-medium text-red-200">
                                                    Gryffindor
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-[#b99da6] font-medium">4th Year</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 text-emerald-400 text-sm font-medium">
                                                    <span class="size-1.5 rounded-full bg-emerald-400"></span> Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button class="text-[#b99da6] hover:text-white p-1" title="Edit">
                                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                                    </button>
                                                    <button class="text-[#b99da6] hover:text-red-400 p-1" title="Expel">
                                                        <span class="material-symbols-outlined text-[20px]">block</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 3 -->
                                        <tr class="group hover:bg-[#39282e]/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-8 rounded-full bg-cover bg-center border border-[#543b43]" data-alt="Student 3" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBtcqC3I4Os5ykuNP9VYT4er6Uy1Lz_OeReO7cU1JfQcVFlt0DRAi6yvlYqKiqd_eFL35_Y6ztlxGsFTE7G4kx2LS4x1Jz3zH5z_JH5UbQjnxo21A6z4fdh6yN-oXqwcAsMFH1AVb-xiKwLCYNGyNuEPgh7y37SjTtgGp29b-ZgH5XqGQNPSmhsSzaSYJsH-TeKVr4dqhIhj8JQdTiEtqrBYW9CpcuJPJEZG_KUTFfaqOvIDdVHMK4yCgqt341--zmwkpX68jT5bhE2");'></div>
                                                    <div class="flex flex-col">
                                                        <span class="text-white font-medium">Draco Malfoy</span>
                                                        <span class="text-[#b99da6] text-xs">d.malfoy@hogwarts.edu</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-900/30 border border-emerald-800 px-2.5 py-0.5 text-xs font-medium text-emerald-200">
                                                    Slytherin
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-[#b99da6] font-medium">4th Year</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 text-amber-400 text-sm font-medium">
                                                    <span class="size-1.5 rounded-full bg-amber-400"></span> Probation
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button class="text-[#b99da6] hover:text-white p-1" title="Edit">
                                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                                    </button>
                                                    <button class="text-[#b99da6] hover:text-red-400 p-1" title="Expel">
                                                        <span class="material-symbols-outlined text-[20px]">block</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 4 -->
                                        <tr class="group hover:bg-[#39282e]/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-8 rounded-full bg-cover bg-center border border-[#543b43]" data-alt="Student 4" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA7X1L9ZnifJPEltNbcbEOPhzZnpH-zMd0bxKxDbjqdtBgXpdi3uIoWchaA9hEZ5tSj3Ga1ro-PAhs-g1Va_sM_uJ6VsP0pb59HchlkNCpp7ZQBCNyw1g4zqPZpXu8sgMIzlZG06eLl7f_086-zxC7YF2ZLisfY5fqnpUdOmg0lzon7GyUpJF5s-Kd9vs5Xwt1UaaKS_NN8gRXI0qVmn6SwYwuY_M6rO-nuUkVVSaI_0XpJ4PzphrxYNln2OaYnYgZOZuWIplIrSGC6");'></div>
                                                    <div class="flex flex-col">
                                                        <span class="text-white font-medium">Luna Lovegood</span>
                                                        <span class="text-[#b99da6] text-xs">l.lovegood@hogwarts.edu</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-900/30 border border-blue-800 px-2.5 py-0.5 text-xs font-medium text-blue-200">
                                                    Ravenclaw
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-[#b99da6] font-medium">3rd Year</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 text-emerald-400 text-sm font-medium">
                                                    <span class="size-1.5 rounded-full bg-emerald-400"></span> Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button class="text-[#b99da6] hover:text-white p-1" title="Edit">
                                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                                    </button>
                                                    <button class="text-[#b99da6] hover:text-red-400 p-1" title="Expel">
                                                        <span class="material-symbols-outlined text-[20px]">block</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Row 5 -->
                                        <tr class="group hover:bg-[#39282e]/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-8 rounded-full bg-cover bg-center border border-[#543b43]" data-alt="Student 5" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCZaQN2phpGWzGjCmP4P2uOII0NrUqjuV1MNYY-8GEAPtSFJTMENpcpPK8hTrK3QTUcUF9mq1O6vBiSufnPzJMYePo85RXNvc9VTNVeJic5inL1Gu0d82syYwBxMmSHB1d2p8YsEqFY0Iq9Zpp2NR5qvhjfrLmPspggwT3bVYNyvCb9fog03wp2z4t98KRJn0ovUJs7d7ijYlaSW378fcf_mhSCBIroMYdezJjUlf-XiDebxguJLITh2RQj_LYl0Q4sYZ4_SYm7GJPn");'></div>
                                                    <div class="flex flex-col">
                                                        <span class="text-white font-medium">Cedric Diggory</span>
                                                        <span class="text-[#b99da6] text-xs">c.diggory@hogwarts.edu</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-yellow-900/30 border border-yellow-800 px-2.5 py-0.5 text-xs font-medium text-yellow-200">
                                                    Hufflepuff
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-[#b99da6] font-medium">6th Year</td>
                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center gap-1.5 text-emerald-400 text-sm font-medium">
                                                    <span class="size-1.5 rounded-full bg-emerald-400"></span> Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <button class="text-[#b99da6] hover:text-white p-1" title="Edit">
                                                        <span class="material-symbols-outlined text-[20px]">edit_square</span>
                                                    </button>
                                                    <button class="text-[#b99da6] hover:text-red-400 p-1" title="Expel">
                                                        <span class="material-symbols-outlined text-[20px]">block</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-t border-[#39282e] bg-[#221016] px-6 py-3 flex items-center justify-between">
                                <span class="text-xs text-[#b99da6]">Showing 5 of 1,250 students</span>
                                <div class="flex gap-1">
                                    <button class="size-8 flex items-center justify-center rounded border border-[#39282e] text-[#b99da6] hover:bg-[#39282e] hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-sm">chevron_left</span>
                                    </button>
                                    <button class="size-8 flex items-center justify-center rounded border border-primary bg-primary text-white text-sm font-bold">1</button>
                                    <button class="size-8 flex items-center justify-center rounded border border-[#39282e] text-[#b99da6] hover:bg-[#39282e] hover:text-white transition-colors text-sm font-medium">2</button>
                                    <button class="size-8 flex items-center justify-center rounded border border-[#39282e] text-[#b99da6] hover:bg-[#39282e] hover:text-white transition-colors text-sm font-medium">3</button>
                                    <button class="size-8 flex items-center justify-center rounded border border-[#39282e] text-[#b99da6] hover:bg-[#39282e] hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
            </main>
            <!-- Floating Action Button for Mobile -->
            <button class="fixed bottom-6 right-6 md:hidden size-14 bg-primary text-white rounded-full shadow-lg shadow-primary/30 flex items-center justify-center z-50 hover:bg-[#b00c42] active:scale-95 transition-all">
                <span class="material-symbols-outlined">auto_fix_high</span>
            </button>
        </div>
