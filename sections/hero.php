<!-- Hero Section (ATTENTION) -->
<section id="main-content" class="gradient-bg text-white relative overflow-hidden" role="main" aria-label="Hero section" style="min-height: 100vh;">

	<!-- Animated Vanta Background -->
	<div id="vanta-bg" class="absolute inset-0 z-0"></div>

	<!-- Overlay gradient untuk readability -->
	<div class="absolute inset-0 z-[1] bg-gradient-to-b from-white/10 via-transparent to-white/20 pointer-events-none"></div>

	<!-- Decorative floating circles -->
	<div class="absolute top-20 right-10 w-72 h-72 bg-blue-400/10 rounded-full blur-3xl animate-pulse pointer-events-none z-[1]"></div>
	<div class="absolute bottom-20 left-10 w-56 h-56 bg-cyan-400/10 rounded-full blur-3xl animate-pulse pointer-events-none z-[1]" style="animation-delay: 1.5s;"></div>
	<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-500/5 rounded-full blur-3xl pointer-events-none z-[1]"></div>

	<!-- Main Content -->
	<div class="container mx-auto px-4 relative z-10 flex flex-col items-center justify-center text-center" style="min-height: 100vh; padding-top: 9rem; padding-bottom: 5rem;">

		<!-- Badge -->
		<div class="hero-badge inline-flex items-center gap-2 bg-white/15 backdrop-blur-md border border-white/25 px-4 py-2 rounded-full mb-6 shadow-lg">
			<span class="w-2 h-2 rounded-full bg-green-400 animate-pulse flex-shrink-0"></span>
			<span class="text-xs md:text-sm font-semibold text-white" aria-label="Service area">
				Armada Siap — Wisata, Rombongan, Perusahaan & Travel Organizer
			</span>
			<svg class="w-4 h-4 text-blue-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
			</svg>
		</div>

		<!-- Headline -->
		<h1 class="hero-headline text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight tracking-tight px-2 max-w-5xl">
			CB TRANSWISATA <br>CAHAYA BELIMA TRANS
			<span class="relative inline-block">
				<svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 200 8" preserveAspectRatio="none" style="height:6px;">
					<path d="M0 6 Q50 0 100 4 Q150 8 200 2" stroke="url(#underlineGrad)" stroke-width="3" fill="none" stroke-linecap="round" />
					<defs>
						<linearGradient id="underlineGrad" x1="0" y1="0" x2="1" y2="0">
							<stop offset="0%" stop-color="#67E8F9" />
							<stop offset="100%" stop-color="#93C5FD" />
						</linearGradient>
					</defs>
				</svg>
			</span>
		</h1>

		<!-- Subtitle -->
		<p class="hero-subtitle text-base sm:text-lg md:text-xl text-blue-100/90 max-w-2xl mx-auto mb-8 leading-relaxed px-4">Sewa Hiace Aman dan Nyaman, Cocok untuk wisata keluarga, perjalanan perusahaan, hingga travel organizer.
		</p>

		<!-- CTA Buttons -->
		<div class="hero-cta flex flex-col sm:flex-row gap-3 md:gap-4 justify-center items-center px-4 mb-10">
			<a href="https://wa.me/6282240001143?text=Halo,%20saya%20ingin%20booking%20Hiace.%0ATanggal:%0ARute:%0AJumlah%20peserta:%0ATipe%20perjalanan:%20Wisata/Kantor/TO"
				onclick="return gtag_report_conversion(this.href)"
				class="group w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white text-blue-700 px-7 py-4 rounded-2xl font-bold text-base md:text-lg shadow-2xl shadow-blue-900/30 hover:bg-blue-50 hover:shadow-blue-500/30 transition-all duration-300 hover:-translate-y-1"
				data-gtm-cta="hero_booking">
				<svg class="w-5 h-5 flex-shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
				</svg>
				Booking Hiace Sekarang
			</a>
		</div>

		<!-- Scroll indicator -->
		<div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 opacity-80">
			<p class="text-xs text-blue-200">Scroll</p>
			<svg class="w-5 h-5 text-blue-200 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
			</svg>
		</div>

	</div>
</section>