<!-- Mobile Menu Button -->
<button id="mobile-menu-btn" class="fixed top-4 right-4 z-50 lg:hidden bg-gray-900/80 backdrop-blur-lg border border-gray-700 rounded-xl p-3 text-gray-300 hover:text-white transition-all duration-300">
    <x-heroicon-o-bars-4 class="w-6 h-6" />
</button>

<!-- Navigation -->
<nav class="fixed top-0 left-1/2 -translate-x-1/2 mt-4 z-50 w-full max-w-7xl px-4">
    <div class="backdrop-blur-xl bg-gradient-to-r from-gray-900/90 via-gray-800/85 to-gray-900/90 border border-gray-700/50 rounded-2xl shadow-2xl shadow-black/25 transition-all duration-500 hover:shadow-3xl hover:shadow-black/30 hover:border-gray-600/60">
        <!-- Desktop Navigation -->
        <div class="hidden lg:flex px-8 py-5 items-center justify-between relative">
            <!-- Floating hover indicator untuk seluruh navbar -->
            <div id="hover-indicator" class="absolute opacity-0 pointer-events-none z-0"></div>
            
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-white via-gray-200 to-gray-300 bg-clip-text text-transparent hover:from-blue-200 hover:to-purple-200 transition-all duration-500 transform hover:scale-110 relative z-10">
                Modyan
            </a>

            <!-- Menu Items -->
            <div class="flex items-center space-x-5 relative z-10">
                <a href="{{ route('home') }}" class="nav-link group" data-nav="home">
                    <x-heroicon-o-home class="w-5 h-5 inline-block mr-1.5 transition-transform duration-200 group-hover:scale-105" />
                    <span>Home</span>
                </a>
                <a href="#" class="nav-link group" data-nav="journal">
                    <x-heroicon-o-document-text class="w-5 h-5 inline-block mr-1.5 transition-transform duration-200 group-hover:scale-105" />
                    <span>Journal</span>
                </a>
                <a href="#" class="nav-link group" data-nav="analytics">
                    <x-heroicon-o-folder class="w-5 h-5 inline-block mr-1.5 transition-transform duration-200 group-hover:scale-105" />
                    <span>Analytics</span>
                </a>
                <a href="#" class="nav-link group" data-nav="settings">
                    <x-heroicon-o-cog class="w-5 h-5 inline-block mr-1.5 transition-transform duration-200 group-hover:scale-105" />
                    <span>Settings</span>
                </a>
            </div>

            <!-- Auth Section -->
            <div class="flex items-center space-x-4 relative z-10">
                @auth
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-medium">{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="nav-link group" data-nav="logout">
                                <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5 inline-block mr-2 transition-transform duration-300 group-hover:scale-110" />
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="nav-link group" data-nav="login">
                        <x-heroicon-o-arrow-left-on-rectangle class="w-5 h-5 inline-block mr-2 transition-transform duration-300 group-hover:scale-110" />
                        <span>Login</span>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link register-btn group" data-nav="register">
                            <x-heroicon-o-user-plus class="w-5 h-5 inline-block mr-2 transition-transform duration-300 group-hover:scale-110" />
                            <span>Register</span>
                        </a>
                    @endif
                @endauth
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden">
            <div class="px-6 py-4 border-b border-gray-700/50">
                <a href="{{ route('home') }}" class="text-xl font-bold bg-gradient-to-r from-white via-gray-200 to-gray-300 bg-clip-text text-transparent">
                    Modyan
                </a>
            </div>
            <div class="px-6 py-4 space-y-4">
                <a href="{{ route('home') }}" class="mobile-nav-link">
                    <x-heroicon-o-home class="w-5 h-5" />
                    <span>Home</span>
                </a>
                <a href="#" class="mobile-nav-link">
                    <x-heroicon-o-document-text class="w-5 h-5" />
                    <span>Journal</span>
                </a>
                <a href="#" class="mobile-nav-link">
                    <x-heroicon-o-folder class="w-5 h-5" />
                    <span>Analytics</span>
                </a>
                <a href="#" class="mobile-nav-link">
                    <x-heroicon-o-cog class="w-5 h-5" />
                    <span>Settings</span>
                </a>
                
                <div class="border-t border-gray-700/50 pt-4 mt-4">
                    @auth
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-medium">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                            <span class="text-gray-300">{{ Auth::user()->name }}</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="mobile-nav-link w-full text-left">
                                <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5" />
                                <span>Logout</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="mobile-nav-link">
                            <x-heroicon-o-arrow-left-on-rectangle class="w-5 h-5" />
                            <span>Login</span>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mobile-nav-link">
                                <x-heroicon-o-user-plus class="w-5 h-5" />
                                <span>Register</span>
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
/* Navigation Links - improved design with exact measurements */
.nav-link {
    @apply text-gray-300 hover:text-white transition-colors duration-200 relative px-3 py-2 rounded-md;
    @apply z-10;
}

.nav-link:hover {
    @apply text-white;
}

/* Hover Indicator - Professional UX standards */
#hover-indicator {
    transition: all 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: absolute;
    z-index: 1;
    border-radius: 0.75rem; /* lebih rounded */
    background: rgba(59, 130, 246, 0.2); /* lebih terang */
    border: 1px solid rgba(59, 130, 246, 0.4);
    box-shadow: 
        0 0 25px rgba(59, 130, 246, 0.3),
        0 0 50px rgba(59, 130, 246, 0.15),
        inset 0 0 0 1px rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

/* Ukuran yang lebih besar dengan padding 8px di semua sisi */
#hover-indicator::before {
    display: none; /* hilangkan pseudo element yang bikin sempit */
}

