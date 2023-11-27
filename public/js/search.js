document.addEventListener("DOMContentLoaded", function () {
  const tableSearches = document.querySelectorAll(".table-search");

  function filterTable(searchInput) {
    const searchText = searchInput.value.trim().toLowerCase();
    let matchCount = 0;

    const table = document.getElementById(searchInput.dataset.searchable);
    console.log(table.id)
    const resultMessageContainer = document.querySelector(`[data-result-message="${table.id}"]`);
    console.log(resultMessageContainer)
    if (!resultMessageContainer) {
      console.error(`No se encontró el contenedor de mensajes para ${table.id}`);
      return;
    }

    const tableRows = table.querySelectorAll("tbody tr");

    tableRows.forEach(function (row) {
      const rowData = row.textContent.toLowerCase();

      if (rowData.includes(searchText)) {
        row.style.display = "";
        matchCount++;
      } else {
        row.style.display = "none";
      }
    });

    if (searchText === "") {
      resultMessageContainer.textContent = "";
      resultMessageContainer.classList.add('hidden');
    } else if (matchCount > 0) {
      resultMessageContainer.textContent = `Se encontraron ${matchCount} coincidencias.`;
      resultMessageContainer.classList.remove('hidden');
    } else {
      resultMessageContainer.textContent = "No se encontraron coincidencias.";
      resultMessageContainer.classList.remove('hidden');
    }
  }

  tableSearches.forEach((searchInput) => {
    searchInput.addEventListener("input", function () {
      filterTable(searchInput);
    });
  });
});
