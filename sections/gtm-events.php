<script>
(function () {
	// ============================================================
	// GTM DataLayer Event Tracking - HIPPAM Smart Water
	// Container: GTM-K78DD6BW
	// ============================================================

	// Pastikan dataLayer sudah ada
	window.dataLayer = window.dataLayer || [];

	// ============================================================
	// 1. CTA Click Tracking (semua tombol WhatsApp)
	// ============================================================
	function setupCTATracking() {
		const ctaLinks = document.querySelectorAll('[data-gtm-cta]');
		ctaLinks.forEach(function (link) {
			link.addEventListener('click', function () {
				const label = this.getAttribute('data-gtm-cta');
				const waNumber = (this.href.match(/wa\.me\/(\d+)/) || [])[1] || '';
				window.dataLayer.push({
					event: 'cta_click',
					event_category: 'CTA',
					event_label: label,
					wa_number: waNumber
				});
			});
		});
	}

	// ============================================================
	// 2. Video Play Tracking (section demo)
	// ============================================================
	function setupVideoTracking() {
		const videos = document.querySelectorAll('[data-gtm-video]');
		videos.forEach(function (video) {
			let tracked = false;
			video.addEventListener('play', function () {
				if (tracked) return;
				tracked = true;
				window.dataLayer.push({
					event: 'video_play',
					event_category: 'Video',
					event_label: video.getAttribute('data-gtm-video')
				});
			});
		});
	}

	// ============================================================
	// 3. Pricing Section View Tracking (Intersection Observer)
	// ============================================================
	function setupPricingViewTracking() {
		const pricingSection = document.getElementById('harga');
		if (!pricingSection) return;

		let tracked = false;
		const observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting && !tracked) {
					tracked = true;
					window.dataLayer.push({
						event: 'view_pricing',
						event_category: 'Engagement',
						event_label: 'Pricing Section Viewed'
					});
					observer.disconnect();
				}
			});
		}, { threshold: 0.3 });

		observer.observe(pricingSection);
	}

	// ============================================================
	// 4. Scroll Depth Tracking (25%, 50%, 75%, 100%)
	// ============================================================
	function setupScrollTracking() {
		const milestones = [25, 50, 75, 100];
		const reached = {};

		window.addEventListener('scroll', function () {
			const scrollTop = window.scrollY || document.documentElement.scrollTop;
			const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
			if (docHeight <= 0) return;

			const scrollPercent = Math.round((scrollTop / docHeight) * 100);

			milestones.forEach(function (milestone) {
				if (scrollPercent >= milestone && !reached[milestone]) {
					reached[milestone] = true;
					window.dataLayer.push({
						event: 'scroll_depth',
						event_category: 'Scroll',
						event_label: milestone + '%',
						scroll_percent: milestone
					});
				}
			});
		}, { passive: true });
	}

	// ============================================================
	// Init semua tracking setelah DOM siap
	// ============================================================
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function () {
			setupCTATracking();
			setupVideoTracking();
			setupPricingViewTracking();
			setupScrollTracking();
		});
	} else {
		setupCTATracking();
		setupVideoTracking();
		setupPricingViewTracking();
		setupScrollTracking();
	}

})();
</script>
