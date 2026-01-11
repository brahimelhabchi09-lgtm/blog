     <main class="flex-1 overflow-y-auto bg-background-dark p-4 md:p-8 scroll-smooth">
                <div class="mx-auto max-w-4xl flex flex-col gap-8">
                    <div class="flex flex-col gap-2 border-b border-[#39282e] pb-6">
                        <div class="flex items-center gap-2 text-primary mb-1">
                            <span class="material-symbols-outlined text-sm">arrow_back</span>
                            <a class="text-xs font-bold uppercase tracking-widest hover:underline" href="#">Back to Archive</a>
                        </div>
                        <h1 class="text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Edit Magical Category</h1>
                        <p class="text-[#b99da6] text-lg font-normal">Modify the essential properties and status of an existing registry entry.</p>
                    </div>
                    <div class="rounded-xl border border-[#543b43] bg-[#1a0b0f] shadow-2xl overflow-hidden">
                        <div class="bg-[#2a161d] px-6 py-4 border-b border-[#39282e]">
                            <h3 class="text-white font-bold flex items-center gap-2">
                                <span class="material-symbols-outlined text-gold">auto_fix_high</span>
                                Category Information: <span class="text-gold italic ml-1">Magical Subjects</span>
                            </h3>
                        </div>
                        <form class="p-8 flex flex-col gap-6" action="/admin/category/store" method="POST">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-[#b99da6] uppercase tracking-wider">Category Name</label>
                                    <div class="relative">
                                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#543b43]">menu_book</span>
                                        <input class="w-full bg-[#221016] border border-[#543b43] rounded-lg py-3 pl-10 pr-4 text-white focus:ring-primary focus:border-primary transition-all font-body" placeholder="Enter category name..." type="text" name="name" />
                                    </div>
                                    <p class="text-xs text-[#543b43] italic">Visible to all staff and student registries.</p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-[#b99da6] uppercase tracking-wider">Registry Description</label>
                                <textarea class="w-full bg-[#221016] border border-[#543b43] rounded-lg p-4 text-white focus:ring-primary focus:border-primary transition-all font-body" placeholder="Describe the purpose of this magical category..." name="description"></textarea>
                            </div>
                            <div class="flex items-center justify-between gap-4 mt-4 pt-6 border-t border-[#39282e]">
                                <button class="text-[#b99da6] hover:text-white font-bold transition-colors px-4 py-2" type="button">
                                    Cancel
                                </button>
                                <button class="pink-glow bg-primary hover:bg-[#b00c42] text-white px-8 py-3 rounded-lg font-bold flex items-center gap-2 transition-all transform hover:-translate-y-0.5 active:translate-y-0" type="submit">
                                    <span class="material-symbols-outlined">save</span>
                                    Update Registry Entry
                                </button>
                            </div>
                        </form>
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