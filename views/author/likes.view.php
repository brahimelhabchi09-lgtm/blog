
<main class="flex flex-1 flex-col overflow-y-auto bg-background-dark">
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
            <span class="material-symbols-outlined text-primary">waves</span>
            <h2 class="text-lg font-bold tracking-tight text-white">The Daily Oracle <span class="text-text-muted font-normal text-sm ml-2">/ Magical Resonance</span></h2>
        </div>
        <div class="flex flex-1 justify-end gap-6">
            <div class="relative hidden max-w-md flex-1 md:flex">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-muted">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <input class="block w-full rounded-lg border-0 bg-surface-dark py-2 pl-10 pr-4 text-white placeholder-text-muted focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6" placeholder="Search resonance records..." type="text" />
            </div>
            <button class="flex items-center justify-center rounded-full bg-surface-dark p-2 text-text-muted hover:text-white md:hidden">
                <span class="material-symbols-outlined">search</span>
            </button>
            <button class="flex items-center justify-center rounded-full bg-surface-dark p-2 text-text-muted hover:text-white">
                <span class="material-symbols-outlined">notifications</span>
            </button>
        </div>
    </header>
    <div class="flex flex-1 flex-col gap-8 p-6 md:px-12 md:py-8 lg:px-16 lg:py-10 max-w-7xl mx-auto w-full">
        <div class="flex flex-col gap-4">
            <h1 class="text-3xl md:text-4xl font-black tracking-tight text-white">
                Magical Resonance
            </h1>
            <p class="text-base text-text-muted">
                Observe how the readers of the wizarding world respond to your inscriptions.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm">
                <div class="mb-2 flex items-center gap-2 text-text-muted">
                    <span class="material-symbols-outlined text-yellow-500">auto_awesome</span>
                    <span class="text-sm font-medium">Total Sparkles</span>
                </div>
                <p class="text-3xl font-bold text-white">482</p>
            </div>
            <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm">
                <div class="mb-2 flex items-center gap-2 text-text-muted">
                    <span class="material-symbols-outlined text-blue-400">magic_button</span>
                    <span class="text-sm font-medium">Wand Salutes</span>
                </div>
                <p class="text-3xl font-bold text-white">128</p>
            </div>
            <div class="flex flex-col rounded-xl border border-surface-border bg-surface-dark p-5 shadow-sm">
                <div class="mb-2 flex items-center gap-2 text-text-muted">
                    <span class="material-symbols-outlined text-primary">favorite</span>
                    <span class="text-sm font-medium">Heart Connections</span>
                </div>
                <p class="text-3xl font-bold text-white">89</p>
            </div>
        </div>
        <div class="flex flex-col gap-4 overflow-hidden rounded-xl border border-surface-border bg-[#1a0b0e]">
            <div class="grid grid-cols-12 gap-4 border-b border-surface-border bg-surface-dark/50 px-6 py-4 text-xs font-bold uppercase tracking-wider text-text-muted">
                <div class="col-span-3">Reader Name</div>
                <div class="col-span-2">House</div>
                <div class="col-span-4">Article Liked</div>
                <div class="col-span-3">Reaction Type</div>
            </div>
            <div class="flex flex-col divide-y divide-surface-border">
                <div class="grid grid-cols-12 gap-4 px-6 py-4 items-center hover:bg-surface-dark/30 transition-colors">
                    <div class="col-span-3 flex items-center gap-3">
                        <div class="size-8 rounded-full bg-surface-border overflow-hidden">
                            <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlf_vVddI2zgwanGvhHJ0717IAWi4ensYRBGJ7hUovUL5kTGuGuFI9ohYC4lXEV1lom7YOWgr1IJrDDAQ8VfzP3R1AIRZeEjjxRyMawE7EhxO_bJbI8EosKOrCP1kQrEA8x9xFVYCVxbmifEbmwcKt5xbjWz_1--9_QvsqJ47HjPZjZp56cPTThEko7iXZB-Jw_vta1kOj81Ueq-oar96oNqz52ZE5ExVt9O6AWbltz-RuMIkC2Gv-7Rtgyp9ZeGTqQtBFchD_7kge');"></div>
                        </div>
                        <span class="font-medium text-white">Hermione G.</span>
                    </div>
                    <div class="col-span-2">
                        <span class="inline-flex items-center rounded-full bg-red-900/30 px-2.5 py-0.5 text-xs font-medium text-red-400 border border-red-900/50">Gryffindor</span>
                    </div>
                    <div class="col-span-4 italic text-text-parchment/80">10 Uses for Dragon's Blood</div>
                    <div class="col-span-3 flex items-center gap-2 text-yellow-500">
                        <span class="material-symbols-outlined text-sm">auto_awesome</span>
                        <span class="text-sm">Sparkle</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 items-center hover:bg-surface-dark/30 transition-colors">
                    <div class="col-span-3 flex items-center gap-3">
                        <div class="size-8 rounded-full bg-surface-border overflow-hidden">
                            <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDS2M_jeoBxBfKIeZBS7rVMr3apm3Y5TTbl6XQTbShydWCvpUgHCuehW2OqGrQ9CnhSUV069n-RkzqcmHcAmfi8J25YNeRFiI1aEvuhjUUof3O9cIz8-JtcjiR4IUuYkWRteFyNkM6_X1xoa-FEbPpno42dj1Tll3yXqDWpfKEE8O9l9xVWOCfi-wrtHkYJ-VpMii9ZJI6HApg3Hzm9Vt1tA6wVgwellEDcbLSqLHwnxx7P-8gPF5GL_FOZsaFNZrOjThmM_DvyU8cw');"></div>
                        </div>
                        <span class="font-medium text-white">Luna L.</span>
                    </div>
                    <div class="col-span-2">
                        <span class="inline-flex items-center rounded-full bg-blue-900/30 px-2.5 py-0.5 text-xs font-medium text-blue-400 border border-blue-900/50">Ravenclaw</span>
                    </div>
                    <div class="col-span-4 italic text-text-parchment/80">Why Muggles Can't See Hogwarts</div>
                    <div class="col-span-3 flex items-center gap-2 text-blue-400">
                        <span class="material-symbols-outlined text-sm">magic_button</span>
                        <span class="text-sm">Wand Salute</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 items-center hover:bg-surface-dark/30 transition-colors">
                    <div class="col-span-3 flex items-center gap-3">
                        <div class="size-8 rounded-full bg-surface-border overflow-hidden">
                            <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCO4NHwnB-cfZrnwTcjesS41WIWVsZ_yYEz-zrOIEGDw6M4VRhA_6Z4SR1LOD2LWuq9SP3cRm_VZdpnOzoEQEC8B0D8cTVVa2qS-8IlmPH3YbV-ugtQDA40cyGgmKZH-MGYfe14KgCTEl7nWTDQndadXGthrgYqMcf1UMMq8_m6ZreOKdXLGBL6wVdtnNFHFijzj5HbLkfqI7tnM-o5NKCTxjd0Xm843UMGzYz7FSub3ZD9PRdGKUWj7ZjE6ItrLc9qd8xcYtm7UlYr');"></div>
                        </div>
                        <span class="font-medium text-white">Draco M.</span>
                    </div>
                    <div class="col-span-2">
                        <span class="inline-flex items-center rounded-full bg-green-900/30 px-2.5 py-0.5 text-xs font-medium text-green-400 border border-green-900/50">Slytherin</span>
                    </div>
                    <div class="col-span-4 italic text-text-parchment/80">Advanced Potion Making: Tips &amp; Tricks</div>
                    <div class="col-span-3 flex items-center gap-2 text-primary">
                        <span class="material-symbols-outlined text-sm">favorite</span>
                        <span class="text-sm">Heart</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 items-center hover:bg-surface-dark/30 transition-colors">
                    <div class="col-span-3 flex items-center gap-3">
                        <div class="size-8 rounded-full bg-surface-border overflow-hidden">
                            <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA5N5YBuBd0_Uf_kaU34dYq8Cb2fXIYZZy4nEh4LhLrtNJqE6cXiH-ZTAJWCyVIS40DZU0rqJgi3LItrTLlDIKEMOhIDc9ABeK7w8D7d-ZUpBpsLyxXETp1rBXZW2jWe-OjkQUfu_u5xaocPVyCG-YsgICWZ7vToLjJDmSce0cRL-pAoEG5rJE3Hncg_R4FOh5uYsNJ_CDT2MP7ACmSL48o4fdIOe-yyiV1RDzKMmw7RAMy6WHUAgwuWdFqp2k4ribQpvLuQvYonf_f');"></div>
                        </div>
                        <span class="font-medium text-white">Cedric D.</span>
                    </div>
                    <div class="col-span-2">
                        <span class="inline-flex items-center rounded-full bg-yellow-900/30 px-2.5 py-0.5 text-xs font-medium text-yellow-500 border border-yellow-900/50">Hufflepuff</span>
                    </div>
                    <div class="col-span-4 italic text-text-parchment/80">The History of Quidditch</div>
                    <div class="col-span-3 flex items-center gap-2 text-yellow-500">
                        <span class="material-symbols-outlined text-sm">auto_awesome</span>
                        <span class="text-sm">Sparkle</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 items-center hover:bg-surface-dark/30 transition-colors">
                    <div class="col-span-3 flex items-center gap-3">
                        <div class="size-8 rounded-full bg-surface-border overflow-hidden">
                            <div class="h-full w-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAE_o_aNjKFIuz_PBbf9GqIuaJeWOF4b50ysSMMAMWd6Ka1TPKj60fvX-HVkENTkOYc5odhqVuE0gn038WQeY1uFR6gWb1nhlelVkKUvEMaWxJ2Ot5qlcrcpSmZeTzn7f0WQH_IAsWQw3Y6AkflXVKaYQVIAw3NEd74aGYWTPg9lPzNycbCY-du3IFqQTSX9vc7cUUleuOT3PvmdA4AXGthR0Auh4e-XRp0xpISOkO-WOKKiepIYmAPN6Xrov_DqqV0GSUDRRLDlqWd');"></div>
                        </div>
                        <span class="font-medium text-white">Neville L.</span>
                    </div>
                    <div class="col-span-2">
                        <span class="inline-flex items-center rounded-full bg-red-900/30 px-2.5 py-0.5 text-xs font-medium text-red-400 border border-red-900/50">Gryffindor</span>
                    </div>
                    <div class="col-span-4 italic text-text-parchment/80">Advanced Potion Making: Tips &amp; Tricks</div>
                    <div class="col-span-3 flex items-center gap-2 text-blue-400">
                        <span class="material-symbols-outlined text-sm">magic_button</span>
                        <span class="text-sm">Wand Salute</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 flex items-center justify-between border-t border-surface-border pt-4">
            <p class="text-sm text-text-muted">Reviewing <span class="font-medium text-white">1</span> to <span class="font-medium text-white">5</span> of <span class="font-medium text-white">699</span> resonance events</p>
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
