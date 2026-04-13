/**
 * Lazy Loading Implementation for Sewa Hiace Tuban - Belima Jaya Travel
 * Handles lazy loading for images, videos, and iframes
 * Optimizes page load performance
 */

// =========================================
// 1. LAZY LOAD IMAGES
// =========================================
function lazyLoadImages() {
    const imageObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const img = entry.target;

                    // Load the image
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute("data-src");
                    }

                    // Load srcset if available
                    if (img.dataset.srcset) {
                        img.srcset = img.dataset.srcset;
                        img.removeAttribute("data-srcset");
                    }

                    // Add loaded class for fade-in effect
                    img.classList.add("lazy-loaded");

                    // Stop observing this image
                    observer.unobserve(img);
                }
            });
        },
        {
            rootMargin: "50px 0px", // Start loading 50px before entering viewport
            threshold: 0.01,
        },
    );

    // Observe all images with data-src attribute
    const lazyImages = document.querySelectorAll("img[data-src]");
    lazyImages.forEach((img) => {
        imageObserver.observe(img);
    });
}

// =========================================
// 2. LAZY LOAD VIDEOS
// =========================================
function lazyLoadVideos() {
    const videoObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const video = entry.target;

                    // Load video sources
                    const sources = video.querySelectorAll("source[data-src]");
                    sources.forEach((source) => {
                        source.src = source.dataset.src;
                        source.removeAttribute("data-src");
                    });

                    // Load video poster if available
                    if (video.dataset.poster) {
                        video.poster = video.dataset.poster;
                        video.removeAttribute("data-poster");
                    }

                    // Load the video
                    video.load();

                    // Add loaded class
                    video.classList.add("lazy-loaded");

                    // Stop observing this video
                    observer.unobserve(video);

                    console.log("✅ Video loaded:", video);
                }
            });
        },
        {
            rootMargin: "100px 0px", // Start loading 100px before entering viewport
            threshold: 0.01,
        },
    );

    // Observe all videos with lazy loading
    const lazyVideos = document.querySelectorAll("video.lazy-video");
    lazyVideos.forEach((video) => {
        videoObserver.observe(video);
    });
}

// =========================================
// 3. LAZY LOAD IFRAMES (for embeds)
// =========================================
function lazyLoadIframes() {
    const iframeObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const iframe = entry.target;

                    if (iframe.dataset.src) {
                        iframe.src = iframe.dataset.src;
                        iframe.removeAttribute("data-src");
                    }

                    iframe.classList.add("lazy-loaded");
                    observer.unobserve(iframe);
                }
            });
        },
        {
            rootMargin: "50px 0px",
            threshold: 0.01,
        },
    );

    const lazyIframes = document.querySelectorAll("iframe[data-src]");
    lazyIframes.forEach((iframe) => {
        iframeObserver.observe(iframe);
    });
}

// =========================================
// 4. PRELOAD CRITICAL RESOURCES
// =========================================
function preloadCriticalResources() {
    // Preload Tailwind CSS
    const tailwindLink = document.querySelector('link[href*="tailwindcss"]');
    if (tailwindLink) {
        tailwindLink.setAttribute("rel", "preload");
        tailwindLink.setAttribute("as", "style");
        tailwindLink.setAttribute("onload", "this.rel='stylesheet'");
    }

    // Preload Google Fonts
    const fontLinks = document.querySelectorAll(
        'link[href*="fonts.googleapis.com"]',
    );
    fontLinks.forEach((link) => {
        link.setAttribute("rel", "preload");
        link.setAttribute("as", "style");
        link.setAttribute("onload", "this.rel='stylesheet'");
    });
}

// =========================================
// 5. FALLBACK FOR OLDER BROWSERS
// =========================================
function fallbackLazyLoad() {
    // If IntersectionObserver is not supported, load everything immediately
    if (!("IntersectionObserver" in window)) {
        console.warn(
            "⚠️ IntersectionObserver not supported. Loading all resources immediately.",
        );

        // Load all images
        document.querySelectorAll("img[data-src]").forEach((img) => {
            if (img.dataset.src) img.src = img.dataset.src;
            if (img.dataset.srcset) img.srcset = img.dataset.srcset;
            img.classList.add("lazy-loaded");
        });

        // Load all videos
        document.querySelectorAll("video.lazy-video").forEach((video) => {
            video.querySelectorAll("source[data-src]").forEach((source) => {
                source.src = source.dataset.src;
            });
            if (video.dataset.poster) video.poster = video.dataset.poster;
            video.load();
            video.classList.add("lazy-loaded");
        });

        // Load all iframes
        document.querySelectorAll("iframe[data-src]").forEach((iframe) => {
            if (iframe.dataset.src) iframe.src = iframe.dataset.src;
            iframe.classList.add("lazy-loaded");
        });
    }
}

// =========================================
// 6. INITIALIZE LAZY LOADING
// =========================================
function initLazyLoading() {
    // Check for browser support
    fallbackLazyLoad();

    // Initialize lazy loading for different resource types
    lazyLoadImages();
    lazyLoadVideos();
    lazyLoadIframes();

    console.log("✅ Lazy loading initialized");
}

// =========================================
// 7. CSS RELOAD FIX
// =========================================
function fixCSSReload() {
    // Force reload CSS if not loaded properly
    const checkCSSLoaded = setInterval(() => {
        const body = document.body;
        const computedStyle = window.getComputedStyle(body);

        // Check if Tailwind classes are applied
        if (
            computedStyle.fontFamily.includes("Inter") ||
            computedStyle.fontFamily.includes("Poppins")
        ) {
            console.log("✅ CSS loaded successfully");
            clearInterval(checkCSSLoaded);
        }
    }, 100);

    // Stop checking after 5 seconds
    setTimeout(() => {
        clearInterval(checkCSSLoaded);
    }, 5000);
}

// =========================================
// 8. RUN ON DOM READY
// =========================================
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", () => {
        initLazyLoading();
        fixCSSReload();
    });
} else {
    // DOM already loaded
    initLazyLoading();
    fixCSSReload();
}

// =========================================
// 9. EXPORT FOR MANUAL USAGE
// =========================================
window.LazyLoad = {
    images: lazyLoadImages,
    videos: lazyLoadVideos,
    iframes: lazyLoadIframes,
    init: initLazyLoading,
};
