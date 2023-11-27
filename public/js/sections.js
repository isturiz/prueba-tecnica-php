
const sectionIds = {
  sellers: 'sellers-section',
  products: 'products-section',
  customers: 'customers-section',
};

const linkIds = {
  sellers: 'sellers-link',
  products: 'products-link',
  customers: 'customers-link',
};

const simpleIds = {
  sellers: 'sellers',
  products: 'products',
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

  section.classList.remove('hidden');
  link.classList.add('bg-white');
  link.classList.add('dark:bg-gray-600');

};

window.addEventListener('load', () => {
  const fragment = window.location.hash.substring(1);
  if (Object.keys(sectionIds).includes(fragment)) {
    showSection(fragment);
  }
});

window.addEventListener('hashchange', () => {
  const fragment = window.location.hash.substring(1);
  if (Object.keys(sectionIds).includes(fragment)) {
    showSection(fragment);
  }
});


document.getElementById(linkIds.sellers).addEventListener('click', () => showSection(simpleIds.sellers));
document.getElementById(linkIds.products).addEventListener('click', () => showSection(simpleIds.products));
document.getElementById(linkIds.customers).addEventListener('click', () => showSection(simpleIds.customers));
