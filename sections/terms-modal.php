<!-- Modal Terms & Conditions (Root Level for Proper Z-Index) -->
<div id="termsModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4" style="z-index: 9999;">
	<div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
		<div class="sticky top-0 bg-gradient-to-r from-blue-600 to-blue-800 text-white p-6 rounded-t-2xl">
			<div class="flex justify-between items-center">
				<h3 class="text-xl md:text-2xl font-bold" id="modalTitle">Syarat & Ketentuan</h3>
				<button onclick="closeTermsModal()" class="text-white hover:text-gray-200 text-3xl leading-none">&times;</button>
			</div>
		</div>
		<div class="p-6 md:p-8" id="modalContent">
			<!-- Content will be dynamically loaded here -->
		</div>
	</div>
</div>