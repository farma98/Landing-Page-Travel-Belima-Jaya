<!-- FAQ Accordion -->
<section id="faq" class="py-20 px-4 bg-gray-50 dark:bg-gray-900 to-blue-50">
	<div class="container mx-auto max-w-4xl">
		<div class="text-center mb-16">
			<h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4 dark:text-white">Pertanyaan <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">Umum</span> </h2>
			<p class="text-xl text-gray-600 dark:text-white">Jawaban cepat sebelum booking</p>
		</div>

		<div class="space-y-4 faq-container">
			<div class="faq-item bg-white rounded-2xl shadow-md overflow-hidden">
				<button class="faq-button w-full text-left px-6 py-5 flex justify-between items-center hover:bg-blue-50 transition-colors duration-200" aria-expanded="false">
					<span class="font-semibold text-gray-800 text-lg pr-4">Apakah harga sudah termasuk driver?</span>
					<svg class="faq-icon w-6 h-6 text-blue-600 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
					</svg>
				</button>
				<div class="faq-content overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0;">
					<div class="px-6 pb-5 pt-2">
						<p class="text-gray-600">Umumnya sudah termasuk driver. Detail final menyesuaikan paket perjalanan.</p>
					</div>
				</div>
			</div>

			<div class="faq-item bg-white rounded-2xl shadow-md overflow-hidden">
				<button class="faq-button w-full text-left px-6 py-5 flex justify-between items-center hover:bg-blue-50 transition-colors duration-200" aria-expanded="false">
					<span class="font-semibold text-gray-800 text-lg pr-4">Bagaimana ketentuan BBM, tol, dan parkir?</span>
					<svg class="faq-icon w-6 h-6 text-blue-600 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
					</svg>
				</button>
				<div class="faq-content overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0;">
					<div class="px-6 pb-5 pt-2">
						<p class="text-gray-600">Bisa all-in atau terpisah. Tim akan jelaskan skema yang paling efisien sesuai rute.</p>
					</div>
				</div>
			</div>

			<div class="faq-item bg-white rounded-2xl shadow-md overflow-hidden">
				<button class="faq-button w-full text-left px-6 py-5 flex justify-between items-center hover:bg-blue-50 transition-colors duration-200" aria-expanded="false">
					<span class="font-semibold text-gray-800 text-lg pr-4">Apakah bisa overtime jika perjalanan molor?</span>
					<svg class="faq-icon w-6 h-6 text-blue-600 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
					</svg>
				</button>
				<div class="faq-content overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0;">
					<div class="px-6 pb-5 pt-2">
						<p class="text-gray-600">Bisa, dengan biaya tambahan overtime per jam sesuai ketentuan paket.</p>
					</div>
				</div>
			</div>

			<div class="faq-item bg-white rounded-2xl shadow-md overflow-hidden">
				<button class="faq-button w-full text-left px-6 py-5 flex justify-between items-center hover:bg-blue-50 transition-colors duration-200" aria-expanded="false">
					<span class="font-semibold text-gray-800 text-lg pr-4">Area layanan mencakup mana saja?</span>
					<svg class="faq-icon w-6 h-6 text-blue-600 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
					</svg>
				</button>
				<div class="faq-content overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0;">
					<div class="px-6 pb-5 pt-2">
						<p class="text-gray-600">Melayani dalam kota dan luar kota. Rute menyesuaikan kebutuhan perjalanan Anda.</p>
					</div>
				</div>
			</div>

			<div class="faq-item bg-white rounded-2xl shadow-md overflow-hidden">
				<button class="faq-button w-full text-left px-6 py-5 flex justify-between items-center hover:bg-blue-50 transition-colors duration-200" aria-expanded="false">
					<span class="font-semibold text-gray-800 text-lg pr-4">Apakah tersedia invoice untuk perusahaan?</span>
					<svg class="faq-icon w-6 h-6 text-blue-600 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
					</svg>
				</button>
				<div class="faq-content overflow-hidden transition-all duration-300 ease-in-out" style="max-height: 0;">
					<div class="px-6 pb-5 pt-2">
						<p class="text-gray-600">Tersedia invoice dan bukti pembayaran untuk kebutuhan administrasi perusahaan.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FAQ Accordion Script - Vanilla JavaScript -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const faqContainer = document.querySelector('.faq-container');
		const faqButtons = document.querySelectorAll('.faq-button');

		// Configuration
		const ACCORDION_MODE = true; // Set to true for accordion mode (only one item open at a time)

		// Function to close FAQ item
		function closeFAQ(button, content, icon) {
			content.style.maxHeight = '0px';
			icon.style.transform = 'rotate(0deg)';
			button.setAttribute('aria-expanded', 'false');
		}

		// Function to open FAQ item
		function openFAQ(button, content, icon) {
			content.style.maxHeight = content.scrollHeight + 'px';
			icon.style.transform = 'rotate(180deg)';
			button.setAttribute('aria-expanded', 'true');
		}

		// Function to toggle FAQ item
		function toggleFAQ(button) {
			const content = button.nextElementSibling;
			const icon = button.querySelector('.faq-icon');
			const isOpen = button.getAttribute('aria-expanded') === 'true';

			if (ACCORDION_MODE) {
				// Close all other FAQ items
				faqButtons.forEach(otherButton => {
					if (otherButton !== button) {
						const otherContent = otherButton.nextElementSibling;
						const otherIcon = otherButton.querySelector('.faq-icon');
						closeFAQ(otherButton, otherContent, otherIcon);
					}
				});
			}

			// Toggle current FAQ item
			if (isOpen) {
				closeFAQ(button, content, icon);
			} else {
				openFAQ(button, content, icon);
			}
		}

		// Add click event listeners
		faqButtons.forEach(button => {
			button.addEventListener('click', function() {
				toggleFAQ(this);
			});

			// Keyboard accessibility (Enter and Space)
			button.addEventListener('keydown', function(e) {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					toggleFAQ(this);
				}
			});
		});

		// Optional: Auto-resize on window resize
		window.addEventListener('resize', function() {
			faqButtons.forEach(button => {
				const content = button.nextElementSibling;
				const isOpen = button.getAttribute('aria-expanded') === 'true';

				if (isOpen) {
					// Recalculate height for open items
					content.style.maxHeight = content.scrollHeight + 'px';
				}
			});
		});
	});
</script>