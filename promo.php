<?php
// Security Headers
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");

// Content Security Policy (CSP)
header(
	"Content-Security-Policy: " .
		"default-src 'self'; " .
		"script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.googletagmanager.com https://tagmanager.google.com https://www.google-analytics.com https://ssl.google-analytics.com; " .
		"script-src-elem 'self' 'unsafe-inline' https://www.googletagmanager.com https://tagmanager.google.com https://www.google-analytics.com https://ssl.google-analytics.com https://googleads.g.doubleclick.net; " .
		"script-src-attr 'unsafe-inline'; " .
		"style-src 'self' 'unsafe-inline' https://tagmanager.google.com https://www.googletagmanager.com; " .
		"style-src-elem 'self' 'unsafe-inline' https://tagmanager.google.com https://www.googletagmanager.com; " .
		"img-src 'self' data: https: https://www.googletagmanager.com; " .
		"connect-src 'self' https://www.googletagmanager.com https://www.google-analytics.com https://analytics.google.com https://region1.google-analytics.com https://region1.analytics.google.com https://stats.g.doubleclick.net https://www.google.com https://googleads.g.doubleclick.net https://wa.me https://api.whatsapp.com; " .
		"frame-src https://www.googletagmanager.com; " .
		"frame-ancestors 'self';"
);
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-F8MPPETP16"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-F8MPPETP16');
		gtag('config', 'AW-17937206261');
	</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Promo HIPPAM Smart Water - Paket Enterprise</title>
	<meta name="description" content="Promo spesial untuk Paket Enterprise HIPPAM Smart Water">

	<!-- Open Graph / Facebook / WhatsApp -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://perumda.com/promo.php">
	<meta property="og:title" content="🔥 Promo Spesial HIPPAM Smart Water">
	<meta property="og:description" content="Dapatkan Paket Enterprise dengan harga spesial! Custom fitur sesuai kebutuhan HIPPAM Anda.">
	<meta property="og:image" content="https://perumda.com/hippam/assets/img/promo.png">
	<meta property="og:image:secure_url" content="https://perumda.com/hippam/assets/img/promo.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:image:alt" content="Promo HIPPAM Smart Water Paket Enterprise">
	<meta property="og:site_name" content="HIPPAM Smart Water">

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://perumda.com/hippam/promo.php">
	<meta name="twitter:title" content="🔥 Promo Spesial HIPPAM Smart Water">
	<meta name="twitter:description" content="Dapatkan Paket Enterprise dengan harga spesial!">
	<meta name="twitter:image" content="https://perumda.com/hippam/assets/img/promo.png">
	<meta name="twitter:image:alt" content="Promo HIPPAM Smart Water Paket Enterprise">

	<!-- WhatsApp Specific -->
	<link rel="image_src" href="https://perumda.com/hippam/assets/img/promo.png">

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: #f5f5f5;
			min-height: 100vh;
			padding: 0;
		}

		.container {
			max-width: 100%;
			width: 100%;
			background: white;
			min-height: 100vh;
		}

		.header {
			background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
			color: white;
			padding: 20px;
			text-align: center;
		}

		.promo-badge {
			display: inline-block;
			background: #ffd700;
			color: #1e3c72;
			padding: 8px 20px;
			border-radius: 25px;
			font-weight: bold;
			margin-bottom: 10px;
			font-size: 0.9rem;
			animation: pulse 2s infinite;
		}

		@keyframes pulse {

			0%,
			100% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.05);
			}
		}

		.header h1 {
			font-size: 1.5rem;
			margin-bottom: 5px;
			font-weight: 700;
		}

		.header p {
			font-size: 1rem;
			opacity: 0.9;
		}

		/* Image Section - Full Width */
		.promo-image-section {
			position: relative;
			width: 100%;
			background: #000;
		}

		.promo-image-container {
			position: relative;
			width: 100%;
			cursor: pointer;
			overflow: hidden;
		}

		.promo-image {
			width: 100%;
			height: auto;
			display: block;
			transition: transform 0.3s ease;
		}

		.promo-image-container:active .promo-image {
			transform: scale(0.98);
		}

		.zoom-overlay {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
			padding: 20px;
			text-align: center;
			pointer-events: none;
		}

		.zoom-hint {
			color: white;
			font-size: 1rem;
			font-weight: 600;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
		}

		.zoom-icon {
			font-size: 1.5rem;
			animation: zoomPulse 2s infinite;
		}

		@keyframes zoomPulse {

			0%,
			100% {
				transform: scale(1);
			}

			50% {
				transform: scale(1.2);
			}
		}

		/* Content Section */
		.content {
			padding: 30px 20px;
			max-width: 800px;
			margin: 0 auto;
		}

		.features {
			background: #f8f9fa;
			border-radius: 15px;
			padding: 25px;
			margin-bottom: 25px;
		}

		.features h2 {
			color: #1e3c72;
			font-size: 1.3rem;
			margin-bottom: 15px;
			text-align: center;
		}

		.features ul {
			list-style: none;
			display: grid;
			gap: 12px;
		}

		.features li {
			display: flex;
			align-items: start;
			gap: 10px;
			font-size: 0.95rem;
			color: #333;
		}

		.features li::before {
			content: "✓";
			color: #25d366;
			font-weight: bold;
			font-size: 1.2rem;
			flex-shrink: 0;
		}

		.cta-section {
			text-align: center;
			margin-top: 20px;
		}

		.cta-button {
			display: inline-flex;
			align-items: center;
			gap: 10px;
			background: #25d366;
			color: white;
			text-decoration: none;
			padding: 15px 35px;
			border-radius: 50px;
			font-size: 1.1rem;
			font-weight: 600;
			transition: all 0.3s ease;
			box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
			width: 100%;
			max-width: 400px;
			justify-content: center;
		}

		.cta-button:active {
			transform: scale(0.98);
			box-shadow: 0 3px 10px rgba(37, 211, 102, 0.3);
		}

		.whatsapp-icon {
			width: 24px;
			height: 24px;
		}

		/* Modal untuk zoom gambar */
		.modal {
			display: none;
			position: fixed;
			z-index: 9999;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.95);
			animation: fadeIn 0.3s ease;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		.modal-content {
			margin: auto;
			display: block;
			width: 95%;
			max-width: 100%;
			max-height: 95vh;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			object-fit: contain;
		}

		.close {
			position: absolute;
			top: 15px;
			right: 25px;
			color: #f1f1f1;
			font-size: 50px;
			font-weight: bold;
			cursor: pointer;
			transition: color 0.3s;
			z-index: 10000;
			line-height: 1;
			width: 50px;
			height: 50px;
			display: flex;
			align-items: center;
			justify-content: center;
			background: rgba(0, 0, 0, 0.5);
			border-radius: 50%;
		}

		.close:hover {
			color: #bbb;
		}

		.modal-hint {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			color: white;
			background: rgba(0, 0, 0, 0.7);
			padding: 10px 20px;
			border-radius: 25px;
			font-size: 0.9rem;
		}

		@media (min-width: 768px) {
			.header {
				padding: 30px;
			}

			.header h1 {
				font-size: 2rem;
			}

			.header p {
				font-size: 1.1rem;
			}

			.container {
				max-width: 1000px;
				margin: 20px auto;
				border-radius: 20px;
				overflow: hidden;
				box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
			}

			.content {
				padding: 40px 30px;
			}

			.cta-button {
				width: auto;
			}

			.cta-button:hover {
				background: #20ba5a;
				transform: translateY(-2px);
				box-shadow: 0 8px 20px rgba(37, 211, 102, 0.5);
			}

			.promo-image-container:hover .promo-image {
				transform: scale(1.02);
			}
		}
	</style>
