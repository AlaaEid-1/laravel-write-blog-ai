<!-- Right Sidebar: Trending & Who to Follow -->
<aside class="hidden lg:block lg:col-span-3 space-y-12">

    <!-- Who to Follow -->
    <div class="space-y-6">
        <h3 class="font-ui-label text-ui-label uppercase tracking-widest text-secondary font-bold">{{ $title }}
        </h3>
        <div class="space-y-4">
            @foreach ($authors as $author)
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <img alt="User" class="w-10 h-10 rounded-full object-cover" src="{{ $author['avatar'] }}" />
                        <div>
                            <p class="font-ui-label text-ui-label font-bold text-on-surface">{{ $author['name'] }}</p>
                            <p class="font-metadata text-metadata text-secondary">{{ $author['username'] }}</p>
                        </div>
                    </div>
                    <button
                        class="px-3 py-1 border border-on-surface text-on-surface rounded-full font-metadata text-metadata font-bold hover:bg-on-surface hover:text-white transition-all">Follow</button>
                </div>
            @endforeach
            <a class="block font-ui-label text-ui-label text-primary font-bold hover:underline" href="#">View all
                recommendations</a>
        </div>
        <!-- Newsletter Sign Up -->
        {{-- <div class="p-6 bg-primary-container rounded-xl text-on-primary space-y-4">
<h3 class="font-headline-md text-[20px]">The Sunday Edition</h3>
<p class="font-metadata text-metadata text-on-primary-container">Join 40,000+ creators receiving our weekly digest on design, code, and intentional living.</p>
<div class="space-y-2">
<input class="w-full px-4 py-2 rounded bg-white/10 border border-white/20 text-white placeholder:text-white/60 focus:ring-1 focus:ring-white focus:outline-none" placeholder="email@example.com" type="email"/>
<button class="w-full py-2 bg-white text-primary font-ui-button text-ui-button rounded hover:bg-opacity-90 transition-all">Subscribe</button>
</div>
</div> --}}
</aside>
