const copyAddressTrigger = document.querySelector('#copy-address-trigger');
const addressToast = document.querySelector('#address-toast');

if (copyAddressTrigger && addressToast) {
	let toastTimer = null;
	copyAddressTrigger.addEventListener('click', async () => {
		const addressText = 'CIHOPRINTSHOP Digital Printing – Jl. Radio Dalam Raya No.F3A, RT.5/RW.4, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140. Buka setiap hari 08.00–23.59 WIB.';
		try {
			if (navigator.clipboard && window.isSecureContext) {
				await navigator.clipboard.writeText(addressText);
			} else {
				const tempInput = document.createElement('textarea');
				tempInput.value = addressText;
				document.body.appendChild(tempInput);
				tempInput.select();
				document.execCommand('copy');
				document.body.removeChild(tempInput);
			}

			const label = document.querySelector('#copy-btn-label');
			if (label) label.textContent = '✓ Alamat Berhasil Disalin';

			addressToast.classList.add('is-visible');
			clearTimeout(toastTimer);
			toastTimer = setTimeout(() => {
				addressToast.classList.remove('is-visible');
				if (label) label.textContent = 'Salin Alamat Lengkap';
			}, 3200);
		} catch (error) {
			console.error('Gagal menyalin alamat:', error);
		}
	});
}
