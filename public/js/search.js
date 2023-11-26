document.addEventListener("DOMContentLoaded", function () {
  const tableSearches = document.querySelectorAll(".table-search");
  const tables = document.querySelectorAll("[data-searchable]");
  const resultMessages = document.querySelectorAll(".search-result-message");

  function filterTable(searchInput, table, resultMessage) {
    const searchText = searchInput.value.trim().toLowerCase();
    let matchCount = 0;

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
      resultMessage.textContent = "";
      resultMessage.classList.add('hidden');
    } else if (matchCount > 0) {
      resultMessage.textContent = `Se encontraron ${matchCount} coincidencias.`;
      resultMessage.classList.remove('hidden');
    } else {
      resultMessage.textContent = "No se encontraron coincidencias.";
      resultMessage.classList.remove('hidden');
    }
  }

  tableSearches.forEach((searchInput, index) => {
    const table = tables[index];
    const resultMessage = resultMessages[index];

    searchInput.addEventListener("input", function () {
      filterTable(searchInput, table, resultMessage);
    });
  });
});
