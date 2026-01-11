<main class="flex-1 w-full max-w-[1400px] mx-auto p-4 md:p-8 flex flex-col gap-8">
    <!-- Hero Section -->
    <section class="w-full">
        <div class="relative w-full rounded-xl overflow-hidden shadow-2xl border border-[#393628] group">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent z-10"></div>
            <div class="h-[480px] w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Hogwarts Great Hall feast with floating candles" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDpm_83HDuga8SIctLdjQmgsmB_NWYWXVScF3d3JmT2crq5ewOh8wg4wvkJzE2hKK0j6baqKadSPjROtZiIx6fA8M4stjA1Gdgu5HCFZksgcp2LyztCnFBDnAJB07QIhaA-RdcAZo_bpm6PYiALEyJvd8QuaqvFLGc2zUM4j-6GA1rAUkkjhidgqUDpH8XiQExoA3cIEYwyTglTbYrHWortLw0XH-If4DgBLxhlbwtvaj3WyUoLxA6Xxdg-S5uZmOSu8p92zTpAQxHU");'></div>
            <div class="absolute bottom-0 left-0 z-20 p-6 md:p-10 w-full md:w-2/3 flex flex-col gap-4 items-start">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/20 backdrop-blur-sm border border-primary/40 text-primary text-xs font-bold uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">campaign</span>
                    Official Decree
                </div>
                <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight drop-shadow-lg">
                    The Daily Proclamation:<br />Year End Feast Mandatory
                </h1>
                <p class="text-gray-200 text-lg md:text-xl font-normal leading-relaxed max-w-xl drop-shadow-md">
                    Headmistress McGonagall requests the pleasure of your company this Friday evening. Dress robes are strictly required for all years.
                </p>
                <button class="mt-4 flex items-center justify-center gap-2 rounded-lg bg-primary hover:bg-primary-dark text-[#181711] font-bold py-3 px-6 transition-all hover:translate-y-[-2px] shadow-[0_0_15px_rgba(244,209,37,0.3)]">
                    <span>Read Decree</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>
    </section>
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Main Content Feed -->
        <div class="flex-1 flex flex-col gap-6">
            <!-- Filters -->
            <div class="flex flex-wrap gap-3 pb-2 border-b border-[#393628]">
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-primary text-[#181711] font-bold text-sm shadow-md">
                    <span class="material-symbols-outlined text-[18px]">auto_awesome</span>
                    All Scrolls
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-[#27251b] hover:bg-[#393628] text-[#bab59c] hover:text-white font-medium text-sm transition-colors border border-transparent hover:border-[#393628]">
                    <span class="material-symbols-outlined text-[18px]">trophy</span>
                    Quidditch
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-[#27251b] hover:bg-[#393628] text-[#bab59c] hover:text-white font-medium text-sm transition-colors border border-transparent hover:border-[#393628]">
                    <span class="material-symbols-outlined text-[18px]">school</span>
                    Academic
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-[#27251b] hover:bg-[#393628] text-[#bab59c] hover:text-white font-medium text-sm transition-colors border border-transparent hover:border-[#393628]">
                    <span class="material-symbols-outlined text-[18px]">search</span>
                    Lost &amp; Found
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-[#27251b] hover:bg-[#393628] text-[#bab59c] hover:text-white font-medium text-sm transition-colors border border-transparent hover:border-[#393628]">
                    <span class="material-symbols-outlined text-[18px]">science</span>
                    Potions
                </button>
            </div>
            <!-- Announcement Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <?php foreach ($data as $item): ?>
                        <article class="group flex flex-col overflow-hidden rounded-xl border border-surface-border bg-[#26161a] transition-all hover:border-primary/50 hover:shadow-2xl hover:shadow-primary/5">
                            <div class="aspect-video w-full overflow-hidden relative">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#26161a] to-transparent z-10 opacity-60"></div>
                                <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style="background-image: url(<?= $item['article']->getImageUrl() ?>);"></div>
                                <?php foreach($item['categories'] as $category): ?>
                                    <span class="absolute top-4 left-4 z-20 rounded bg-primary px-2 py-0.5 text-[10px] font-bold uppercase tracking-widest text-white"><?= $category->getName() ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="flex flex-1 flex-col p-6">
                                <div class="mb-3 flex items-center gap-2 text-xs text-text-muted">
                                    <span class="font-bold text-primary italic"><?= ucwords($item['author']->getName()) ?></span>
                                    <span>•</span>
                                    <?php
                                        $date = new DateTime($item['article']->getPublishedDate());
                                        $now = new DateTime();
                                        $interval = $now->diff($date);
                                        if ($interval->d > 0) {
                                            echo "<span>" . $interval->d . " days ago</span>";
                                        } elseif ($interval->h > 0) {
                                            echo "<span>" . $interval->h . " hours ago</span>";
                                        } elseif ($interval->i > 0) {
                                            echo "<span>" . $interval->i . " minutes ago</span>";
                                        } else {
                                            echo "<span>Just now</span>";
                                        } 
                                     ?>
                                </div>
                                <h3 class="mb-4 text-xl font-bold leading-tight text-white group-hover:text-primary transition-colors italic underline decoration-primary/20 underline-offset-4">
                                    <?= htmlspecialchars($item['article']->getTitle()) ?>
                                </h3>
                                <div class="mt-auto flex items-center justify-between">
                                    <a href="/article?id=<?= $item['article']->getId() ?>" class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-primary hover:text-white transition-colors">
                                        Read Scroll
                                        <span class="material-symbols-outlined text-sm">arrow_right_alt</span>
                                    </a>
                                    <div class="flex items-center gap-3 text-text-muted">
                                        <a href="/author/article/edit?id=<?= $item['article']->getId() ?>" class="material-symbols-outlined">settings_suggest</a>
                                        <a href="/author/article/delete?id=<?= $item['article']->getId() ?>" class="material-symbols-outlined">inventory_2</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
            </div>
        </div>
        <!-- Sidebar -->
        <aside class="w-full lg:w-[320px] flex flex-col gap-6 shrink-0">
            <!-- House Points Widget -->
            <div class="bg-[#27251b] border border-[#393628] rounded-xl p-5 shadow-lg">
                <div class="flex items-center gap-2 mb-4 pb-4 border-b border-[#393628]">
                    <span class="material-symbols-outlined text-primary">hourglass_top</span>
                    <h3 class="text-white text-lg font-bold">House Points</h3>
                </div>
                <div class="flex flex-col gap-4">
                    <!-- Gryffindor -->
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-sm font-medium">
                            <span class="text-[#bab59c]">Gryffindor</span>
                            <span class="text-white font-bold">450</span>
                        </div>
                        <div class="h-2 w-full bg-[#181711] rounded-full overflow-hidden">
                            <div class="h-full bg-burgundy w-[75%] rounded-full"></div>
                        </div>
                    </div>
                    <!-- Slytherin -->
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-sm font-medium">
                            <span class="text-[#bab59c]">Slytherin</span>
                            <span class="text-white font-bold">425</span>
                        </div>
                        <div class="h-2 w-full bg-[#181711] rounded-full overflow-hidden">
                            <div class="h-full bg-hogwarts-green w-[70%] rounded-full"></div>
                        </div>
                    </div>
                    <!-- Ravenclaw -->
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-sm font-medium">
                            <span class="text-[#bab59c]">Ravenclaw</span>
                            <span class="text-white font-bold">390</span>
                        </div>
                        <div class="h-2 w-full bg-[#181711] rounded-full overflow-hidden">
                            <div class="h-full bg-blue-900 w-[60%] rounded-full"></div>
                        </div>
                    </div>
                    <!-- Hufflepuff -->
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between text-sm font-medium">
                            <span class="text-[#bab59c]">Hufflepuff</span>
                            <span class="text-white font-bold">360</span>
                        </div>
                        <div class="h-2 w-full bg-[#181711] rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-600 w-[55%] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Today's Spell -->
            <div class="relative bg-[#27251b] border border-[#393628] rounded-xl p-5 shadow-lg overflow-hidden">
                <div class="absolute -right-4 -top-4 text-[#393628]/30 rotate-12">
                    <span class="material-symbols-outlined text-[100px]">auto_fix_high</span>
                </div>
                <div class="relative z-10">
                    <h4 class="text-primary text-xs font-bold uppercase tracking-wider mb-1">Spell of the Day</h4>
                    <h3 class="text-white text-2xl font-black mb-2 italic">"Lumos Maxima"</h3>
                    <p class="text-[#bab59c] text-sm leading-relaxed">
                        Produces a blinding flash of light from the tip of the wand. Useful for dark corridors and scaring away Gytrash.
                    </p>
                    <div class="mt-3 flex items-center gap-2 text-xs text-white/50">
                        <span class="material-symbols-outlined text-sm">history_edu</span>
                        <span>Charms, Year 3</span>
                    </div>
                </div>
            </div>
            <!-- Quick Links -->
            <div class="bg-[#27251b] border border-[#393628] rounded-xl p-0 shadow-lg overflow-hidden">
                <a class="flex items-center justify-between p-4 hover:bg-[#393628] transition-colors border-b border-[#393628]" href="#">
                    <div class="flex items-center gap-3">
                        <div class="size-8 rounded-full bg-burgundy/20 flex items-center justify-center text-burgundy">
                            <span class="material-symbols-outlined text-sm">restaurant</span>
                        </div>
                        <span class="text-white font-medium text-sm">Lunch Menu</span>
                    </div>
                    <span class="material-symbols-outlined text-white/30 text-lg">chevron_right</span>
                </a>
                <a class="flex items-center justify-between p-4 hover:bg-[#393628] transition-colors border-b border-[#393628]" href="#">
                    <div class="flex items-center gap-3">
                        <div class="size-8 rounded-full bg-blue-900/20 flex items-center justify-center text-blue-400">
                            <span class="material-symbols-outlined text-sm">calendar_month</span>
                        </div>
                        <span class="text-white font-medium text-sm">Exam Schedule</span>
                    </div>
                    <span class="material-symbols-outlined text-white/30 text-lg">chevron_right</span>
                </a>
                <a class="flex items-center justify-between p-4 hover:bg-[#393628] transition-colors" href="#">
                    <div class="flex items-center gap-3">
                        <div class="size-8 rounded-full bg-hogwarts-green/20 flex items-center justify-center text-green-400">
                            <span class="material-symbols-outlined text-sm">map</span>
                        </div>
                        <span class="text-white font-medium text-sm">Marauder's Map</span>
                    </div>
                    <span class="material-symbols-outlined text-white/30 text-lg">chevron_right</span>
                </a>
            </div>
        </aside>
    </div>
</main>
<!-- Floating Action Button for posting -->
<div class="fixed bottom-8 right-8 z-50">
    <button class="flex items-center justify-center size-14 rounded-full bg-primary hover:bg-primary-dark text-[#181711] shadow-[0_0_20px_rgba(244,209,37,0.4)] transition-all hover:scale-110 active:scale-95 group">
        <span class="material-symbols-outlined text-3xl">edit_square</span>
        <span class="absolute right-full mr-4 bg-[#181711] text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none border border-[#393628]">
            New Decree
        </span>
    </button>
</div>