#hover-indicator:hover::before {
    opacity: 0.3;
    transform: scale(0.88);
}

/* Remove old hover effects */
.nav-link::before,
.nav-link::after {
    display: none;
}

/* Auth Buttons - gunakan nav-link styling yang sama */
.auth-btn {
    @apply text-gray-300 hover:text-white transition-all duration-300 px-4 py-2 rounded-lg;
    @apply transform hover:scale-105 z-10;
}

.register-btn {
    @apply px-6 py-3 bg-gradient-to-r from-blue-600 via-blue-500 to-purple-500 rounded-xl text-white font-medium;
    @apply hover:from-blue-500 hover:to-purple-400 hover:shadow-2xl hover:shadow-blue-500/25;
    @apply transform hover:scale-105 transition-all duration-300;
    @apply border border-blue-400/20 hover:border-blue-300/40;
}

/* Mobile Navigation */
.mobile-nav-link {
    @apply flex items-center space-x-3 text-gray-300 hover:text-white py-3 px-4 rounded-lg;
    @apply hover:bg-gray-800/50 transition-all duration-300 transform hover:translate-x-2;
}

/* Mobile Menu Animation */
#mobile-menu {
    transform: translateY(-10px);
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

#mobile-menu.show {
    transform: translateY(0);
    opacity: 1;
}

/* Glassmorphism Effect */
nav > div {
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Responsive improvements */
@media (max-width: 1024px) {
    .nav-link span {
        @apply hidden sm:inline;
    }
}

/* Enhanced shadow effects */
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.5);
}

/* Button hover animations */
button, a {
    @apply transition-all duration-300 ease-in-out;
}

button:active, a:active {
    @apply scale-95;
}

/* Gradient text animation */
@keyframes gradient-shift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.bg-gradient-to-r {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileMenuBtn.querySelector('svg');
    
    let isMenuOpen = false;
    
    mobileMenuBtn.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.classList.add('show');
            }, 10);
            
            // Rotate icon
            menuIcon.style.transform = 'rotate(90deg)';
        } else {
            mobileMenu.classList.remove('show');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
            
            // Reset icon
            menuIcon.style.transform = 'rotate(0deg)';
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenuBtn.contains(event.target) && !mobileMenu.contains(event.target) && isMenuOpen) {
            isMenuOpen = false;
            mobileMenu.classList.remove('show');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
            menuIcon.style.transform = 'rotate(0deg)';
        }
    });
    
    // Close menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024 && isMenuOpen) {
            isMenuOpen = false;
            mobileMenu.classList.remove('show');
            mobileMenu.classList.add('hidden');
            menuIcon.style.transform = 'rotate(0deg)';
        }
    });

    // Advanced hover indicator functionality
    const desktopNav = document.querySelector('.hidden.lg\\:flex');
    const hoverIndicator = document.getElementById('hover-indicator');
    const navLinks = document.querySelectorAll('.nav-link[data-nav]');
    
    let currentHoveredLink = null;
    let indicatorTrail = [];
    const maxTrailLength = 3;

    // Handle mouse enter on nav links
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            currentHoveredLink = this;
            animateToLink(this);
        });
    });

    // Handle mouse leave dari seluruh navbar
    if (desktopNav) {
        desktopNav.addEventListener('mouseleave', function() {
            currentHoveredLink = null;
            setTimeout(() => {
                if (!currentHoveredLink) {
                    fadeOutTrail();
                }
            }, 100);
        });
    }

    function animateToLink(targetLink) {
        if (!targetLink || !desktopNav) return;
        
        const linkRect = targetLink.getBoundingClientRect();
        const navRect = desktopNav.getBoundingClientRect();
        
        // Padding yang lebih besar: 8px di semua sisi
        const padding = 8;
        const targetX = linkRect.left - navRect.left - padding;
        const targetY = linkRect.top - navRect.top - padding;
        const targetWidth = linkRect.width + (padding * 2);
        const targetHeight = linkRect.height + (padding * 2);
        
        // Update indicator dengan ukuran yang lebih besar
        hoverIndicator.style.opacity = '1';
        hoverIndicator.style.left = `${targetX}px`;
        hoverIndicator.style.top = `${targetY}px`;
        hoverIndicator.style.width = `${targetWidth}px`;
        hoverIndicator.style.height = `${targetHeight}px`;
        hoverIndicator.style.transform = 'scale(1)';
        
        // Efek visual yang lebih menonjol
        hoverIndicator.style.animation = 'trail-pulse 0.8s ease-out';
    }

    function fadeOutTrail() {
        hoverIndicator.style.transform = 'scale(0.95)';
        hoverIndicator.style.opacity = '0';
    }

    // Tambahkan CSS animation untuk pulse effect
    const style = document.createElement('style');
    style.textContent = `
        @keyframes trail-pulse {
            0% { 
                box-shadow: 
                    0 0 20px rgba(59, 130, 246, 0.25),
                    0 0 40px rgba(59, 130, 246, 0.15),
                    inset 0 0 0 1px rgba(255, 255, 255, 0.1);
            }
            50% { 
                box-shadow: 
                    0 0 30px rgba(59, 130, 246, 0.4),
                    0 0 60px rgba(59, 130, 246, 0.25),
                    inset 0 0 0 1px rgba(255, 255, 255, 0.15);
            }
            100% { 
                box-shadow: 
                    0 0 20px rgba(59, 130, 246, 0.25),
                    0 0 40px rgba(59, 130, 246, 0.15),
                    inset 0 0 0 1px rgba(255, 255, 255, 0.1);
            }
        }
    `;
    document.head.appendChild(style);
});
</script>