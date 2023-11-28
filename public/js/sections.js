
const sectionIds = {
  sellers: 'sellers-section',
  products: 'products-section',
  categoryProducts: 'category-products-section',
  customers: 'customers-section',
};

const linkIds = {
  sellers: 'sellers-link',
  products: 'products-link',
  categoryProducts: 'category-products-link',
  customers: 'customers-link',
};

// Key access to sectionIds and LinkIds
const simpleIds = {
  sellers: 'sellers',
  products: 'products',
  categoryProducts: 'categoryProducts',
  customers: 'customers',
}

const hideAllSections = () => {
  // Remove all sections
  Object.values(sectionIds).forEach(sectionId => {
    const section = document.getElementById(sectionId);
    section.classList.add('hidden');
  });

  // Remove all fake hovers
  Object.values(linkIds).forEach(linkId => {
    const link = document.getElementById(linkId);
    link.classList.remove('bg-white');
    link.classList.remove('dark:bg-gray-600');
  });
}

const showSection = (sectionKey) => {
  hideAllSections();

  const sectionId = sectionIds[sectionKey];
  const linkId = linkIds[sectionKey];

  const section = document.getElementById(sectionId);
  const link = document.getElementById(linkId);

  if (section && link) {
    section.classList.remove('hidden');
    link.classList.add('bg-white');
    link.classList.add('dark:bg-gray-600');
  } else {
    console.error(`Element with ID ${sectionId} or ${linkId} not found`);
  }

};

// load current section
window.addEventListener('load', () => {
  let fragment = window.location.hash.substring(1);

  // Fix this, with kebab-case don't work (this is how hardcode works)
  if (fragment === "category-products") {
    fragment = simpleIds.categoryProducts;
    if (Object.keys(sectionIds).includes(fragment)) {
      showSection(fragment);
    }
  }
  else if (Object.keys(sectionIds).includes(fragment)) {
    showSection(fragment);
  }
});

// load correct section
window.addEventListener('hashchange', () => {
  let fragment = window.location.hash.substring(1);

  // Same, fix this, with kebab-case don't work (this is how hardcode works)
  if (fragment === "category-products") {
    fragment = simpleIds.categoryProducts;
    if (Object.keys(sectionIds).includes(fragment)) {
      showSection(fragment);
    }
  }
  else if (Object.keys(sectionIds).includes(fragment)) {
    showSection(fragment);
  }
});


document.getElementById(linkIds.sellers).addEventListener('click', () => showSection(simpleIds.sellers));
document.getElementById(linkIds.products).addEventListener('click', () => showSection(simpleIds.products));
document.getElementById(linkIds.categoryProducts).addEventListener('click', () => showSection(simpleIds.categoryProducts));
document.getElementById(linkIds.customers).addEventListener('click', () => showSection(simpleIds.customers));
