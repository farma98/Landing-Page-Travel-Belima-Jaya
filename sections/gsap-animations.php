<!-- GSAP Animation Scripts -->
<script>
	// Wait for all scripts (including deferred GSAP) to fully load
	window.addEventListener('load', function() {
		// GSAP Error Boundary - wrap all animations in try-catch
		try {
			// Check if GSAP and ScrollTrigger are loaded
			if (typeof gsap === 'undefined') {
				console.warn('⚠️ GSAP library not loaded. Animations disabled.');
				return;
			}
			if (typeof ScrollTrigger === 'undefined') {
				console.warn('⚠️ ScrollTrigger plugin not loaded. Scroll animations disabled.');
				return;
			}

			// Register ScrollTrigger plugin
			gsap.registerPlugin(ScrollTrigger);

			// Check for reduced motion preference
			const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

			// Animation settings based on user preference
			const animationConfig = prefersReducedMotion ? {
				duration: 0.01,
				opacity: 1,
				y: 0,
				scale: 1,
				stagger: 0
			} : {
				duration: 1,
				ease: 'power3.out'
			};

			if (!prefersReducedMotion) {
				// ============================================
				// 1. NAVBAR SHRINK ON SCROLL
				// ============================================
				const navbar = document.querySelector('nav');

				if (navbar) {
					ScrollTrigger.create({
						start: 'top -80',
						end: 99999,
						toggleClass: {
							className: 'navbar-scrolled',
							targets: navbar
						},
						onEnter: () => {
							gsap.to(navbar, {
								paddingTop: 12,
								paddingBottom: 12,
								duration: 0.3,
								ease: 'power2.out'
							});
							const logo = navbar.querySelector('.flex.items-center.space-x-2');
							if (logo) {
								gsap.to(logo, {
									scale: 0.9,
									duration: 0.3,
									ease: 'power2.out'
								});
							}
						},
						onLeaveBack: () => {
							gsap.to(navbar, {
								paddingTop: 16,
								paddingBottom: 16,
								duration: 0.3,
								ease: 'power2.out'
							});
							const logo = navbar.querySelector('.flex.items-center.space-x-2');
							if (logo) {
								gsap.to(logo, {
									scale: 1,
									duration: 0.3,
									ease: 'power2.out'
								});
							}
						}
					});
				}

				// ============================================
				// 2. HERO SECTION ANIMATIONS
				// ============================================
				const heroBadge = document.querySelector('.hero-badge');
				const heroHeadline = document.querySelector('.hero-headline');
				const heroSubtitle = document.querySelector('.hero-subtitle');
				const heroCta = document.querySelector('.hero-cta');

				if (heroBadge || heroHeadline || heroSubtitle || heroCta) {
					const heroTimeline = gsap.timeline({
						defaults: {
							ease: 'power3.out'
						}
					});

					if (heroBadge) {
						heroTimeline.from('.hero-badge', {
							opacity: 0,
							y: -30,
							duration: 0.8,
							delay: 0.2
						});
					}

					if (heroHeadline) {
						heroTimeline.from('.hero-headline', {
							opacity: 0,
							y: 50,
							duration: 1
						}, heroBadge ? '-=0.4' : '0');
					}

					if (heroSubtitle) {
						heroTimeline.from('.hero-subtitle', {
							opacity: 0,
							y: 30,
							duration: 0.8
						}, '-=0.6');
					}

					if (heroCta) {
						heroTimeline.from('.hero-cta', {
							opacity: 0,
							y: 30,
							duration: 0.8
						}, '-=0.5');
					}
				}

				// Trust Bar Animation
				const trustBarItems = document.querySelectorAll('.trust-bar > div > div > div');
				if (trustBarItems.length > 0) {
					gsap.from(trustBarItems, {
						scrollTrigger: {
							trigger: '.trust-bar',
							start: 'top 90%',
							toggleActions: 'play none none reverse'
						},
						opacity: 0,
						y: 40,
						stagger: 0.15,
						duration: 0.8,
						ease: 'power2.out',
						immediateRender: false
					});
				}

				// ============================================
				// 3. SECTION REVEAL ANIMATIONS (Fade-Up)
				// ============================================
				const animateSections = document.querySelectorAll('.animate-section');
				if (animateSections.length > 0) {
					animateSections.forEach((section) => {
						gsap.from(section, {
							scrollTrigger: {
								trigger: section,
								start: 'top 90%',
								toggleActions: 'play none none reverse'
							},
							opacity: 0,
							y: 60,
							duration: 1,
							ease: 'power3.out',
							immediateRender: false
						});
					});
				}

				// ============================================
				// 4. FEATURES GRID STAGGER
				// ============================================
				const featuresGrid = document.querySelectorAll('.features-grid > div');
				if (featuresGrid.length > 0) {
					gsap.from(featuresGrid, {
						scrollTrigger: {
							trigger: '.features-grid',
							start: 'top 90%', // Changed from 75% to 90% for earlier trigger
							toggleActions: 'play none none reverse',
							// markers: true // Uncomment for debugging
						},
						opacity: 0,
						y: 50,
						stagger: {
							amount: 1.2,
							from: 'start',
							ease: 'power2.out'
						},
						duration: 0.8,
						ease: 'power2.out',
						immediateRender: false // Don't immediately set to invisible
					});
				}

				// ============================================
				// 5. PRICING CARDS STAGGER
				// ============================================
				const pricingGrid = document.querySelectorAll('.pricing-grid > div');
				if (pricingGrid.length > 0) {
					gsap.from(pricingGrid, {
						scrollTrigger: {
							trigger: '.pricing-grid',
							start: 'top 90%',
							toggleActions: 'play none none reverse'
						},
						opacity: 0,
						y: 60,
						stagger: 0.2,
						duration: 1,
						ease: 'power3.out',
						immediateRender: false
					});
				}

				// ============================================
				// 6. "TERLARIS" BADGE PULSE ANIMATION
				// ============================================
				const terlarisBadge = document.querySelector('.terlaris-badge');
				if (terlarisBadge) {
					gsap.to(terlarisBadge, {
						scale: 1.05,
						duration: 0.8,
						ease: 'power1.inOut',
						yoyo: true,
						repeat: -1
					});
				}

				// ============================================
				// 7. TESTIMONIALS STAGGER
				// ============================================
				const testimonialsGrid = document.querySelectorAll('.testimonials-grid > div');
				if (testimonialsGrid.length > 0) {
					gsap.from(testimonialsGrid, {
						scrollTrigger: {
							trigger: '.testimonials-grid',
							start: 'top 90%',
							toggleActions: 'play none none reverse'
						},
						opacity: 0,
						y: 50,
						stagger: 0.2,
						duration: 0.9,
						ease: 'power2.out',
						immediateRender: false
					});
				}

				// ============================================
				// 8. CARA KERJA (HOW IT WORKS) STAGGER
				// ============================================
				const caraKerjaItems = document.querySelectorAll('#cara-kerja .grid > div');
				if (caraKerjaItems.length > 0) {
					gsap.from(caraKerjaItems, {
						scrollTrigger: {
							trigger: '#cara-kerja .grid',
							start: 'top 90%',
							toggleActions: 'play none none reverse'
						},
						opacity: 0,
						y: 60,
						stagger: 0.25,
						duration: 1,
						ease: 'power3.out',
						immediateRender: false
					});
				}

				// ============================================
				// 11. FLOATING ANIMATION FOR DEMO MOCKUP
				// ============================================
				const demoMockup = document.querySelector('.aspect-video');
				if (demoMockup) {
					gsap.to(demoMockup, {
						y: -15,
						duration: 2.5,
						ease: 'power1.inOut',
						yoyo: true,
						repeat: -1
					});
				}

				// ============================================
				// 12. PARALLAX EFFECT - REMOVED
				// ============================================
				// Parallax removed because it caused hero text to disappear
				// when scrolling (opacity 0.3 made text unreadable)
			}

			// ============================================
			// FAQ ACCORDION - MOVED TO FAQ.PHP
			// ============================================
			// FAQ accordion now has its own vanilla JavaScript implementation
			// in sections/faq.php for better modularity

			// ============================================
			// 10. BACK TO TOP BUTTON
			// ============================================
			const backToTopButton = document.getElementById('backToTop');

			if (backToTopButton) {
				window.addEventListener('scroll', () => {
					if (window.pageYOffset > 300) {
						if (!prefersReducedMotion) {
							gsap.to(backToTopButton, {
								opacity: 1,
								pointerEvents: 'auto',
								duration: 0.3
							});
						} else {
							backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
							backToTopButton.classList.add('opacity-100');
						}
					} else {
						if (!prefersReducedMotion) {
							gsap.to(backToTopButton, {
								opacity: 0,
								pointerEvents: 'none',
								duration: 0.3
							});
						} else {
							backToTopButton.classList.remove('opacity-100');
							backToTopButton.classList.add('opacity-0', 'pointer-events-none');
						}
					}
				});

				backToTopButton.addEventListener('click', () => {
					window.scrollTo({
						top: 0,
						behavior: 'smooth'
					});
				});
			}
		} catch (error) {
			console.error('❌ GSAP Animation Error:', error);
			console.warn('Animations have been disabled due to an error, but the page remains fully functional.');
		}
	});
</script>