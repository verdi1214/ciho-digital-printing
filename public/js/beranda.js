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
		slide.services.forEach((service, serviceIndex) => {
			serviceLabels[serviceIndex].textContent = service;
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

	const featureCarousel = document.querySelector('.feature-carousel');

	if (featureCarousel) {
		const featureSlides = [...featureCarousel.querySelectorAll('.feature-carousel-slide')];
		const featureDots = [...featureCarousel.querySelectorAll('.feature-carousel-dot')];
		const featureReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
		let activeFeatureSlide = 0;
		let featureAutoplayTimer = null;

		function stopFeatureAutoplay() {
			window.clearInterval(featureAutoplayTimer);
			featureAutoplayTimer = null;
		}

		function scheduleFeatureAutoplay() {
			stopFeatureAutoplay();
			if (document.hidden || featureReducedMotion.matches || featureCarousel.matches(':hover, :focus-within')) return;

			featureAutoplayTimer = window.setInterval(() => showFeatureSlide(activeFeatureSlide + 1), 5000);
		}

		function showFeatureSlide(index) {
			activeFeatureSlide = (index + featureSlides.length) % featureSlides.length;
			featureSlides.forEach((slide, slideIndex) => {
				slide.hidden = slideIndex !== activeFeatureSlide;
			});
			featureDots.forEach((dot, dotIndex) => {
				dot.setAttribute('aria-current', String(dotIndex === activeFeatureSlide));
			});
			scheduleFeatureAutoplay();
		}

		featureCarousel.querySelectorAll('.feature-carousel-arrow').forEach((button) => {
			button.addEventListener('click', () => {
				showFeatureSlide(activeFeatureSlide + (button.dataset.direction === 'next' ? 1 : -1));
			});
		});
		featureDots.forEach((dot, index) => {
			dot.addEventListener('click', () => showFeatureSlide(index));
		});
		featureCarousel.addEventListener('mouseenter', stopFeatureAutoplay);
		featureCarousel.addEventListener('mouseleave', scheduleFeatureAutoplay);
		featureCarousel.addEventListener('focusin', stopFeatureAutoplay);
		featureCarousel.addEventListener('focusout', scheduleFeatureAutoplay);
		document.addEventListener('visibilitychange', scheduleFeatureAutoplay);
		featureReducedMotion.addEventListener('change', scheduleFeatureAutoplay);
		scheduleFeatureAutoplay();
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