</head>

<body>

	<div class="container">
		<!-- Header -->
		<div class="header">
			<div class="promo-badge">🔥 PROMO SPESIAL</div>
			<h1>Paket Enterprise HIPPAM Smart Water</h1>
			<p>Solusi Custom Untuk HIPPAM Besar</p>
		</div>

		<!-- Promo Image - Full Width -->
		<div class="promo-image-section">
			<div class="promo-image-container" onclick="openModal()">
				<img src="assets/img/promo.png" alt="Promo HIPPAM Smart Water" class="promo-image" id="promoImage" loading="eager">
				<div class="zoom-overlay">
					<div class="zoom-hint">
						<span class="zoom-icon">🔍</span>
						<span>Klik untuk memperbesar gambar</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="content">
			<div class="features">
				<h2>✨ Keunggulan Paket Enterprise</h2>
				<ul>
					<li>Unlimited pelanggan & admin</li>
					<li>Custom fitur sesuai kebutuhan HIPPAM Anda</li>
					<li>API Integration untuk sistem terintegrasi</li>
					<li>Dedicated support 24/7</li>
					<li>Server dedicated untuk performa maksimal</li>
					<li>Semua fitur Pro + fitur eksklusif lainnya</li>
				</ul>
			</div>

			<div class="cta-section">
				<a href="https://wa.me/6282240001143?text=Saya,%0A%0A✓%20Nama%20:%0A✓%20Alamat%20:%0A✓%20Nama%20Hippam%20:%0A%0ATertarik%20untuk%20memesan%20Paket%20Enterprise%20HIPPAM%20Smart%20Water%20sesuai%20custom%20aplikasi%20yang%20saya%20inginkan.%0A%0ABerikut%20fitur%20aplikasi%20yang%20saya%20inginkan%20:%0A1).%0A2).%0A3)." onclick="return gtag_report_conversion(this.href)" class="cta-button" data-gtm-cta="promo_enterprise_tertarik">
					<svg class="whatsapp-icon" viewBox="0 0 24 24" fill="currentColor">
						<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
					</svg>
					Saya Tertarik!
				</a>
			</div>
		</div>
	</div>

	<!-- Modal untuk zoom gambar -->
	<div id="imageModal" class="modal" onclick="closeModal()">
		<span class="close" onclick="closeModal(); event.stopPropagation();">&times;</span>
		<img class="modal-content" id="modalImage">
		<div class="modal-hint">Ketuk di mana saja untuk menutup</div>
	</div>

	<script>
		function gtag_report_conversion(url) {
			var callback = function() {
				if (typeof(url) != 'undefined') {
					window.location = url;
				}
			};
			gtag('event', 'conversion', {
				'send_to': 'AW-17937206261/bXTJCO6Lk_QbEPWXkOlC',
				'value': 1.0,
				'currency': 'IDR',
				'event_callback': callback
			});
			return false;
		}
	</script>

	<script>
		function openModal() {
			const modal = document.getElementById('imageModal');
			const modalImg = document.getElementById('modalImage');
			const img = document.getElementById('promoImage');

			modal.style.display = 'block';
			modalImg.src = img.src;
			document.body.style.overflow = 'hidden';
		}

		function closeModal() {
			const modal = document.getElementById('imageModal');
			modal.style.display = 'none';
			document.body.style.overflow = 'auto';
		}

		// Close modal dengan tombol ESC
		document.addEventListener('keydown', function(event) {
			if (event.key === 'Escape') {
				closeModal();
			}
		});

		// Prevent touch scroll in modal
		document.getElementById('imageModal').addEventListener('touchmove', function(e) {
			e.preventDefault();
		}, {
			passive: false
		});
	</script>
	<script>
		// GTM Event Tracking - Promo Page
		window.dataLayer = window.dataLayer || [];

		// CTA Click Tracking
		document.querySelectorAll('[data-gtm-cta]').forEach(function(link) {
			link.addEventListener('click', function() {
				window.dataLayer.push({
					event: 'cta_click',
					event_category: 'CTA',
					event_label: this.getAttribute('data-gtm-cta'),
					wa_number: (this.href.match(/wa\.me\/(\d+)/) || [])[1] || ''
				});
			});
		});
	</script>
</body>

</html>