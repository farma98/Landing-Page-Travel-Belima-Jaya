<!-- Navbar Sticky -->
<nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full top-0 z-50 transition-colors duration-300" role="navigation" aria-label="Main navigation">
	<div class="container mx-auto px-4 py-4">
		<div class="flex justify-between items-center">
			<div class="flex items-center space-x-2">
				<div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center">
					<span class="text-white text-xl font-bold">🚐</span>
				</div>
				<span class="text-lg md:text-xl font-bold text-gray-800 dark:text-white">Sewa Hiace Tuban</span>
			</div>

			<div class="hidden md:flex space-x-6 items-center">
				<a href="#keunggulan" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Keunggulan</a>
				<a href="#armada" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Armada</a>
				<a href="#layanan" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Layanan</a>
				<a href="#segmen" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Kebutuhan</a>
				<a href="#estimasi" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Estimasi Harga</a>
				<a href="#faq" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">FAQ</a>

				<button id="dark-mode-toggle" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition" aria-label="Toggle Dark Mode">
					<svg id="sun-icon" class="w-6 h-6 text-gray-600 dark:text-yellow-400 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
					</svg>
					<svg id="moon-icon" class="w-6 h-6 text-gray-600 dark:text-gray-300 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
					</svg>
				</button>

				<a href="https://wa.me/6282240001143?text=Halo,%20saya%20ingin%20sewa%20Hiace.%0ATanggal:%0ARute:%0AJumlah%20peserta:%0AKebutuhan:%20Wisata/Kantor/TO" onclick="return gtag_report_conversion(this.href)" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:shadow-lg transition" data-gtm-cta="navbar_booking">Booking Sekarang</a>
			</div>

			<div class="flex md:hidden items-center space-x-2">
				<button id="dark-mode-toggle-mobile" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition" aria-label="Toggle Dark Mode">
					<svg id="sun-icon-mobile" class="w-5 h-5 text-gray-600 dark:text-yellow-400 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
					</svg>
					<svg id="moon-icon-mobile" class="w-5 h-5 text-gray-600 dark:text-gray-300 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
					</svg>
				</button>

				<button id="mobile-menu-btn" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none" aria-label="Open menu">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
				</button>
			</div>
		</div>

		<div id="mobile-menu" class="hidden md:hidden pt-4 pb-2">
			<div class="flex flex-col space-y-3">
				<a href="#keunggulan" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition py-2">Keunggulan</a>
				<a href="#armada" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition py-2">Armada</a>
				<a href="#layanan" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition py-2">Layanan</a>
				<a href="#segmen" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition py-2">Kebutuhan</a>
				<a href="#estimasi" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition py-2">Estimasi</a>
				<a href="#faq" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition py-2">FAQ</a>
				<a href="https://wa.me/6282240001143?text=Halo,%20saya%20ingin%20sewa%20Hiace.%0ATanggal:%0ARute:%0AJumlah%20peserta:%0AKebutuhan:%20Wisata/Kantor/TO" onclick="return gtag_report_conversion(this.href)" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition text-center" data-gtm-cta="mobile_booking">Booking Sekarang</a>
			</div>
		</div>
	</div>
</nav>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Mobile menu toggle
		const mobileMenuBtn = document.getElementById('mobile-menu-btn');
		const mobileMenu = document.getElementById('mobile-menu');

		if (mobileMenuBtn && mobileMenu) {
			mobileMenuBtn.addEventListener('click', function() {
				mobileMenu.classList.toggle('hidden');
			});

			// Close mobile menu when clicking on links
			const mobileLinks = mobileMenu.querySelectorAll('a');
			mobileLinks.forEach(link => {
				link.addEventListener('click', function() {
					mobileMenu.classList.add('hidden');
				});
			});
		}

		// Dark mode toggle
		const darkModeToggle = document.getElementById('dark-mode-toggle');
		const darkModeToggleMobile = document.getElementById('dark-mode-toggle-mobile');

		function toggleDarkMode() {
			const html = document.documentElement;

			if (html.classList.contains('dark')) {
				html.classList.remove('dark');
				localStorage.theme = 'light';
			} else {
				html.classList.add('dark');
				localStorage.theme = 'dark';
			}
		}

		if (darkModeToggle) {
			darkModeToggle.addEventListener('click', toggleDarkMode);
		}

		if (darkModeToggleMobile) {
			darkModeToggleMobile.addEventListener('click', toggleDarkMode);
		}
	});
</script>