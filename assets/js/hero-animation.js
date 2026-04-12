// VANTA.js Waves Animation for Hero Section
console.log("🔄 Hero animation script loaded");

// Wait for all libraries to load
window.addEventListener("load", function () {
    console.log("🔄 Window fully loaded, checking libraries...");

    // Debug: Check what's available
    console.log("THREE available?", typeof THREE !== "undefined");
    console.log("VANTA available?", typeof VANTA !== "undefined");

    // Check if VANTA and THREE are loaded
    if (typeof VANTA === "undefined") {
        console.error("❌ VANTA.js not loaded");
        return;
    }

    if (typeof THREE === "undefined") {
        console.error("❌ THREE.js not loaded");
        return;
    }

    if (typeof VANTA.WAVES === "undefined") {
        console.error("❌ VANTA.WAVES not available");
        return;
    }

    // Check if target element exists
    const targetEl = document.getElementById("vanta-bg");
    if (!targetEl) {
        console.error("❌ Element #vanta-bg not found");
        return;
    }

    console.log("✅ All checks passed, initializing VANTA...");

    try {
        // Initialize VANTA Waves effect
        const vantaEffect = VANTA.WAVES({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.0,
            minWidth: 200.0,
            scale: 1.0,
            scaleMobile: 1.0,
            // Color scheme matching existing blue gradient
            color: 0x1e40af, // Dark blue (matching gradient end color)
            shininess: 40.0,
            waveHeight: 15.0,
            waveSpeed: 0.75,
            zoom: 0.85,
        });

        console.log("✅ VANTA Waves animation initialized successfully");
        console.log("VANTA Effect object:", vantaEffect);

        // Cleanup on page unload to prevent memory leaks
        window.addEventListener("beforeunload", function () {
            if (vantaEffect) {
                vantaEffect.destroy();
            }
        });
    } catch (error) {
        console.error("❌ Error initializing VANTA animation:", error);
        console.error("Error details:", error.message, error.stack);
    }
});
