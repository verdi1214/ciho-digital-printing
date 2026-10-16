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
