// @/assets/js/main.js

// --- Service Worker Registration ---
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        const swPath = './assets/js/service-worker.js'; // Relative to site root
        navigator.serviceWorker.register(swPath)
            .then((registration) => {
                console.log('✅ Service Worker registered:', registration.scope);
            })
            .catch((error) => {
                console.warn('⚠️ Service Worker registration failed:', error);
            });
    });
} else {
    console.log('ℹ️ Service Workers not supported in this browser.');
}

// --- Splash Screen Control ---
function hideSplashScreen() {
    const splash = document.getElementById('splash-screen');
    const mainContent = document.getElementById('main-content');
    const offlinePage = document.getElementById('offline-page');

    if (!splash) return;

    // Only hide splash if we're online or ready to show offline page
    if (navigator.onLine || offlinePage?.style.display !== 'none') {
        splash.classList.add('fade-out');
        setTimeout(() => {
            splash.style.display = 'none';
            if (mainContent && navigator.onLine) {
                mainContent.classList.remove('d-none');
            }
        }, 500); // Match CSS transition duration
    }
}

// Show splash for at least 1.5s, then hide when page is ready
window.addEventListener('load', () => {
    setTimeout(hideSplashScreen, 1500);
});

// --- Theme Switching Logic ---
function setTheme(theme) {
    let appliedTheme = theme;

    if (theme === 'auto') {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        appliedTheme = prefersDark ? 'dark' : 'light';
    }

    document.documentElement.setAttribute('data-bs-theme', appliedTheme);

    // Update dropdown UI
    const themeIcon = document.querySelector('#themeDropdown i.bi');
    const themeBtn = document.querySelector('#themeDropdown');

    if (themeIcon) {
        themeIcon.className = 'bi'; // Clear old icons
        if (appliedTheme === 'light') {
            themeIcon.classList.add('bi-sun');
            themeBtn.title = TXT_THEME_LIGHT;
        } else if (appliedTheme === 'dark') {
            themeIcon.classList.add('bi-moon');
            themeBtn.title = TXT_THEME_DARK;
        } else {
            themeIcon.classList.add('bi-circle-half');
            themeBtn.title = TXT_THEME_AUTO;
        }
    }
}

// Initialize theme from localStorage or system preference
document.addEventListener('DOMContentLoaded', () => {
    let savedTheme = localStorage.getItem('theme') || 'auto';
    setTheme(savedTheme);

    // Add click listeners to theme dropdown items
    document.querySelectorAll('[data-bs-theme-value]').forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            const theme = e.target.getAttribute('data-bs-theme-value');
            localStorage.setItem('theme', theme);
            setTheme(theme);
        });
    });
});

// Listen for system theme changes (only if in "auto" mode)
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    if (localStorage.getItem('theme') === 'auto') {
        const newTheme = e.matches ? 'dark' : 'light';
        document.documentElement.setAttribute('data-bs-theme', newTheme);
    }
});

// --- Offline Support ---
function updateOnlineStatus() {
    const offlinePage = document.getElementById('offline-page');
    const mainContent = document.getElementById('main-content');

    if (!offlinePage) return;

    if (navigator.onLine) {
        offlinePage.classList.add('d-none');
        offlinePage.classList.remove('flex');
        if (mainContent && document.getElementById('splash-screen')?.style.display === 'none') {
            mainContent.classList.remove('d-none');
        }
    } else {
        mainContent?.classList.add('d-none');
        offlinePage.classList.remove('d-none');
        offlinePage.classList.add('flex');
    }
}

window.addEventListener('online', updateOnlineStatus);
window.addEventListener('offline', updateOnlineStatus);

// Initial check
document.addEventListener('DOMContentLoaded', () => {
    updateOnlineStatus();
});

// --- Content Protection (Optional - Use with Caution) ---
// ⚠️ Note: This is not foolproof and may frustrate users.
/*
document.addEventListener('contextmenu', (e) => e.preventDefault());
document.addEventListener('copy', (e) => e.preventDefault());
document.addEventListener('cut', (e) => e.preventDefault());
document.addEventListener('paste', (e) => e.preventDefault());
*/