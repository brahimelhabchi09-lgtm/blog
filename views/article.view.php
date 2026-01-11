<!-- Main Content Layout -->
<main class="flex-1 flex justify-center py-6 sm:py-10 px-4 sm:px-6">
    <div class="flex flex-col max-w-[800px] w-full gap-8">
        <!-- Hero Image -->
        <div class="w-full relative group">
            <div class="w-full bg-center bg-no-repeat bg-cover rounded-xl min-h-[300px] sm:min-h-[400px] shadow-2xl border border-[#393628]" data-alt="Glowing moonstones on a dark wooden table with potion ingredients" style='background-image: url("<?= $article->getImageUrl() ?>");'>
                <div class="absolute inset-0 bg-gradient-to-t from-[#181711] via-transparent to-transparent opacity-90 rounded-xl"></div>
                <!-- Floating Category Badge -->
                <div class="absolute top-4 right-4 bg-emerald-dark/90 backdrop-blur-sm border border-emerald-900/50 px-3 py-1 rounded-full shadow-lg">
                    <span class="text-emerald-100 text-xs font-bold tracking-wider uppercase"><?= $categories[0]->getName() ?></span>
                </div>
            </div>
        </div>
        <!-- Article Header & Meta -->
        <div class="flex flex-col gap-6 -mt-20 relative z-10 px-2">
            <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-black leading-[1.1] tracking-[-0.02em] drop-shadow-lg">
                <?= $article->getTitle() ?>
            </h1>
            <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#393628] pb-6">
                <div class="flex items-center gap-4">
                    <div class="bg-center bg-no-repeat bg-cover rounded-full size-12 border-2 border-[#393628]" data-alt="Portrait of Albus P., an elderly wizard with a beard" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBshjsBSRAvhgNeDpf5FEwnkY-YNOYdsMWhXtm930FxVpzQlEZk0H8CKkI1tlnG9WOkUvdkqGS_GAkmabDfwW1mn1e3hlHKs8YEtHdG2-oqCntsTyCYPEnmrtH-9bLDWG-6NH3KH4BUeBz2eSJQsaWy4UjK7GrfeIn2TJcyxo9L6zPJJ5Fzp3KEVTfNvZH_p8_PR_95sXlkmCypOJJ2002YQSW1IlRQ1rRXxWrbXlBqBof9i-BZa8jiv9ZG9XpLMVf-X5nWDdgH4t76");'></div>
                    <div class="flex flex-col">
                        <span class="text-white text-lg font-bold leading-tight"> <?= $author->getName() ?></span>
                        <span class="text-primary text-sm font-medium">Author</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 text-[#bab59c] bg-[#24221a] px-3 py-1.5 rounded-lg border border-[#393628]">
                    <span class="material-symbols-outlined text-lg">calendar_today</span>
                    <span class="text-sm"><?= $article->getPublishedDate() ?></span>
                </div>
            </div>
        </div>
        <!-- Article Body -->
        <article class="text-[#e2e0d3] text-lg sm:text-xl leading-relaxed font-normal space-y-6">
            <p class="drop-cap">
                <?= $article->getContent() ?>
            </p>

        </article>
        <!-- Tags & Interactions -->
        <?php if (isset($_SESSION['user_id'])): ?>
            <div class="flex flex-col gap-8 border-t border-[#393628] pt-8">
                <!-- Categories -->
                <div class="flex flex-wrap gap-2">
                    <a class="px-4 py-1.5 rounded-full bg-[#24221a] border border-[#393628] hover:border-primary text-[#bab59c] hover:text-white transition-colors text-sm font-medium" href="#">Ingredients</a>
                    <a class="px-4 py-1.5 rounded-full bg-[#24221a] border border-[#393628] hover:border-primary text-[#bab59c] hover:text-white transition-colors text-sm font-medium" href="#">Advanced Potions</a>
                    <a class="px-4 py-1.5 rounded-full bg-[#24221a] border border-[#393628] hover:border-primary text-[#bab59c] hover:text-white transition-colors text-sm font-medium" href="#">Year 5</a>
                </div>
                <!-- Action Bar -->
                <div class="flex flex-wrap items-center justify-between p-4 bg-[#24221a] rounded-xl border border-[#393628] shadow-inner">
                    <div class="flex items-center gap-6">
                        <button class="flex items-center gap-2 text-[#bab59c] hover:text-primary transition-all group">
                            <span class="material-symbols-outlined group-hover:scale-110 transition-transform">auto_fix_high</span>
                            <span class="font-bold text-lg">42</span>
                            <span class="text-xs uppercase tracking-wide opacity-70">Wands Raised</span>
                        </button>
                        <button class="flex items-center gap-2 text-[#bab59c] hover:text-[#f4d125] transition-all group">
                            <span class="material-symbols-outlined group-hover:scale-110 transition-transform">star</span>
                            <span class="font-bold text-lg">12</span>
                            <span class="text-xs uppercase tracking-wide opacity-70">Saved</span>
                        </button>
                    </div>
                    <?php if ($isLiked): ?>
                        <form action="/unlike" method="POST" class="inline">
                            <input type="hidden" name="article_id" value="<?= $article->getId() ?>">
                            <button class="flex items-center gap-2 text-[#f4d125] hover:text-white transition-colors" type="submit">
                                <span class="material-symbols-outlined">favorite</span>
                                <span class="text-sm font-medium"><?= $likeCount ?> Likes</span>
                            </button>
                        </form>
                    <?php else: ?>
                        <form action="/like" method="POST" class="inline">
                            <input type="hidden" name="article_id" value="<?= $article->getId() ?>">
                            <button class="flex items-center gap-2 text-[#bab59c] hover:text-white transition-colors" type="submit">
                                <span class="material-symbols-outlined">favorite_border</span>
                                <span class="text-sm font-medium"><?= $likeCount ?> Likes</span>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Journal Comments Section -->
            <div class="mt-4">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">edit_note</span>
                        Scribbles &amp; Notes
                    </h3>
                    <span class="text-[#bab59c] text-sm"><?= $commentCount ?> Comments</span>
                </div>
                <div class="bg-[#24221a] rounded-lg border border-[#393628] overflow-hidden">
                    <!-- Add Comment Input -->
                    <form id="comment-form" action="/comments/store" method="POST" class="p-6 bg-[#1f1d15]">
                        <input type="hidden" name="article_id" value="<?= $article->getId() ?>">
                        <div class="flex gap-4">
                            <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border border-[#393628] shrink-0 opacity-50" data-alt="Silhouette of current user" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAC6eu74SRPC_rf5Kru1opQJs1ylWQe5k5mfCSkHCCgK8kfMpdV0Z0JcLIdnLxKUiXAx5ppRxpnaGoV0XRg-6TLbUJPb7fHWES4zumr4heR3yFF6ffqGrSctKk5ZjavOh11asnaNyPICR4RMp8WZoI_updLAtlu9dlaqGTfzoXX3WqZh7g18qBD-dnoG8zewMeSX1X_1RFVWlMLw_r2HDyAlFTSXkVkpqjkwNfQ9BeMjMWtz2IhpWCV5QF6VgklkrF3bQyQIdgNpHTu");'></div>
                            <div class="flex-1">
                                <textarea class="w-full bg-[#181711] border border-[#393628] rounded-lg p-3 text-white placeholder-[#5c5740] focus:border-primary focus:ring-0 resize-none font-display" placeholder="Leave a note for the professor..." rows="3" name="body"></textarea>
                                <div class="flex justify-end mt-2">
                                    <button class="px-5 py-2 bg-primary/10 hover:bg-primary/20 text-primary border border-primary/30 rounded-lg text-sm font-bold transition-colors flex items-center gap-2" type="submit">

                                        <span class="material-symbols-outlined text-lg">flight</span>
                                        Scribble Note
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endif; ?>
        <?php foreach ($comments as $commentItem): ?>
            <div data-id="<?= $commentItem['comment']->getId() ?>" class="p-6 border-b border-[#393628] bg-[#2a281e]">
                <div class="flex gap-4">
                    <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border border-[#393628] shrink-0" data-alt="Portrait of Hermione G." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCD7hbJY2OVrkoTaUKcvL40rI8-aXkx-zpz_6Hj4T1JyHvRRcD8DTRWYWaySXMYSwZHllV4CT5Hv-hIadEtmNEvo6GiR5KMj-yilBSGALZo1bkFCmtoP2SV3D3X75ywvu0wb-xTZDWcT_kQfEzaSO8W6ZMM0doCL9s6vRRQSpFvtaCgPlXbWQ3BgZh4LTXq1zupdCckPw91PbzUnHOfqrhU3_MWxTVSkQVPHk5mglxwViNGrU98IHvmzdp8_vhsXVX566EVrMUodWzE");'></div>
                    <div class="flex flex-col gap-1 w-full">
                        <div class="flex justify-between items-baseline">
                            <span class="text-white font-bold text-base"><?= $commentItem['reader']->getName() ?></span>
                            <?php
                            $date = new DateTime($commentItem['comment']->getCreatedDate());
                            $now = new DateTime();
                            $interval = $now->diff($date);
                            if ($interval->d > 0) {
                                echo "<span class='text-[#5c5740] text-xs'>" . $interval->d . " days ago</span>";
                            } elseif ($interval->h > 0) {
                                echo "<span class='text-[#5c5740] text-xs'>" . $interval->h . " hours ago</span>";
                            } elseif ($interval->i > 0) {
                                echo "<span class='text-[#5c5740] text-xs'>" . $interval->i . " minutes ago</span>";
                            } else {
                                echo "<span class='text-[#5c5740] text-xs'>Just now</span>";
                            }
                            ?>
                        </div>
                        <p class="body text-[#bab59c] text-base font-serif italic">
                            <?= $commentItem['comment']->getBody() ?>
                        </p>
                    </div>
                    <?php if ($commentItem['comment']->getReaderId() == $_SESSION['user_id']) : ?>
                    <button class="text-[#b99da6] hover:text-white transition-colors" title="Manage Items" onclick="updateForm(<?= $commentItem['comment']->getId() ?>)">
                        <span class="material-symbols-outlined">settings_suggest</span>
                    </button>
                    <form action="/comments/delete" method="post" class="inline">
                        <input type="hidden" name="id" value="<?= $commentItem['comment']->getId() ?>">
                        <button type="submit" class="text-[#b99da6] hover:text-white transition-colors" title="Archive">
                            <span class="material-symbols-outlined">inventory_2</span>
                        </button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</main>
<script>
    function updateForm(id){
        const commentDiv = document.querySelector(`div[data-id='${id}']`);
        const commentBody = commentDiv.querySelector('.body').innerText;

        const form = document.getElementById('comment-form');
        form.scrollIntoView({ behavior: 'smooth' });

        const textarea = form.querySelector('textarea[name="body"]');
        textarea.value = commentBody;

        let hiddenInput = form.querySelector('input[name="comment_id"]');
        if (!hiddenInput) {
            hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'comment_id';
            form.appendChild(hiddenInput);
        }
        hiddenInput.value = id;

        form.action = '/comments/update';

        const submitButton = form.querySelector('button[type="submit"]');
        submitButton.innerHTML = '<span class="material-symbols-outlined text-lg">edit</span> Update Note';

    }
</script>
