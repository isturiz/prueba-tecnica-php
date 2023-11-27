<div class="relative overflow-x-auto hidden" id="customers-section">

  <div>
    <!-- first section -->
    <div class="flex py-3 flex-row lg:items-center justify-between space-y-0 space-x-4">
      <div class="flex items-center flex-1 space-x-4">
        <h5>
          <span class="text-gray-500 dark:text-gray-300">Número de clientes</span>
          <span class="dark:text-white">0</span>
        </h5>
      </div>
    </div>

    <!-- second section -->
    <div class="flex flex-row w-full items-center justify-between pb-4">

      <div class="flex py-3 flex-row items-center justify-between space-y-0 space-x-4">
        <div>
          <label for="customers-search" class="sr-only">Buscar</label>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input type="text" id="customers-search" name="customers-search" class="table-search block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" aria-label="Buscar">
          </div>
        </div>
      </div>


      <?php include_once 'modals/customer.php' ?>

    </div>




    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="customerTable" data-searchable>
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Cliente
          </th>
          <th scope="col" class="px-6 py-3">
            Correo Electrónico
          </th>
          <th scope="col" class="px-6 py-3">
            Cédula/Rif
          </th>
          <th scope="col" class="px-6 py-3">
            Teléfono
          </th>
          <th scope="col" class="px-6 py-3">
            Dirección
          </th>
          <th scope="col" class="px-6 py-3">
            Acción
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($customers as $customer) : ?>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              <?= $customer['primer_nombre']; ?> <?= $customer['primer_apellido']; ?>
            </th>
            <td class="px-6 py-4">
              <?= $customer['correo_electronico']; ?>
            </td>
            <td class="px-6 py-4">
              <?= $customer['cedula_rif']; ?>
            </td>
            <td class="px-6 py-4">
              <?= $customer['telefono']; ?>
            </td>
            <td class="px-6 py-4">
              <?= $customer['direccion']; ?>
            </td>

            <td class="px-6 py-4">
              <button class="text-red-600 hover:text-red-800" onclick="deleteCustomer(<?= $customer['id_cliente']; ?>)">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M4 7h16" />
                  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                  <path d="M10 12l4 4m0 -4l-4 4" />
                </svg>
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <p class="search-result-message pt-4 pl-4 text-sm text-gray-800 dark:text-gray-200 hidden font-medium"></p>
    <p class="message-customer-table pt-4 pl-4 text-sm text-gray-800 dark:text-gray-200 hidden font-medium"></p>


  </div>