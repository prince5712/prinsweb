// @/assets/js/service-worker.js
// Service Worker for offline support, caching, and PWA functionality

const CACHE_NAME = 'prinsweb-cache-v1';
const urlsToCache = [
  '/', // Will be resolved via fetch event
  '/index.php',
  '/about.php',
  '/contact.php',
  '/assets/css/custom.css',
  '/assets/js/main.js',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
];

// Install Event: Cache core assets
self.addEventListener('install', (event) => {
  console.log('[Service Worker] Installing...');
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        console.log('[Service Worker] Caching core assets...');
        return cache.addAll(urlsToCache.map(url => {
          // Convert relative paths to absolute using current origin
          try {
            return new URL(url, self.location).href;
          } catch (e) {
            console.warn(`[Service Worker] Invalid URL skipped: ${url}`);
            return null;
          }
        }).filter(Boolean)) // Remove invalid URLs
        .then(() => {
          console.log('[Service Worker] All assets cached successfully.');
        })
        .catch((error) => {
          console.error('[Service Worker] Failed to cache one or more resources:', error);
        });
      })
  );
  // Ensure the service worker activates as soon as possible
  self.skipWaiting();
});

// Activate Event: Clean up old caches
self.addEventListener('activate', (event) => {
  const currentCaches = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (!currentCaches.includes(cacheName)) {
            console.log('[Service Worker] Deleting old cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    }).then(() => {
      console.log('[Service Worker] Claiming clients...');
      return self.clients.claim(); // Take control of all clients immediately
    })
  );
});

// Fetch Event: Serve from cache if offline
self.addEventListener('fetch', (event) => {
  const { request } = event;
  const url = new URL(request.url);

  // Only handle GET requests for same-origin or specific CDN resources
  if (request.method !== 'GET') {
    return; // Skip non-GET requests
  }

  // Check if request is for our site or allowed external CDNs
  const isOwnOrigin = url.origin === self.location.origin;
  const isCDNResource = [
    'cdn.jsdelivr.net'
  ].some(host => url.hostname.includes(host));

  if (!isOwnOrigin && !isCDNResource) {
    return; // Don't intercept third-party requests
  }

  event.respondWith(
    // First, try network (fresh content)
    fetch(request)
      .then((response) => {
        // If successful, clone and cache the response
        const responseToCache = response.clone();
        caches.open(CACHE_NAME)
          .then((cache) => {
            cache.put(request, responseToCache);
          })
          .catch((err) => {
            console.warn('[Service Worker] Failed to cache new resource:', err);
          });
        return response;
      })
      .catch(() => {
        // Network failed → try cache
        return caches.match(request)
          .then((cachedResponse) => {
            if (cachedResponse) {
              console.log(`[Service Worker] Serving from cache: ${request.url}`);
              return cachedResponse;
            }
            // Fallback: return a basic offline page if available
            if (request.mode === 'navigate') {
              return caches.match('/index.php') || new Response(
                '<h1>Offline</h1><p>No internet connection.</p>',
                { headers: { 'Content-Type': 'text/html' } }
              );
            }
          });
      })
  );
});