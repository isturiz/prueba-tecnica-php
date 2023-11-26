// ajax/customers.js
function updateTable() {
  fetch('index.php?action=getUpdatedCustomers') // Cambia 'ajax.php' por la ruta correcta de tu controlador AJAX
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const tableBody = document.querySelector('table tbody');
        tableBody.innerHTML = '';

        data.customers.forEach(customer => {
          const row = `<tr class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          ${customer.primer_nombre} ${customer.primer_apellido}
                        </th>
                        <td class="px-6 py-4">
                          ${customer.cedula_rif}
                        </td>
                        <td class="px-6 py-4">
                          ${customer.telefono}
                        </td>
                        <td class="px-6 py-4">
                          <button class="text-red-600 hover:text-red-800" onclick="deleteCustomer(<?= $customer['id_vendedor']; ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M4 7h16" />
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                              <path d="M10 12l4 4m0 -4l-4 4" />
                            </svg>
                          </button>
                        </td>
                      </tr>`;
          tableBody.innerHTML += row;
        });

        const searchResultMessage = document.querySelector('.search-result-message');
        searchResultMessage.textContent = 'Datos actualizados exitosamente';
        searchResultMessage.classList.remove('hidden');

        // Close modal <- fix this
        // const closeButton = document.querySelector('[data-modal-target="crud-modal"]');
        // closeButton.click();
      } else {
        console.error('Error al actualizar la tabla:', data.error);
      }
    })
    .catch(error => {
      console.error('Error en la solicitud AJAX:', error);
    });
}

function deleteCustomer(customerId) {
  console.log(customerId)
  if (confirm('¿Estás seguro de que quieres eliminar este vendedor?')) {
    fetch(`ajax/delete-customer.php?id_vendedor=${customerId}`, {
      method: 'DELETE',
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          console.log('Vendedor eliminado correctamente:', data.message);
          updateTable();
        } else {
          console.error('Error al eliminar el vendedor:', data.error);
        }
      })
      .catch(error => {
        console.error('Error en la solicitud AJAX:', error);
      });
  }
}

document.getElementById('addCustomerForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = new FormData(this);

  fetch('ajax/add-customer.php', {
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
