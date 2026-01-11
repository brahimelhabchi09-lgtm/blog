<main class="flex-1 flex items-center justify-center py-20 px-4">
    <div class="max-w-[700px] w-full parchment-scroll p-12 md:p-20 flex flex-col items-center">
        <div class="text-center mb-12">
            <span class="font-handwritten text-4xl text-burgundy block mb-2">The Registry of Seekers</span>
            <h2 class="text-4xl font-display text-forest-green tracking-tight mb-4 uppercase">Enrollment Ledger</h2>
            <div class="flex items-center justify-center gap-4">
                <div class="h-[2px] w-12 bg-forest-green/20"></div>
                <span class="material-symbols-outlined text-burgundy">ink_pen</span>
                <div class="h-[2px] w-12 bg-forest-green/20"></div>
            </div>
        </div>
        <form class="w-full space-y-8" action="/register" method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col gap-1">
                    <label class="font-display text-xs uppercase tracking-widest text-burgundy/80 px-1">First Name</label>
                    <input class="input-ink w-full text-xl py-2 px-1 focus:outline-none" name="firstName" placeholder="Garrick" required="" type="text" />
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-display text-xs uppercase tracking-widest text-burgundy/80 px-1">Last Name</label>
                    <input class="input-ink w-full text-xl py-2 px-1 focus:outline-none" name="lastName" placeholder="Ollivander" required="" type="text" />
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="font-display text-xs uppercase tracking-widest text-burgundy/80 px-1">Magical Correspondence (Email)</label>
                <input class="input-ink w-full text-xl py-2 px-1 focus:outline-none" name="email" placeholder="owl.post@ministry.magic" required="" type="email" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="font-display text-xs uppercase tracking-widest text-burgundy/80 px-1">Secret Invocation (Password)</label>
                <input class="input-ink w-full text-xl py-2 px-1 focus:outline-none" name="password" placeholder="••••••••" required="" type="password" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="font-display text-xs uppercase tracking-widest text-burgundy/80 px-1">Secret Invocation (Confirm)</label>
                <input class="input-ink w-full text-xl py-2 px-1 focus:outline-none" name="confirm_password" placeholder="••••••••" required="" type="password" />
            </div>
            <div class="pt-8 text-center">
                <button class="w-full md:w-auto min-w-[280px] h-14 bg-gold text-background-dark font-display text-lg tracking-[0.2em] uppercase magical-glow border-2 border-primary/40 relative group overflow-hidden" type="submit">
                    <span class="relative z-10">Register My Soul</span>
                    <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                </button>
                <p class="mt-6 font-serif italic text-sm text-forest-green/60">
                    By signing, you agree to the <a class="underline hover:text-burgundy transition-colors" href="#">Edicts of Sorcery</a>.
                </p>
            </div>
        </form>
        <div class="mt-16 opacity-80 hover:scale-110 transition-transform cursor-help">
            <img alt="wax seal" class="w-20 h-20 drop-shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU9Hm99QzfpMyTe_-WTLEeE36GjJYfykTpTKxSJTUIVgSXCyigm4ZivUR5gXScNV9DHlaUbG8ZzxC8_shh93y03aZ4Mj84XapLwvlNvh1JIuLKDzFPZwu-Mi1jRIfU-Kq0E-KmGVl0T7RqgZXb5_d6ZQWrTgcAetAzlmIuaqbob6C3YPeYEo5MwvbwiVwEl14ssTpSS7wo-5C0VT_IlVPBPjdApL6RLViSBBddi5PhrvIw9A6ntYlkQeKSI2sy5vV0aUzH7iO8tUiQ" />
        </div>
    </div>
</main>