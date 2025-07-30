// assets/js/service-worker.js

const CACHE_NAME = 'my-website-cache-v1';
const urlsToCache = [
  '/', // Cache the root (index.php)
  '/index.php',
  '/about.php',
  '/contact.php',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
  // Add other critical local assets (CSS, JS, images) if needed
  // e.g., '/assets/css/custom.css', '/assets/img/logo.png'
];

// Install the service worker - cache essential files
self.addEventListener('install', (event) => {
  console.log('Service Worker: Installing...');
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        console.log('Service Worker: Caching files');
        return cache.addAll(urlsToCache);
      })
      .catch((error) => {
        console.error('Service Worker: Failed to cache files during install', error);
      })
  );
  // Ensure the service worker waits for the install event to complete
  //self.skipWaiting(); // Optional: activate immediately
});

// Activate the service worker - clean up old caches
self.addEventListener('activate', (event) => {
  console.log('Service Worker: Activating...');
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (!cacheWhitelist.includes(cacheName)) {
            console.log('Service Worker: Deleting old cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
  // Claim clients for this service worker
  //return self.clients.claim(); // Optional: take control of pages immediately
});

// Fetch event - serve cached content when offline
self.addEventListener('fetch', (event) => {
  // Only handle GET requests for now
  if (event.request.method !== 'GET') {
    return;
  }

  event.respondWith(
    // Try to fetch from network first (cache-then-network strategy for dynamic content)
    // But fall back to cache if network fails
    fetch(event.request)
      .then((response) => {
        // Check if we received a valid response
        if (!response || response.status !== 200 || response.type !== 'basic') {
          return response;
        }
        // IMPORTANT: Clone the response. A response is a stream
        // and because we want the browser to consume the response
        // as well as the cache consuming the response, we need
        // to clone it so we have two streams.
        const responseToCache = response.clone();

        caches.open(CACHE_NAME)
          .then((cache) => {
            cache.put(event.request, responseToCache);
          });

        return response;
      })
      .catch(() => {
        // If fetch fails (e.g., offline), try to get the response from the cache
        console.log('Service Worker: Fetch failed, serving from cache:', event.request.url);
        return caches.match(event.request);
      })
  );
});