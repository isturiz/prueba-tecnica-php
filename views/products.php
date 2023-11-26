<div class="relative overflow-x-auto hidden" id="products-section">

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
          <label for="products-search" class="sr-only">Buscar</label>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <input type="text" id="products-search" name="products-search" class="table-search block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" aria-label="Buscar">
          </div>
        </div>
      </div>


      <!-- Add -->
      <button type="button" onclick="window.location.href = ''" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
        </svg>
        Nuevo
      </button>
    </div>
  </div>

  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" data-searchable>

    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          Nombre
        </th>
        <th scope="col" class="px-6 py-3">
          Precio Base
        </th>
        <th scope="col" class="px-6 py-3">
          Categoría
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            <?= $product['nombre']; ?>
          </th>
          <td class="px-6 py-4">
            <?= $product['precio_base']; ?>
          </td>
          <td class="px-6 py-4">
            <?= $product['id_categoria']; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <p class="search-result-message pt-4 pl-4 text-sm text-gray-800 hidden font-medium"></p>

</div>