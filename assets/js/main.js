// Debounce function to limit the rate at which a function can fire
function debounce(func, wait) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}

// --- Service Worker Registration ---
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/assets/js/service-worker.js')
            .then((registration) => {
                console.log('Service Worker registered with scope:', registration.scope);
            })
            .catch((error) => {
                console.log('Service Worker registration failed:', error);
            });
    });
}

// --- Splash Screen ---
function hideSplashScreen() {
    const splashScreen = document.getElementById('splash-screen');
    if (splashScreen) {
        splashScreen.classList.add('fade-out');
        setTimeout(() => {
            splashScreen.style.display = 'none';
            const mainContent = document.getElementById('main-content');
            if (mainContent) {
                mainContent.style.display = 'block';
            }
        }, 500);
    }
}
window.addEventListener('load', () => {
    setTimeout(hideSplashScreen, 1500);
});

// Splash Screen Handler
class SplashScreen {
    constructor() {
        this.splashScreen = document.getElementById('splash-screen');
        this.mainContent = document.getElementById('main-content');
        this.minDisplayTime = 1000; // Minimum time to show splash screen (ms)
        this.startTime = Date.now();
        this.resourcesLoaded = false;

        this.init();
    }

    init() {
        // Show splash screen immediately
        this.splashScreen.classList.remove('hidden');

        // Listen for all content loaded
        window.addEventListener('load', () => {
            this.resourcesLoaded = true;
            this.tryHideSplash();
        });

        // Fallback: Hide splash after 5 seconds regardless
        setTimeout(() => this.hideSplash(), 5000);
    }

    tryHideSplash() {
        const elapsedTime = Date.now() - this.startTime;
        if (this.resourcesLoaded && elapsedTime >= this.minDisplayTime) {
            this.hideSplash();
        } else {
            const remainingTime = Math.max(0, this.minDisplayTime - elapsedTime);
            setTimeout(() => this.hideSplash(), remainingTime);
        }
    }

    hideSplash() {
        if (!this.splashScreen) return;

        // Add hidden class to splash screen
        this.splashScreen.classList.add('hidden');

        // Show main content
        if (this.mainContent) {
            this.mainContent.style.display = 'block';
            // Small delay to trigger fade in
            setTimeout(() => {
                this.mainContent.classList.add('visible');
            }, 50);
        }

        // Remove splash screen from DOM after animation
        setTimeout(() => {
            this.splashScreen.remove();
        }, 500);
    }
}

// Initialize splash screen
document.addEventListener('DOMContentLoaded', () => {
    const splash = new SplashScreen();
});

// --- Theme Switching ---
function setTheme(theme) {
    if (theme === 'auto') {
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        document.documentElement.setAttribute('data-bs-theme', systemPrefersDark ? 'dark' : 'light');
    } else {
        document.documentElement.setAttribute('data-bs-theme', theme);
    }
    updateThemeButtonUI(theme);
}

function updateThemeButtonUI(theme) {
    const themeIcon = document.querySelector('#themeDropdown i');
    const themeDropdown = document.querySelector('#themeDropdown');
    if (themeIcon) {
        themeIcon.className = 'bi';
        if (theme === 'auto') {
            themeIcon.classList.add('bi-circle-half');
            if (themeDropdown) themeDropdown.title = "Auto (System)";
        } else if (theme === 'light') {
            themeIcon.classList.add('bi-sun');
            if (themeDropdown) themeDropdown.title = "Light Mode";
        } else if (theme === 'dark') {
            themeIcon.classList.add('bi-moon');
            if (themeDropdown) themeDropdown.title = "Dark Mode";
        }
    }
}

// Set initial theme
let savedTheme = localStorage.getItem('theme') || 'auto';
setTheme(savedTheme);

// Listen for system theme changes
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    if (localStorage.getItem('theme') === 'auto') {
        setTheme(e.matches ? 'dark' : 'light');
    }
});

// Handle theme dropdown clicks with debounce
const themeButtons = document.querySelectorAll('[data-bs-theme-value]');
themeButtons.forEach(button => {
    button.addEventListener('click', debounce(function (e) {
        e.preventDefault();
        const theme = this.getAttribute('data-bs-theme-value');
        localStorage.setItem('theme', theme);
        setTheme(theme);
    }, 300));
});

// --- Content Protection ---
document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('contextmenu', event => event.preventDefault());
    document.addEventListener('copy', event => event.preventDefault());
    document.addEventListener('cut', event => event.preventDefault());
    document.addEventListener('paste', event => event.preventDefault());
});

// --- Offline Support ---
function updateOnlineStatus() {
    const offlinePage = document.getElementById('offline-page');
    const mainContent = document.getElementById('main-content');
    const splashScreen = document.getElementById('splash-screen');

    if (navigator.onLine) {
        if (offlinePage) offlinePage.style.display = 'none';
        if (mainContent && splashScreen && splashScreen.style.display === 'none') {
            mainContent.style.display = 'block';
        }
    } else {
        if (offlinePage) offlinePage.style.display = 'flex';
        if (mainContent) mainContent.style.display = 'none';
    }
}
window.addEventListener('online', updateOnlineStatus);
window.addEventListener('offline', updateOnlineStatus);
updateOnlineStatus();