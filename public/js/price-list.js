const priceListGrid = document.querySelector('[data-price-grid]');
const priceListSearch = document.querySelector('[data-price-search]');
const priceListEmptyState = document.querySelector('[data-price-empty]');
const priceListFilterButtons = document.querySelectorAll('[data-price-filter]');

if (priceListGrid && priceListSearch && priceListEmptyState) {
	const priceListCards = Array.from(priceListGrid.querySelectorAll('[data-price-category]'));
	let activeCategory = 'all';

	const updatePriceList = () => {
		const searchTerm = priceListSearch.value.trim().toLowerCase();
		let visibleCards = 0;

		priceListCards.forEach((card) => {
			const matchesCategory = activeCategory === 'all' || card.dataset.priceCategory === activeCategory;
			const matchesSearch = card.textContent.toLowerCase().includes(searchTerm);
			const isVisible = matchesCategory && matchesSearch;

			card.hidden = !isVisible;
			visibleCards += Number(isVisible);
		});

		priceListEmptyState.hidden = visibleCards > 0;
	};

	priceListSearch.addEventListener('input', updatePriceList);

	priceListFilterButtons.forEach((button) => {
		button.addEventListener('click', () => {
			activeCategory = button.dataset.priceFilter;

			priceListFilterButtons.forEach((filterButton) => {
				filterButton.setAttribute('aria-pressed', String(filterButton === button));
			});

			updatePriceList();
		});
	});
}
