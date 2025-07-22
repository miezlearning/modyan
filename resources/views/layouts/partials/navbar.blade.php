<nav class="fixed top-0 left-1/2 -translate-x-1/2 mt-4 z-50">
    <div class="backdrop-blur-lg bg-white/10 border border-white/20 rounded-2xl shadow-2xl shadow-black/10">
        <div class="px-6 py-4 flex items-center space-x-8">
            
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                MoodTracker
            </a>

            <!-- Menu Items -->
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" 
                   class="nav-link">
                    Lorem
                </a>
                
                <a href="#" 
                   class="nav-link">
                    Ipsum
                </a>
                
                <a href="#" 
                   class="nav-link">
                    Dolor
                </a>
                
                <a href="#" 
                   class="nav-link">
                    Sit Amet
                </a>
            </div>

            <!-- Auth Section -->
            <div class="flex items-center space-x-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" 
                                class="text-gray-200 hover:text-white transition-all duration-300 hover:scale-105">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" 
                       class="text-gray-200 hover:text-white transition-all duration-300 hover:scale-105">
                        Login
                    </a>
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="px-4 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-lg text-white text-sm font-medium hover:shadow-lg hover:shadow-indigo-500/25 transition-all duration-300">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>

<style>
.nav-link {
    @apply text-gray-200 hover:text-white transition-all duration-300 relative;
}

.nav-link::after {
    content: '';
    @apply absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-indigo-400 to-purple-400 transition-all duration-300;
}

.nav-link:hover::after {
    @apply w-full;
}
</style>