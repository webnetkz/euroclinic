importScripts('/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('title').then(function(cache) {
     return cache.addAll([
       '/',
       '/index.php',
       '/public/img/miniLogoEmirmed.png',
       '/public/img/logoEmirmed.png',
       '/public/scripts/main.js',
       '/public/styles/style.css',
       'public/styles/mobileStyle.css',
       '/public/img/24.svg',
       '/public/img/bg.jpg',
       '/public/img/bgm.jpg',
       '/public/img/phone-call.svg'
     ]);
   })
 );
});

 // Кэширование запросов с родительской страници
self.addEventListener('fetch', function(event) {

  console.log(event.request.url);
  
  event.respondWith(
  
    caches.match(event.request).then(function(response) {
      
      return response || fetch(event.request);
      
    })
  );
});