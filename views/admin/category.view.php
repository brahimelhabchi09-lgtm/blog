<main class="flex-1 overflow-y-auto bg-background-dark p-4 md:p-8 scroll-smooth">
    <div class="mx-auto max-w-7xl flex flex-col gap-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border-b border-[#39282e] pb-6">
            <div class="flex flex-col gap-2">
                <p class="text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Category Archives</p>
                <p class="text-[#b99da6] text-lg font-normal">Manage the foundational pillars of the magical curriculum, student organizations, and ancient houses.</p>
            </div>
            <a href="/admin/category/create" class="pink-glow flex items-center gap-2 bg-primary hover:bg-[#b00c42] text-white px-6 py-3 rounded-lg font-bold transition-all transform hover:-translate-y-0.5 active:translate-y-0 flex-shrink-0">
                <span class="material-symbols-outlined">add_circle</span>
                Add New Category
            </a>
        </div>
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <h3 class="text-white text-xl font-bold flex items-center gap-2">
                    <span class="material-symbols-outlined text-gold">history_edu</span>
                    Active Magical Categories
                </h3>
                <div class="flex gap-2">
                    <button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-[#543b43] text-[#b99da6] hover:text-white hover:bg-[#39282e] transition-colors text-sm font-medium">
                        <span class="material-symbols-outlined text-sm">filter_alt</span> Filter By Type
                    </button>
                </div>
            </div>
            <div class="overflow-hidden rounded-xl border border-[#543b43] bg-[#1a0b0f] shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-[#39282e] bg-[#2a161d]">
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6]">Category Name</th>
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6]">Description</th>
                                
                                <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#b99da6] text-right">Registry Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#39282e]">
                            <?php foreach ($categories as $category): ?>
                                <tr class="group hover:bg-[#39282e]/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-[#2a161d] border border-[#543b43] flex items-center justify-center text-gold">
                                                <span class="material-symbols-outlined">menu_book</span>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-white font-bold text-lg"><?= $category->getName() ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-900/30 border border-blue-800 px-3 py-1 text-xs font-medium text-blue-200">
                                            <span><?= $category->getDescription() ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-3">
                                            <a href="category/edit?id=<?= $category->getId() ?>" class="text-[#b99da6] hover:text-white transition-colors" title="Manage Items">
                                                <span class="material-symbols-outlined">settings_suggest</span>
                                            </a>
                                            <form action="/admin/category/delete" method="post" class="inline">
                                                <input type="hidden" name="id" value="<?= $category->getId() ?>">
                                                <button type="submit" class="text-[#b99da6] hover:text-white transition-colors" title="Archive">
                                                    <span class="material-symbols-outlined">inventory_2</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="border-t border-[#39282e] bg-[#221016] px-6 py-4 flex items-center justify-between">
                    <span class="text-xs text-[#b99da6]">Total Registry Categories: 4 Categories | 66 Items</span>
                    <div class="flex gap-1">
                        <button class="size-8 flex items-center justify-center rounded border border-primary bg-primary text-white text-sm font-bold">1</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-xl border border-[#543b43] bg-gradient-to-r from-[#2a161d] to-[#1a0b0f] p-6 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-10 opacity-5">
                <span class="material-symbols-outlined text-9xl">auto_stories</span>
            </div>
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 relative z-10">
                <div class="flex flex-col gap-2 max-w-2xl">
                    <h3 class="text-white text-xl font-bold flex items-center gap-2 italic">
                        <span class="material-symbols-outlined text-primary">priority_high</span>
                        Administrative Note
                    </h3>
                    <p class="text-[#b99da6] text-base leading-relaxed">The classification of magical categories governs student access, house point allocation, and the Great Hall ledger. Ensure all changes are verified by the Deputy Headmistress.</p>
                </div>
                <button class="flex items-center gap-2 border border-[#543b43] hover:border-[#b99da6] text-[#b99da6] hover:text-white px-6 py-3 rounded-lg font-medium transition-all">
                    <span class="material-symbols-outlined">help</span>
                    Archive Rules
                </button>
            </div>
        </div>
    </div>
</main>