export function setupCountUp(selector) {
	const countElements = document.querySelectorAll(selector);

	if (countElements.length === 0 || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		return;
	}

	const formatCount = (count) => new Intl.NumberFormat('id-ID').format(count);
	const animationDuration = 3200;

	const animateCount = (element) => {
		const targets = element.dataset.count.split('-').map(Number);
		const startTime = performance.now();

		const updateCount = (currentTime) => {
			const progress = Math.min((currentTime - startTime) / animationDuration, 1);
			const easedProgress = 1 - (1 - progress) ** 3;
			const counts = targets.map((target) => Math.floor(target * easedProgress));

			element.textContent = counts.map(formatCount).join('-');

			if (progress < 1) {
				window.requestAnimationFrame(updateCount);
			} else {
				element.textContent = targets.map(formatCount).join('-');
			}
		};

		window.requestAnimationFrame(updateCount);
	};

	if ('IntersectionObserver' in window) {
		const observer = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					animateCount(entry.target);
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.4 });

		countElements.forEach((element) => {
			element.textContent = element.dataset.count.split('-').map(() => '0').join('-');
			observer.observe(element);
		});
	} else {
		countElements.forEach((element) => {
			element.textContent = element.dataset.count.split('-').map(() => '0').join('-');
			animateCount(element);
		});
	}
}
