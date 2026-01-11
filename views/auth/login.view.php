<!-- Main Content -->
<main class="relative z-10 flex-grow flex items-center justify-center p-4 sm:p-6 lg:p-8">
    <div class="w-full max-w-[1000px] flex flex-col md:flex-row bg-[#1c1a11] rounded-xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-[#393628]">
        <!-- Left Side: Visual/Welcome -->
        <div class="hidden md:flex md:w-5/12 relative flex-col justify-end p-8 bg-cover bg-center" data-alt="A mystical owl perching on a stack of ancient spellbooks" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%), url('https://lh3.googleusercontent.com/aida-public/AB6AXuDqAjv_K9nVyuF719RT1hTNauUDt8QDGqNhfenrrCWqmR6vad_a_kd0XLPu-pSJFdiZjZbWTFNQ-DMQ13WKZINsJ3igH2ikxjlHQSeC1KskbY19brc33CL-jwZTfWEP8IU7BYNCqidsczp_anSV8NCz1ClP8i-LDmM8r7JqBNge4XxIFZEs-_TVOEqbHvfoA2pySfetqUWEzLtqCyuUdXYJ6v0_SXonGTRhCoz2VLw2fSRkjMpAogI9UpriItrJyidaTaR1YBjqykwg');">
            <div class="relative z-10">
                <div class="w-12 h-1 bg-primary mb-6"></div>
                <h2 class="text-3xl font-bold leading-tight mb-3 text-white">Welcome Back, Apprentice</h2>
                <p class="text-white/80 font-medium text-lg italic">
                    "Knowledge is the most powerful spell of all."
                </p>
            </div>
        </div>
        <!-- Right Side: Login Form -->
        <div class="w-full md:w-7/12 p-8 sm:p-12 flex flex-col justify-center bg-[#1c1a11] relative">
            <!-- Decorative Corner -->
            <div class="absolute top-0 right-0 p-4 opacity-20 pointer-events-none">
                <span class="material-symbols-outlined text-6xl text-primary">auto_awesome</span>
            </div>
            <div class="mb-8">
                <h3 class="text-2xl font-bold text-white mb-2">Access the Archives</h3>
                <p class="text-white/50 text-base">Speak the password and enter.</p>
            </div>
            <form class="space-y-6" action="/login" method="POST">
                <!-- Wizarding ID -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-primary uppercase tracking-wider font-sans" for="wizard-id">
                        Wizarding ID (Email)
                    </label>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white/30 group-focus-within:text-primary transition-colors">
                            <span class="material-symbols-outlined">person</span>
                        </span>
                        <input class="w-full bg-[#2a271d] border border-[#393628] text-white placeholder-white/20 text-lg rounded-lg focus:ring-1 focus:ring-primary focus:border-primary block p-3 pl-10 transition-all duration-300 font-sans" id="wizard-id" placeholder="e.g. hpotter" type="email" name="email" />
                    </div>
                </div>
                <!-- Secret Incantation -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="block text-sm font-medium text-primary uppercase tracking-wider font-sans" for="password">
                            Secret Incantation (Password)
                        </label>
                        <a class="text-sm text-white/50 hover:text-primary italic hover:underline" href="#">Forgot your wand?</a>
                    </div>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-white/30 group-focus-within:text-primary transition-colors">
                            <span class="material-symbols-outlined">key</span>
                        </span>
                        <input class="w-full bg-[#2a271d] border border-[#393628] text-white placeholder-white/20 text-lg rounded-lg focus:ring-1 focus:ring-primary focus:border-primary block p-3 pl-10 transition-all duration-300 font-sans" id="password" placeholder="***********" type="password" name="password" />
                    </div>
                </div>
                <!-- Checkbox -->
                <div class="flex items-center" style="--checkbox-tick-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(24,23,17)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e');">
                    <input class="h-5 w-5 rounded border-[#54503b] bg-[#2a271d] text-primary focus:ring-0 focus:ring-offset-0 focus:border-primary cursor-pointer checked:bg-[image:--checkbox-tick-svg]" id="remember-me" type="checkbox" />
                    <label class="ml-3 block text-base text-white/80 cursor-pointer select-none" for="remember-me">
                        Keep me logged in on this crystal ball
                    </label>
                </div>
                <!-- Submit Button -->
                <button class="w-full group relative overflow-hidden rounded-lg bg-primary py-3.5 px-4 text-background-dark font-bold text-lg shadow-lg hover:bg-[#ffe045] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-[#1c1a11] transition-all duration-300" type="submit">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Open The Gates
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </span>
                </button>
                <div class="text-center pt-2">
                    <p class="text-white/40 text-sm">
                        Not an enrolled student?
                        <a class="text-primary hover:underline font-medium ml-1" href="#">Send an owl application</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="relative z-10 w-full py-6 text-center border-t border-[#393628]/30 bg-background-dark/80 backdrop-blur-sm">
    <p class="text-white/40 text-sm font-display italic">
        "Draco Dormiens Nunquam Titillandus"
    </p>
    <div class="flex justify-center gap-6 mt-3">
        <a class="text-xs text-white/30 hover:text-white transition-colors" href="#">Privacy Scroll</a>
        <a class="text-xs text-white/30 hover:text-white transition-colors" href="#">Terms of Magic</a>
    </div>
</footer>
</body>

</html>