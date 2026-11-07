import { setupCategoryFilter } from './filter.js';
import { setupCountUp } from './count-up.js';

const materialsList = document.querySelector('#materials-list');

if (materialsList) {
	const materialSections = Array.from(materialsList.querySelectorAll('.material-category-section'));

	materialSections
		.sort((firstSection, secondSection) => Number(firstSection.dataset.sectionOrder) - Number(secondSection.dataset.sectionOrder))
		.forEach((section) => materialsList.append(section));
}

setupCategoryFilter('#materials-filter', '.material-category-section, .finishing-studio-section');
setupCountUp('.stat-count[data-count]');
