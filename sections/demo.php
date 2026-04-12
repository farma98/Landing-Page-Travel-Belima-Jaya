<!-- Demo Preview -->
<section class="bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/30 dark:to-cyan-900/30 py-20 px-4 animate-section transition-colors duration-300">
	<div class="container mx-auto text-center">
		<h2 class="text-3xl md:text-5xl font-bold text-gray-800 dark:text-white mb-4">Bagaimana Tampilan Aplikasinya Di HP & Laptop?</h2>
		<p class="text-xl text-gray-600 dark:text-gray-300 mb-12">Antarmuka modern, mudah dipahami</p>
		<div class="bg-white dark:bg-gray-800 rounded-3xl shadow-2xl dark:shadow-gray-900/70 p-4 max-w-5xl mx-auto border border-transparent dark:border-gray-700">
			<div class="grid md:grid-cols-2 gap-4 mt-8">
				<!-- Tampilan Mobile Card -->
				<div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-4">
					<h3 class="font-semibold text-gray-700 dark:text-gray-200 mb-3 flex items-center">
						<span class="text-2xl mr-2">📱</span> Tampilan Mobile
					</h3>
					<div class="aspect-video bg-gray-900 rounded-lg overflow-hidden shadow-lg relative group">
						<video
							class="lazy-video w-full h-full object-contain"
							controls
							preload="none"
							data-poster="assets/video/thumbnail_mobile.png"
							data-gtm-video="Demo Mobile">
							<source data-src="assets/video/mobile.mp4" type="video/mp4">
							<p class="text-gray-300 p-4">Browser Anda tidak mendukung pemutaran video.</p>
						</video>
						<!-- Play overlay -->
						<div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
							<div class="bg-white/20 backdrop-blur-sm rounded-full p-3">
								<svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
									<path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
				<!-- Tampilan Admin/Desktop Card -->
				<div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-4">
					<h3 class="font-semibold text-gray-700 dark:text-gray-200 mb-3 flex items-center">
						<span class="text-2xl mr-2">💻</span> Tampilan Desktop
					</h3>
					<div class="aspect-video bg-gray-900 rounded-lg overflow-hidden shadow-lg relative group">
						<video
							class="lazy-video w-full h-full object-contain"
							controls
							preload="none"
							data-poster="assets/video/thumbnail_website.png"
							data-gtm-video="Demo Desktop">
							<source data-src="assets/video/admin.mp4" type="video/mp4">
							<p class="text-gray-300 p-4">Browser Anda tidak mendukung pemutaran video.</p>
						</video>
						<!-- Play overlay -->
						<div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
							<div class="bg-white/20 backdrop-blur-sm rounded-full p-3">
								<svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
									<path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>