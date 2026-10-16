export function setupCategoryFilter(containerSelector, itemSelector) {
	const filterContainer = document.querySelector(containerSelector);
	if (!filterContainer) return;

	const filterButtons = filterContainer.querySelectorAll('.filter-btn');
	const items = document.querySelectorAll(itemSelector);

	filterButtons.forEach((button) => {
		button.addEventListener('click', () => {
			const targetFilter = button.dataset.filter;

			filterButtons.forEach((filterButton) => filterButton.classList.remove('is-active'));
			button.classList.add('is-active');

			items.forEach((item) => {
				if (targetFilter === 'all' || item.dataset.category === targetFilter) {
					item.style.display = '';
					item.style.opacity = '1';
				} else {
					item.style.display = 'none';
				}
			});
		});
	});
}
