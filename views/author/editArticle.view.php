    <link href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <main class="flex flex-1 flex-col overflow-y-auto bg-background-dark">
        <header class="sticky top-0 z-10 flex h-16 w-full items-center justify-between border-b border-surface-border bg-background-dark/80 px-6 backdrop-blur-md transition-all">
            <div class="flex items-center gap-4 lg:hidden">
                <button class="text-text-muted hover:text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
            <div class="hidden items-center gap-2 lg:flex">
                <span class="material-symbols-outlined text-primary">flight</span>
                <h2 class="text-lg font-bold tracking-tight text-white">The Daily Oracle <span class="text-text-muted font-normal text-sm ml-2">/ Inscribe New Manuscript</span></h2>
            </div>
            <div class="flex flex-1 justify-end gap-6">
                <div class="relative hidden max-w-md flex-1 md:flex">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-muted">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input class="block w-full rounded-lg border-0 bg-surface-dark py-2 pl-10 pr-4 text-white placeholder-text-muted focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6" placeholder="Search the archives..." type="text" />
                </div>
                <button class="flex items-center justify-center rounded-full bg-surface-dark p-2 text-text-muted hover:text-white">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
            </div>
        </header>
        <div class="flex flex-1 flex-col gap-8 p-6 md:px-12 md:py-8 lg:px-16 lg:py-10 max-w-7xl mx-auto w-full">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-1">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-white">
                        Inscribe New Manuscript
                    </h1>
                    <p class="text-base text-text-muted">
                        Draft your latest magical discovery for the daily news.
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <button class="px-4 py-2 text-sm font-medium text-text-muted hover:text-white transition-colors">
                        Save as Draft
                    </button>
                </div>
            </div>
            <form class="space-y-6" action="/author/article/update" method="POST" enctype="multipart/form-data" id="article-form">
                <input type="hidden" name="content" id="content" value="<?= $article->getContent() ?>" />
                <input type="hidden" name="id" value="<?= $article->getId() ?>" />
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                    <div class="lg:col-span-2 space-y-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold uppercase tracking-widest text-text-muted" for="scroll-title">Scroll Title</label>
                            <input class="w-full bg-surface-dark border-surface-border text-white text-xl md:text-2xl font-display placeholder-text-muted/30 focus:ring-primary focus:border-primary rounded-xl py-4 px-6" id="scroll-title" placeholder="e.g. The Secrets of Transfiguration Revealed..." type="text" name="title" value="<?= $article->getTitle() ?>"/>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold uppercase tracking-widest text-text-muted">Magical Content</label>
                            <div id="editor"></div>
                        </div>
                        <button class="group relative inline-flex items-center gap-2 overflow-hidden rounded-lg bg-primary px-6 py-3 font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-red-700 hover:shadow-primary/50 focus:outline-none" type="submit">
                            <span class="material-symbols-outlined text-[20px]">auto_fix_high</span>
                            <span>Edit Article</span>
                            <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-transform duration-700 group-hover:animate-[shimmer_1.5s_infinite]"></div>
                        </button>
                    </div>
                    <div class="space-y-6">
                        <div class="rounded-xl border border-surface-border bg-surface-dark p-6 space-y-6">
                            <h3 class="text-sm font-bold uppercase tracking-widest text-primary">Manuscript Properties</h3>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-text-muted" for="department">Categories</label>
                                <select name="categories[]" class="flex w-full min-h-[50px] flex-wrap items-center gap-2 rounded-xl border border-[#cfdfd0] bg-white dark:bg-[#253528] dark:border-[#2a382d] p-2 pr-10 shadow-sm focus-within:border-primary focus-within:ring-1 focus-within:ring-primary" id="categories" multiple>
                                 
                                <?php foreach ($categories as $category): ?>
                                      <?php $selected = in_array($category->getId(), array_column($articleCategories, 'category_id')) ? 'selected' : ''; ?> 
                                        <option value="<?= $category->getId() ?>" <?= $selected ?>><?= $category->getName() ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-text-muted">Cover Illustration</label>
                                <div class="group relative h-40 w-full overflow-hidden rounded-lg border-2 border-dashed border-surface-border flex flex-col items-center justify-center transition-colors hover:border-primary bg-[#1a0b0e]">
                                    <span class="material-symbols-outlined text-4xl text-surface-border group-hover:text-primary mb-2">add_photo_alternate</span>
                                    <p class="text-xs text-text-muted">Click to summon an image</p>
                                    <input class="absolute inset-0 opacity-0 cursor-pointer" type="file" name="cover" />
                                </div>
                            </div>
                        </div>
                        <div class="rounded-xl border border-yellow-500/20 bg-yellow-500/5 p-4 flex gap-3">
                            <span class="material-symbols-outlined text-yellow-500">lightbulb</span>
                            <div class="text-xs text-yellow-500/80">
                                <p class="font-bold mb-1">Writer's Tip</p>
                                <p>Ensure your manuscript doesn't contain any forbidden curses or the Ministry might redact it!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    [{
                        header: [1, 2, false]
                    }],
                    [{
                        list: 'ordered'
                    }, {
                        list: 'bullet'
                    }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });

        new TomSelect('#categories', {
            plugins: ['remove_button'],
            placeholder: 'Add category...',
            create: true
        });

            quill.root.innerHTML =    document.getElementById('content').value;    

        document.querySelector('#article-form').addEventListener('submit', () => {
            document.getElementById('content').value = quill.root.innerHTML;
        });
    </script>