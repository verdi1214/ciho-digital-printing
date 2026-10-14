const machineImageUrl = document.querySelector('.hero-image')?.dataset.machineImage;
const aboutUrl = document.querySelector('#primary-action')?.dataset.aboutUrl ?? '#';
const contactUrl = document.querySelector('#primary-action')?.dataset.contactUrl ?? '#';
const slides = [
	{
		image: machineImageUrl,
		alt: 'Mesin cetak digital CIHOPRINTSHOP',
		eyebrow: 'Solusi digital printing terpercaya',
		titleMain: 'CIHO',
		titleAccent: 'Digital Printing',
		description: '',
		services: [],
		actionLabel: 'Tentang Kami',
		actionUrl: aboutUrl
	},
	{
		image: '/images/hero-produk-kaos.png',
		alt: 'Kaos custom dan pakaian hasil cetak CIHOPRINTSHOP',
		eyebrow: 'Layanan utama',
		titleMain: 'Cetak untuk banyak',
		titleAccent: 'kebutuhan.',
		description: 'Banner, stiker, kemasan, hingga materi promosi untuk usaha dan acara.',
		services: ['Digital Printing', 'Large Format', 'Stiker & Kemasan'],
		actionLabel: 'Lihat Layanan',
		actionUrl: '#layanan-utama'
	},
	{
		image: 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=2200&q=88',
		alt: 'Produk cetak dan alat tulis dengan desain berwarna',
		eyebrow: 'Dari ide jadi nyata',
		titleMain: 'Wujudkan ide',
		titleAccent: 'jadi karya.',
		description: 'Konsultasikan kebutuhan cetak untuk promosi, produk, dan acara Anda.',
		services: [],
		actionLabel: 'Konsultasi',
		actionUrl: contactUrl
	}
];

const hero = document.querySelector('.hero');
const heroImage = document.querySelector('.hero-image');
const siteHeader = document.querySelector('.site-header');
const headerColorMarker = document.querySelector('#slide-title, .page-hero h1');

function updateHeaderScrollColor() {
	const headerBottom = siteHeader?.getBoundingClientRect().bottom ?? 0;
	const markerReachedHeader = headerColorMarker
		? headerColorMarker.getBoundingClientRect().top <= headerBottom
		: window.scrollY > 24;

	siteHeader?.classList.toggle('is-scrolled', markerReachedHeader);
}

window.addEventListener('scroll', updateHeaderScrollColor, { passive: true });
updateHeaderScrollColor();

