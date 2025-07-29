// assets/js/main.js

// --- Service Worker Registration ---
// Check if service workers are supported
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
} else {
    console.log('Service Workers are not supported in this browser.');
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
        }, 500); // Match CSS transition duration
    }
}
// Use DOMContentLoaded for potentially faster hide, or window load for guaranteed asset load
// window.addEventListener('DOMContentLoaded', hideSplashScreen); // Faster
window.addEventListener('load', () => {
     // Show splash for a minimum time
     setTimeout(hideSplashScreen, 1500);
});


// --- Theme Switching ---
function setTheme(theme) {
    if (theme === 'auto') {
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        document.documentElement.setAttribute('data-bs-theme', systemPrefersDark ? 'dark' : 'light');
    } else {
        document.documentElement.setAttribute('data-bs-theme', theme);
    }
    // Update theme dropdown button icon/text if needed
    updateThemeButtonUI(theme);
}

function updateThemeButtonUI(theme) {
    const themeIcon = document.querySelector('#themeDropdown i');
    const themeDropdown = document.querySelector('#themeDropdown');
    if (themeIcon) {
        themeIcon.className = 'bi'; // Reset classes
        if (theme === 'auto') {
            themeIcon.classList.add('bi-circle-half');
            if(themeDropdown) themeDropdown.title = "Auto (System)";
        } else if (theme === 'light') {
            themeIcon.classList.add('bi-sun');
            if(themeDropdown) themeDropdown.title = "Light Mode";
        } else if (theme === 'dark') {
            themeIcon.classList.add('bi-moon');
            if(themeDropdown) themeDropdown.title = "Dark Mode";
        }
    }
}

// Set initial theme based on saved preference or system
let savedTheme = localStorage.getItem('theme');
let effectiveTheme = 'auto'; // Default effective theme

if (savedTheme) {
    effectiveTheme = savedTheme;
} else {
    // Determine initial effective theme if none saved
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        effectiveTheme = 'dark';
    } else {
        effectiveTheme = 'light';
    }
    localStorage.setItem('theme', 'auto'); // Explicitly save 'auto' if it was the initial state
}
// Apply the initial theme
setTheme(effectiveTheme === 'auto' ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light') : effectiveTheme);

// Listen for system theme changes if in auto mode
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    if (localStorage.getItem('theme') === 'auto') {
        setTheme(e.matches ? 'dark' : 'light');
    }
});

// Handle theme dropdown clicks
document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
    element.addEventListener('click', function (e) {
        e.preventDefault();
        const theme = this.getAttribute('data-bs-theme-value');
        localStorage.setItem('theme', theme);
        if (theme === 'auto') {
            setTheme(window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        } else {
            setTheme(theme);
        }
    });
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
        // Only show main content if splash is gone
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
// Check initial status
updateOnlineStatus();