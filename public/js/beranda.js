const heroImageElement = document.querySelector('.hero-image');
const firstHeroImageUrl = heroImageElement?.dataset.heroImage;
const secondHeroImageUrl = heroImageElement?.dataset.machineImage;
const thirdHeroImageUrl = heroImageElement?.dataset.shirtImage;
const machinesUrl = document.querySelector('#primary-action')?.dataset.machinesUrl ?? '#';
const slides = [
	{
		image: firstHeroImageUrl,
		alt: 'Mesin digital printing CIHOPRINTSHOP',
		eyebrow: 'Produksi digital printing',
		titleMain: 'Hasil cetak',
		titleAccent: 'berkualitas.',
		description: 'Proses cetak profesional untuk kebutuhan promosi, bisnis, dan personal.',
		services: [],
		actionLabel: 'Lihat Mesin',
		actionUrl: machinesUrl
	},
	{
		image: secondHeroImageUrl,
		alt: 'Mesin flatbed untuk proses cetak digital di CIHOPRINTSHOP',
		eyebrow: 'Teknologi cetak',
		titleMain: 'Cetak presisi',
		titleAccent: 'untuk ide besar.',
		description: 'Dari media promosi hingga produk custom, setiap detail dikerjakan dengan teliti.',
		services: [],
		actionLabel: 'Lihat Mesin',
		actionUrl: machinesUrl
	},
	{
		image: thirdHeroImageUrl,
		alt: 'Kaos custom dengan hasil cetak warna-warni CIHOPRINTSHOP',
		eyebrow: 'Produk custom',
		titleMain: 'Kaos dengan',
		titleAccent: 'desainmu.',
		description: 'Cetak pakaian custom untuk komunitas, acara, dan kebutuhan promosi.',
		services: [],
		actionLabel: 'Lihat Produk',
		actionUrl: '#produk-populer'
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

	const bannerCarousel = document.querySelector('[data-banner-carousel]');

	if (bannerCarousel) {
		const bannerImages = [...bannerCarousel.querySelectorAll('[data-banner-slide]')];
		const bannerDots = [...bannerCarousel.querySelectorAll('[data-banner-index]')];
		const bannerArrows = [...bannerCarousel.querySelectorAll('[data-banner-direction]')];
		const bannerReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
		let activeBannerIndex = Math.max(0, bannerImages.findIndex((image) => image.classList.contains('is-active')));
		let bannerAutoplayTimer = null;

		function stopBannerAutoplay() {
			window.clearInterval(bannerAutoplayTimer);
			bannerAutoplayTimer = null;
		}

		function scheduleBannerAutoplay() {
			stopBannerAutoplay();
			if (bannerImages.length < 2 || document.hidden || bannerReducedMotion.matches || bannerCarousel.matches(':hover, :focus-within')) return;

			bannerAutoplayTimer = window.setInterval(() => {
				showBannerImage(activeBannerIndex + 1);
			}, 3000);
		}

		function showBannerImage(index) {
			activeBannerIndex = (index + bannerImages.length) % bannerImages.length;
			bannerImages.forEach((image, imageIndex) => {
				const isActive = imageIndex === activeBannerIndex;
				image.classList.toggle('is-active', isActive);
				image.setAttribute('aria-hidden', String(!isActive));
			});
			bannerDots.forEach((dot, dotIndex) => {
				dot.setAttribute('aria-current', String(dotIndex === activeBannerIndex));
			});
		}

		showBannerImage(activeBannerIndex);
		bannerArrows.forEach((button) => {
			button.addEventListener('click', () => {
				showBannerImage(activeBannerIndex + (button.dataset.bannerDirection === 'next' ? 1 : -1));
				scheduleBannerAutoplay();
			});
		});
		bannerDots.forEach((dot) => {
			dot.addEventListener('click', () => {
				showBannerImage(Number(dot.dataset.bannerIndex));
				scheduleBannerAutoplay();
			});
		});
		bannerCarousel.addEventListener('mouseenter', stopBannerAutoplay);
		bannerCarousel.addEventListener('mouseleave', scheduleBannerAutoplay);
		bannerCarousel.addEventListener('focusin', stopBannerAutoplay);
		bannerCarousel.addEventListener('focusout', scheduleBannerAutoplay);
		document.addEventListener('visibilitychange', scheduleBannerAutoplay);
		bannerReducedMotion.addEventListener('change', scheduleBannerAutoplay);
		scheduleBannerAutoplay();
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
