<main class="flex-1 w-full max-w-[1400px] mx-auto px-6 lg:px-12 py-8">
    <!-- Page Heading -->
    <div class="mb-8 flex flex-col gap-2 md:flex-row md:items-end md:justify-between">
        <div>
            <h2 class="text-4xl font-black text-white tracking-tight">The School Registry</h2>
            <p class="mt-2 text-lg text-text-muted">Manage enrollment, staff assignments, and disciplinary records.</p>
        </div>
        <div class="mt-4 md:mt-0">
            <button class="group relative inline-flex h-10 items-center justify-center gap-2 overflow-hidden rounded-md bg-primary px-6 font-semibold text-background-dark transition-all hover:bg-[#d9a60b] focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-background-dark">
                <span class="material-symbols-outlined text-lg">history_edu</span>
                <span>Enlist New Member</span>
            </button>
        </div>
    </div>
    <!-- Filters & Search Toolbar -->
    <div class="mb-6 grid gap-4 rounded-xl border border-surface-border bg-surface-dark p-4 md:grid-cols-[2fr_1fr_1fr_auto]">
        <!-- Search -->
        <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-muted">
                <span class="material-symbols-outlined">search</span>
            </div>
            <input class="block w-full rounded-lg border border-surface-border bg-background-dark py-2.5 pl-10 pr-3 text-sm text-white placeholder-text-muted focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Search by name, wand core, or patronus..." type="text" />
        </div>
        <!-- House Filter -->
        <div class="relative">
            <select class="block w-full appearance-none rounded-lg border border-surface-border bg-background-dark py-2.5 pl-3 pr-10 text-sm text-white focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                <option disabled="" selected="" value="">Filter by House</option>
                <option value="gryffindor">Gryffindor</option>
                <option value="slytherin">Slytherin</option>
                <option value="ravenclaw">Ravenclaw</option>
                <option value="hufflepuff">Hufflepuff</option>
            </select>
        </div>
        <!-- Role Filter -->
        <div class="relative">
            <select class="block w-full appearance-none rounded-lg border border-surface-border bg-background-dark py-2.5 pl-3 pr-10 text-sm text-white focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                <option disabled="" selected="" value="">Filter by Role</option>
                <option value="student">Student</option>
                <option value="professor">Professor</option>
                <option value="staff">Staff</option>
                <option value="ghost">Ghost</option>
            </select>
        </div>
        <!-- View Options -->
        <div class="flex items-center gap-2">
            <button class="flex h-10 w-10 items-center justify-center rounded-lg border border-primary bg-primary/10 text-primary transition-colors">
                <span class="material-symbols-outlined">table_rows</span>
            </button>
            <button class="flex h-10 w-10 items-center justify-center rounded-lg border border-surface-border bg-transparent text-text-muted hover:border-primary hover:text-primary transition-colors">
                <span class="material-symbols-outlined">grid_view</span>
            </button>
        </div>
    </div>
    <!-- Data Table (The Ledger) -->
    <div class="overflow-hidden rounded-xl border border-surface-border bg-surface-dark shadow-2xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b border-surface-border bg-background-dark/50 text-xs uppercase tracking-wider text-text-muted">
                        <th class="px-6 py-4 font-semibold" scope="col">Wizard / Witch</th>
                        <th class="px-6 py-4 font-semibold" scope="col">House</th>
                        <th class="px-6 py-4 font-semibold" scope="col">Role</th>
                        <th class="px-6 py-4 font-semibold" scope="col">Wand Status</th>
                        <th class="px-6 py-4 font-semibold" scope="col">Last Sighting</th>
                        <th class="px-6 py-4 font-semibold text-right" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-border">
                    <!-- Row 1 -->
                    <tr class="group transition-colors hover:bg-primary/5">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 overflow-hidden rounded-full ring-2 ring-primary/20 group-hover:ring-primary">
                                    <img alt="Portrait of Albus" class="h-full w-full object-cover" data-alt="Close up of an elderly man with a white beard" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWhFfVpAENAe8dVEV3Tcwbs9NmnWnmP5oetYsP2ofmgGQEy5ANaLlR2n-oMueO51LkKpy10UYdSbPZJW_8xAZ9e0r3ot07jyxA_p0aULu12H_IudeyI5vHuvygkXOOT3eg5KwTIm54uyw6_Q_m4a0ujLW2Z7gJ_kPlxVREdiIw9C5doJL8fyKx4_09cQ9vt2yNj0_buExfPR6Z8Dc1x6w0-gRgIyLy6Skcjj9q-nQs_qiH1u9rF3XhR1NtXqWGAalA_N2LiREAGVVL" />
                                </div>
                                <div>
                                    <div class="font-bold text-white">Albus Percival</div>
                                    <div class="text-xs text-text-muted">Elder Wand</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-red-900/30 text-red-500">
                                    <span class="material-symbols-outlined text-[16px]">local_fire_department</span>
                                </span>
                                <span class="text-white">Gryffindor</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center rounded-full border border-primary/20 bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">
                                Headmaster
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="relative flex h-2.5 w-2.5">
                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-green-500"></span>
                                </span>
                                <span class="text-white">Active</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-text-muted">Just now</td>
                        <td class="px-6 py-4 text-right">
                            <button class="rounded p-1 text-text-muted hover:bg-surface-border hover:text-white">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="group transition-colors hover:bg-primary/5">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 overflow-hidden rounded-full ring-2 ring-primary/20 group-hover:ring-primary">
                                    <img alt="Portrait of Harry" class="h-full w-full object-cover" data-alt="Portrait of a young man with messy hair and glasses" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBO-AMFKbgQwwl4P7Yp5QBPWkbnvGYYU_6FC_H8dpvnyPjpciOfA9oxK-2CYKlnPZ_Z2S11wI5cMdRmXMqvLNhmsk0fWApNZgeW0kpIwh0QaGc6cCP6X4meRddHqBSDIFDwnsR4WOTQ8RzVFsocTHATWIp_VqdBJdSmCBq0SnOVI5YqtcIIlr2FsdKSZibLgP9_G5nWHoeYlt5xAL2hsZpau9ZhuVQasx_AlIWmg-_v6KiV4gOM5KVYLURWjc1p-d8ZHf19IGywCRZa" />
                                </div>
                                <div>
                                    <div class="font-bold text-white">Harry James</div>
                                    <div class="text-xs text-text-muted">Holly &amp; Phoenix Feather</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-red-900/30 text-red-500">
                                    <span class="material-symbols-outlined text-[16px]">local_fire_department</span>
                                </span>
                                <span class="text-white">Gryffindor</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center rounded-full border border-surface-border bg-surface-border/50 px-2.5 py-0.5 text-xs font-medium text-white">
                                Student
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>
                                <span class="text-white">Active</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-text-muted">2 hours ago</td>
                        <td class="px-6 py-4 text-right">
                            <button class="rounded p-1 text-text-muted hover:bg-surface-border hover:text-white">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="group transition-colors hover:bg-primary/5">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 overflow-hidden rounded-full ring-2 ring-surface-border group-hover:ring-primary">
                                    <img alt="Portrait of Draco" class="h-full w-full object-cover grayscale" data-alt="Portrait of a stern looking young man with blonde hair" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEX6lBUiE_z8_Mpu7nQqV8pG7gyNFSiJ3SYJgqbqUGcQ4MrADiptax6nkwqLNjJA_gebWTvhuFhpe7GxlhY_XJYM4_7Ue_w1fm4U8SpesSNZWTrXi7VuLdgMVzLkWDBkCAgfLlxMM2ogTmvsTfRs1sCgkvsLufx-aWfvQJJ07Ds5XlWpmd2ofmNhfZqR-G0DuDaZgGga7qRCVbOcIBmNm3-7zjQ6-Qj6r0fLIh2G5r78o1O_VLlTkPsNd0SruqrW8NUbRcKWmHWlBG" />
                                </div>
                                <div>
                                    <div class="font-bold text-text-muted">Draco Lucius</div>
                                    <div class="text-xs text-text-muted">Hawthorn &amp; Unicorn Hair</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-green-900/30 text-green-500">
                                    <span class="material-symbols-outlined text-[16px]">cruelty_free</span>
                                </span>
                                <span class="text-white">Slytherin</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center rounded-full border border-surface-border bg-surface-border/50 px-2.5 py-0.5 text-xs font-medium text-white">
                                Student
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-red-500"></span>
                                <span class="text-text-muted">Suspended</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-text-muted">3 days ago</td>
                        <td class="px-6 py-4 text-right">
                            <button class="rounded p-1 text-text-muted hover:bg-surface-border hover:text-white">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="group transition-colors hover:bg-primary/5">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 overflow-hidden rounded-full ring-2 ring-primary/20 group-hover:ring-primary">
                                    <img alt="Portrait of Hermione" class="h-full w-full object-cover" data-alt="Portrait of a young woman with curly brown hair" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhxdm2xkVfoI5G6TlpL7uAkcZW4uJ38-Lh-YLi0SemU16k_w7mlnbn5Nzo8P2HU-b_76-UaHepooxBGN9mEJYX86eCmwCCEI92X4HstKpPhoZk9SfX9CRlJf6GjESAjBqSgx5z4KKHeIdG1-Fe8onPWTjhl0LNVeDNoQ8PAyKm4ukZp3Hi4ZA_vWZ-5Xahes35Eb_inZrs6FehJNBnDlfj-7cytEBtzbW4reNyzcXpRiRHYWv_c3ebsvAa3-9SjcIedb68jqDnGM-5" />
                                </div>
                                <div>
                                    <div class="font-bold text-white">Hermione Jean</div>
                                    <div class="text-xs text-text-muted">Vine &amp; Dragon Heartstring</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-red-900/30 text-red-500">
                                    <span class="material-symbols-outlined text-[16px]">local_fire_department</span>
                                </span>
                                <span class="text-white">Gryffindor</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center rounded-full border border-surface-border bg-surface-border/50 px-2.5 py-0.5 text-xs font-medium text-white">
                                Student
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>
                                <span class="text-white">Active</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-text-muted">5 mins ago</td>
                        <td class="px-6 py-4 text-right">
                            <button class="rounded p-1 text-text-muted hover:bg-surface-border hover:text-white">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr class="group transition-colors hover:bg-primary/5">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 overflow-hidden rounded-full ring-2 ring-primary/20 group-hover:ring-primary">
                                    <img alt="Portrait of Severus" class="h-full w-full object-cover" data-alt="Portrait of a serious man with long black hair" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpyhReqPmLprYMB_8C2B-X_gI75xEtRFFEouZr-3Pxz2XRMKRY58yb1LuU2ih5qJjHcR7Gt7i2MwXLVh9Bsr3wfS5Jo_9fFC-djuDHX-RAbDy6J3lD-p9OH9-DUAJaDoXz_-lNThZfWftuWMfUny7Lfo8ZI0Y2RHmROy7nv1qa1aRjY_bnTs22ZHTELULFM8qsNNWRw51oUIOc4BQb9aFkJ9geKZdwNPTR89eGlq717Hugs9YeVq0azkT0WUUga4Vchsrh7u-pgYDa" />
                                </div>
                                <div>
                                    <div class="font-bold text-white">Severus</div>
                                    <div class="text-xs text-text-muted">Potions Master</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-green-900/30 text-green-500">
                                    <span class="material-symbols-outlined text-[16px]">cruelty_free</span>
                                </span>
                                <span class="text-white">Slytherin</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center rounded-full border border-purple-900/50 bg-purple-900/20 px-2.5 py-0.5 text-xs font-medium text-purple-300">
                                Professor
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>
                                <span class="text-white">Active</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-text-muted">1 day ago</td>
                        <td class="px-6 py-4 text-right">
                            <button class="rounded p-1 text-text-muted hover:bg-surface-border hover:text-white">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-surface-border bg-surface-dark px-6 py-4">
            <div class="text-sm text-text-muted">
                Showing <span class="font-medium text-white">1</span> to <span class="font-medium text-white">5</span> of <span class="font-medium text-white">420</span> wizards
            </div>
            <div class="flex items-center gap-2">
                <button class="inline-flex h-8 w-8 items-center justify-center rounded border border-surface-border bg-transparent text-text-muted hover:border-primary hover:text-primary disabled:opacity-50 disabled:hover:border-surface-border disabled:hover:text-text-muted">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                </button>
                <button class="inline-flex h-8 w-8 items-center justify-center rounded border border-primary bg-primary text-background-dark font-medium">1</button>
                <button class="inline-flex h-8 w-8 items-center justify-center rounded border border-surface-border bg-transparent text-text-muted hover:border-primary hover:text-primary">2</button>
                <button class="inline-flex h-8 w-8 items-center justify-center rounded border border-surface-border bg-transparent text-text-muted hover:border-primary hover:text-primary">3</button>
                <span class="text-text-muted">...</span>
                <button class="inline-flex h-8 w-8 items-center justify-center rounded border border-surface-border bg-transparent text-text-muted hover:border-primary hover:text-primary">12</button>
                <button class="inline-flex h-8 w-8 items-center justify-center rounded border border-surface-border bg-transparent text-text-muted hover:border-primary hover:text-primary">
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</main>
</div>
</body>

</html>