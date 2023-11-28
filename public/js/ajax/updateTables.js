// Update customer table
function updateCustomerTable() {
  fetch('index.php?action=getUpdatedCustomers')
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const tableBody = document.querySelector('#customerTable tbody');
        const elemCount = document.getElementById("customers-count")
        tableBody.innerHTML = '';


        data.response.forEach(customer => {
          const row = `<tr class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          ${customer.primer_nombre} ${customer.primer_apellido}
                        </th>
                        <td class="px-6 py-4">
                          ${customer.correo_electronico}
                        </td>
                        <td class="px-6 py-4">
                          ${customer.cedula_rif}
                        </td>
                        <td class="px-6 py-4">
                          ${customer.telefono}
                        </td>
                        <td class="px-6 py-4">
                          ${customer.direccion}
                        </td>
                        <td class="px-6 py-4">
                          <button class="text-red-600 hover:text-red-800" onclick="deleteCustomer(${customer.id_customer})">
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
          elemCount.innerHTML = data.response.length;
        });

        const searchResultMessage = document.querySelector('.message-customer-table');
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


// Update seller table
function updateSellerTable() {
  fetch('index.php?action=getUpdatedSellers')
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const tableBody = document.querySelector('#sellerTable tbody');
        const elemCount = document.getElementById("sellers-count")

        tableBody.innerHTML = '';

        data.response.forEach(seller => {
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
                        <td class="px-6 py-4">
                          <button class="text-red-600 hover:text-red-800" onclick="deleteSeller(${seller.id_vendedor})">
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
          elemCount.innerHTML = data.response.length;

        });

        const searchResultMessage = document.querySelector('.message-seller-table');
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
      console.error('Error en la solicitud AJAX 1:', error);
    });
}


// Update product table
function updateProductTable() {
  fetch('index.php?action=getUpdatedProducts')
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const tableBody = document.querySelector('#productTable tbody');
        const elemCount = document.getElementById("products-count")

        tableBody.innerHTML = '';

        data.response.forEach(product => {
          const row = `<tr class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          ${product.nombre}
                        </th>
                        <td class="px-6 py-4">
                          ${product.precio_base}
                        </td>
                        <td class="px-6 py-4">
                          ${product.id_categoria}
                        </td>
                        <td class="px-6 py-4">
                          <button class="text-red-600 hover:text-red-800" onclick="deleteProduct(${product.id_producto})">
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
          elemCount.innerHTML = data.response.length;

        });

        const searchResultMessage = document.querySelector('.message-product-table');
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
      console.error('Error en la solicitud AJAX 1:', error);
    });
}

function updateCategoryProductTable() {
  fetch('index.php?action=getUpdatedCategoryProducts')
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const tableBody = document.querySelector('#categoryProductTable tbody');
        const elemCount = document.getElementById("category-products-count")

        tableBody.innerHTML = '';

        data.response.forEach(categoryProduct => {
          const row = `<tr class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          ${categoryProduct.id_categoria}
                        </th>
                        <td class="px-6 py-4">
                          ${categoryProduct.nombre}
                        </td>
                        <td class="px-6 py-4">
                          <button class="text-red-600 hover:text-red-800" onclick="deleteCategoryProduct(${categoryProduct.id_categoria})">
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
          elemCount.innerHTML = data.response.length;

        });

        const searchResultMessage = document.querySelector('.message-category-product-table');
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
      console.error('Error en la solicitud AJAX 1:', error);
    });
}