if (hero && heroImage) {
	const dots = [...document.querySelectorAll('.slider-dot')];
	const sliderControls = document.querySelector('.slider-controls');
	const eyebrow = document.querySelector('#slide-eyebrow');
	const titleMain = document.querySelector('#slide-title-main');
	const titleAccent = document.querySelector('#slide-title-accent');
	const description = document.querySelector('#slide-description');
	const serviceList = document.querySelector('#slide-services');
	const serviceLabels = [...serviceList.querySelectorAll('strong')];
	const primaryAction = document.querySelector('#primary-action');
	const primaryActionLabel = document.querySelector('#primary-action-label');
	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
	const slideImages = slides.map((slide) => {
		if (!slide.image) return null;

		const image = new Image();
		image.src = slide.image;
		return image;
	});
	let activeSlide = 0;
	let autoplayTimer = null;

	function stopAutoplay() {
		window.clearInterval(autoplayTimer);
		autoplayTimer = null;
	}

	function scheduleAutoplay() {
		stopAutoplay();
		if (document.hidden || reducedMotion.matches || hero.matches(':hover, :focus-within')) return;

		autoplayTimer = window.setInterval(() => showSlide(activeSlide + 1), 3000);
	}

	function showSlide(index) {
		activeSlide = (index + slides.length) % slides.length;
		hero.classList.toggle('is-services', activeSlide === 1);
		const slide = slides[activeSlide];
		const image = slideImages[activeSlide];
		eyebrow.textContent = slide.eyebrow;
		titleMain.textContent = slide.titleMain;
		titleAccent.textContent = slide.titleAccent;
		description.textContent = slide.description;
		description.hidden = !slide.description;
		slide.services.forEach((service, index) => {
			serviceLabels[index].textContent = service;
		});
		serviceList.hidden = slide.services.length === 0;
		primaryActionLabel.textContent = slide.actionLabel;
		primaryAction.href = slide.actionUrl;
		if (image) {
			const requestedSlide = activeSlide;
			const applyImage = () => {
				if (requestedSlide !== activeSlide) return;
				heroImage.src = slide.image;
				heroImage.classList.remove('is-changing');
			};
			if (image.complete) {
				if (image.naturalWidth > 0) applyImage();
			} else {
				heroImage.classList.add('is-changing');
				image.onload = applyImage;
				image.onerror = () => {
					if (requestedSlide === activeSlide) heroImage.classList.remove('is-changing');
				};
			}
		} else {
			heroImage.classList.remove('is-changing');
		}
		heroImage.alt = slide.alt;
		dots.forEach((dot, dotIndex) => dot.setAttribute('aria-current', String(dotIndex === activeSlide)));
		scheduleAutoplay();
	}

	document.querySelectorAll('.slider-arrow').forEach((button) => {
		button.addEventListener('click', () => showSlide(activeSlide + (button.dataset.direction === 'next' ? 1 : -1)));
	});
	dots.forEach((dot, index) => dot.addEventListener('click', () => showSlide(index)));
	sliderControls.addEventListener('mouseenter', stopAutoplay);
	sliderControls.addEventListener('mouseleave', scheduleAutoplay);
	hero.addEventListener('mouseleave', scheduleAutoplay);
	hero.addEventListener('focusin', stopAutoplay);
	hero.addEventListener('focusout', scheduleAutoplay);
	document.addEventListener('visibilitychange', scheduleAutoplay);
	reducedMotion.addEventListener('change', scheduleAutoplay);
	scheduleAutoplay();
}

const menuToggle = document.querySelector('.menu-toggle');
const mainNav = document.querySelector('#main-nav');

if (menuToggle && mainNav) {
	menuToggle.addEventListener('click', () => {
		const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
		menuToggle.setAttribute('aria-expanded', String(!isOpen));
		menuToggle.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
		mainNav.classList.toggle('is-open', !isOpen);
	});
	mainNav.addEventListener('click', (event) => {
		if (event.target.closest('a')) {
			menuToggle.setAttribute('aria-expanded', 'false');
			menuToggle.setAttribute('aria-label', 'Buka menu');
			mainNav.classList.remove('is-open');
		}
	});
}

/* --- Interactive Filter Component (Materials & Project) --- */
function setupCategoryFilter(containerSelector, itemSelector) {
	const filterContainer = document.querySelector(containerSelector);
	if (!filterContainer) return;

	const filterButtons = filterContainer.querySelectorAll('.filter-btn');
	const items = document.querySelectorAll(itemSelector);

	filterButtons.forEach((btn) => {
		btn.addEventListener('click', () => {
			const targetFilter = btn.dataset.filter;

			filterButtons.forEach((b) => b.classList.remove('is-active'));
			btn.classList.add('is-active');

			items.forEach((item) => {
				const itemCategory = item.dataset.category;
				if (targetFilter === 'all' || itemCategory === targetFilter) {
					item.style.display = '';
					item.style.opacity = '1';
				} else {
					item.style.display = 'none';
				}
			});
		});
	});
}

setupCategoryFilter('#materials-filter', '.material-card-v2');
setupCategoryFilter('#project-filter', '.project-card-v2');

/* --- Copy Address to Clipboard (Location Page) --- */
const copyAddressTrigger = document.querySelector('#copy-address-trigger');
const addressToast = document.querySelector('#address-toast');

if (copyAddressTrigger && addressToast) {
	let toastTimer = null;
	copyAddressTrigger.addEventListener('click', async () => {
		const addressText = 'CIHOPRINTSHOP Digital Printing – Jl. Radio Dalam Raya No.F3A, RT.5/RW.4, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140. Buka setiap hari 08.00–24.00 WIB.';
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
		} catch (err) {
			console.error('Gagal menyalin alamat:', err);
		}
	});
}
