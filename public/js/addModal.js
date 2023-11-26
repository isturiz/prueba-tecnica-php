// addModal.js
function updateTable() {
  fetch('index.php?action=getUpdatedSellers') // Cambia 'ajax.php' por la ruta correcta de tu controlador AJAX
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const tableBody = document.querySelector('table tbody');
        tableBody.innerHTML = '';

        data.sellers.forEach(seller => {
          const row = `<tr class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          ${seller.primer_nombre} ${seller.primer_apellido}
                        </th>
                        <td class="px-6 py-4">
                          ${seller.cedula_rif}
                        </td>
                        <td class="px-6 py-4">
                          ${seller.telefono}
                        </td>
                      </tr>`;
          tableBody.innerHTML += row;
        });

        const searchResultMessage = document.querySelector('.search-result-message');
        searchResultMessage.textContent = 'Datos registrados exitosamente';
        searchResultMessage.classList.remove('hidden');

        // Close modal
        // const crudModal = document.getElementById('crud-modal');
        // crudModal.classList.add('hidden');
        // crudModal.hide()
      } else {
        console.error('Error al actualizar la tabla:', data.error);
      }
    })
    .catch(error => {
      console.error('Error en la solicitud AJAX:', error);
    });
}

document.getElementById('addSellerForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = new FormData(this);

  fetch('server-script.php', {
    method: 'POST',
    body: formData,
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        console.log('Registro insertado correctamente:', data.message);
        updateTable();
      } else {
        console.error('Error al insertar el registro:', data.error);
      }
    })
    .catch(error => {
      console.error('Error en la solicitud AJAX:', error);
    });
});
