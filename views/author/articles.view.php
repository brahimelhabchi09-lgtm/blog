
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
                    <span class="material-symbols-outlined text-primary text-3xl">magic_button</span>
                    <h2 class="text-xl font-bold tracking-tight text-white italic">The Daily Oracle</h2>
                </div>
                <div class="flex flex-1 justify-end gap-6">
                    <div class="relative hidden max-w-md flex-1 md:flex">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-muted">
                            <span class="material-symbols-outlined text-sm">flare</span>
                        </div>
                        <input class="block w-full rounded-full border-0 bg-surface-dark py-2 pl-10 pr-4 text-white placeholder-text-muted focus:ring-1 focus:ring-primary/50 sm:text-sm sm:leading-6 italic" placeholder="Lumos Search..." type="text" />
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
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-3xl font-black tracking-tight text-white uppercase italic">School News Feed</h1>
                        <p class="text-text-muted">The latest whispers, discoveries, and decrees from across the castle.</p>
                    </div>
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between border-y border-surface-border py-4">
                        <div class="flex flex-wrap gap-2">
                            <button class="rounded-full bg-primary px-4 py-1.5 text-xs font-bold text-white uppercase tracking-wider">All Magic</button>
                            <button class="rounded-full bg-surface-dark border border-surface-border px-4 py-1.5 text-xs font-bold text-text-muted hover:text-white hover:border-text-muted transition-all uppercase tracking-wider">Alchemy</button>
                            <button class="rounded-full bg-surface-dark border border-surface-border px-4 py-1.5 text-xs font-bold text-text-muted hover:text-white hover:border-text-muted transition-all uppercase tracking-wider">Charms</button>
                            <button class="rounded-full bg-surface-dark border border-surface-border px-4 py-1.5 text-xs font-bold text-text-muted hover:text-white hover:border-text-muted transition-all uppercase tracking-wider">Potions</button>
                            <button class="rounded-full bg-surface-dark border border-surface-border px-4 py-1.5 text-xs font-bold text-text-muted hover:text-white hover:border-text-muted transition-all uppercase tracking-wider">Defense</button>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs uppercase tracking-widest text-text-muted font-bold">Sort by:</span>
                            <select class="bg-surface-dark border-none text-xs font-bold text-white focus:ring-0 rounded-lg py-1 px-2 cursor-pointer uppercase tracking-widest">
                                <option>Latest Arcana</option>
                                <option>Most Enchanting</option>
                                <option>Ancient Scrolls</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
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
                                    <button class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-primary hover:text-white transition-colors">
                                        Read Scroll
                                        <span class="material-symbols-outlined text-sm">arrow_right_alt</span>
                                    </button>
                                    <div class="flex items-center gap-3 text-text-muted">
                                        <a href="/author/article/edit?id=<?= $item['article']->getId() ?>" class="material-symbols-outlined">settings_suggest</a>
                                        <a href="/author/article/delete?id=<?= $item['article']->getId() ?>" class="material-symbols-outlined">inventory_2</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <a href="/author/article/create" class="pink-glow flex items-center gap-2 bg-primary hover:bg-[#b00c42] text-white px-6 py-3 rounded-lg font-bold transition-all transform hover:-translate-y-0.5 active:translate-y-0 flex-shrink-0">
                <span class="material-symbols-outlined">add_circle</span>
                Add New Article
            </a>
                <div class="flex items-center justify-center pt-8 border-t border-surface-border">
                    <button class="group flex items-center gap-3 rounded-full border border-surface-border bg-surface-dark px-8 py-3 text-sm font-bold uppercase tracking-[0.2em] text-text-parchment hover:border-primary hover:text-primary transition-all shadow-xl">
                        Summon More News
                        <span class="material-symbols-outlined group-hover:rotate-180 transition-transform duration-500">sync</span>
                    </button>
                </div>
            </div>
        </main>
