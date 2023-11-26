<div class="relative overflow-x-auto hidden" id="sellers-section">



  <div>
    <!-- first section -->
    <div class="flex py-3 flex-row lg:items-center justify-between space-y-0 space-x-4">
      <div class="flex items-center flex-1 space-x-4">
        <h5>
          <span class="text-gray-500 dark:text-gray-300">Número de vendedores</span>
          <span class="dark:text-white">0</span>
        </h5>
      </div>
    </div>

    <!-- second section -->
    <div class="flex flex-row w-full items-center justify-between pb-4">
      <div class="flex py-3 flex-row items-center justify-between space-y-0 space-x-4">
        <div>
          <label for="sellers-search" class="sr-only">Buscar</label>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input type="text" id="sellers-search" name="sellers-search" class="table-search block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" aria-label="Buscar">
          </div>
        </div>
      </div>


      <!-- Add -->
      <button data-modal-target="seller-add-modal" data-modal-toggle="seller-add-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Nuevo vendedor
      </button>

      <!-- Main modal -->
      <div id="seller-add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Añadir nuevo vendedor
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="seller-add-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Cerrar modal</span>
              </button>
            </div>

            <!-- Modal body -->
            <form id="addSellerForm" class="p-4 md:p-5" method="POST" action="ajax/seller-form.php">
              <div class="grid gap-4 mb-4 grid-cols-2">

                <div class="col-span-2 sm:col-span-1">
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Nombre</label>
                  <input type="text" name="first_name" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre" required="">
                </div>

                <div class="col-span-2 sm:col-span-1">
                  <label for="first_surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Apellido</label>
                  <input type="text" name="first_surname" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Apellido" required="">
                </div>


                <div class="col-span-2 sm:col-span-1">
                  <label for="identify_rif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cédula o Rif</label>
                  <input type="text" name="identify_rif" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Cédula o Rif" required="">
                </div>

                <div class="col-span-2 sm:col-span-1">
                  <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                  <input type="text" name="phone" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Número de teléfono" required="">
                </div>

              </div>

              <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                </svg>
                Añadir
              </button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div id="sellers-section">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" data-searchable>
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Nombre
          </th>
          <th scope="col" class="px-6 py-3">
            cedula/rif
          </th>
          <th scope="col" class="px-6 py-3">
            telefono
          </th>
          <th scope="col" class="px-6 py-3">
            Acción
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($sellers as $seller) : ?>
          <tr class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              <?= $seller['primer_nombre']; ?> <?= $seller['primer_apellido']; ?>
            </th>
            <td class="px-6 py-4">
              <?= $seller['cedula_rif']; ?>
            </td>
            <td class="px-6 py-4">
              <?= $seller['telefono']; ?>
            </td>
            <td class="px-6 py-4">
              <button class="text-red-600 hover:text-red-800" onclick="deleteSeller(<?= $seller['id_vendedor']; ?>)">
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
    <p class="search-result-message pt-4 pl-4 text-sm text-gray-800 hidden font-medium"></p>
  </div>


</div>