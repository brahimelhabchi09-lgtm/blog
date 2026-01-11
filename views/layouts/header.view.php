<header class="sticky top-0 z-50 bg-[#1e1c15] dark:bg-[#181711] gold-border-bottom">
    <div class="px-4 md:px-10 py-3 flex items-center justify-between max-w-[1400px] mx-auto w-full">
        <div class="flex items-center gap-4 text-white">
            <div class="size-8 text-primary">
                <span class="material-symbols-outlined text-3xl">castle</span>
            </div>
            <h2 class="text-white text-xl font-bold tracking-tight">Hogwarts Intranet</h2>
        </div>
        <nav class="hidden md:flex items-center gap-8">
            <a class="text-primary text-base font-medium hover:text-white transition-colors border-b-2 border-primary pb-0.5" href="/">Great Hall</a>
           <?php if (isset($_SESSION['user_id'])): ?>
            <form action="/logout" method="post" class="inline">
            <button class="text-[#bab59c] text-base font-medium hover:text-white transition-colors hover:border-b-2 hover:border-primary/50 pb-0.5">logout</button>
        </form>
              <?php else: ?>
            <a class="text-[#bab59c] text-base font-medium hover:text-white transition-colors hover:border-b-2 hover:border-primary/50 pb-0.5" href="/login">login</a>
            <a class="text-[#bab59c] text-base font-medium hover:text-white transition-colors hover:border-b-2 hover:border-primary/50 pb-0.5" href="/register">register</a>
            <?php endif; ?>
                
        </nav>
        <div class="flex items-center gap-3">
            <button class="flex items-center justify-center size-10 rounded-full bg-[#393628] hover:bg-[#4a4634] text-white transition-colors">
                <span class="material-symbols-outlined text-[20px]">notifications</span>
            </button>
            <div class="relative bg-center bg-no-repeat bg-cover rounded-full size-10 border border-primary/30" data-alt="Wizard portrait avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC2GsHxd42ZHIBAPkVRfJ9J9Q3Nq0p-K0ciqy40dCFt5jemB7cE68YjhkmshoaegivUbDA-pBk-OPrAuIDyx4afkrOZxL4BMpLtR1fNgiZtq_9oNYWgOJ8mD9oUqSvpXvQGCefBjG7xbIGM1UUkXlDIQAdt5W6KpGzFPG5j3sOlCUK8C3gW4Nhm25ljV2zqlQgpHMfG8_KmwxUb8pxoegCt0ZjeZvEfckyFLyF5sVpePc73z8XdUzCRqaeibNqGxcZl1flUOq2bE41L");'>
                <div class="absolute bottom-0 right-0 size-3 bg-green-500 rounded-full border-2 border-[#181711]"></div>
            </div>
        </div>
    </div>
</header>