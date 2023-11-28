<div class="relative overflow-x-auto hidden" id="products-section">

  <div>
    <!-- first section -->
    <div class="flex py-3 flex-row lg:items-center justify-between space-y-0 space-x-4">
      <div class="flex items-center flex-1 space-x-4">
        <h5>
          <span class="text-gray-500 dark:text-gray-300">Número de vendedores</span>
          <span class="dark:text-white" id="products-count"><?php echo count($products) ?></span>
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
            <input type="text" id="products-search" name="products-search" class="table-search block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" aria-label="Buscar" data-searchable="productTable">

          </div>
        </div>
      </div>


      <?php include_once 'modals/forms/product.php' ?>
    </div>
  </div>

  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" data-searchable id="productTable">

    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          Nombre
        </th>
        <th scope="col" class="px-6 py-3">
          Precio Base
        </th>
        <th scope="col" class="px-6 py-3">
          +IVA
        </th>
        <th scope="col" class="px-6 py-3">
          Categoría
        </th>
        <th scope="col" class="px-6 py-3">
          Acción
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) : ?>

        <?php
        $precioBase = $product['precio_base'];
        $iva = $precioBase * 0.16;
        $precioConIVA = $precioBase + $iva;
        ?>

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            <?= $product['nombre']; ?>

          </th>
          <td class="px-6 py-4">
            <?= "$" . $product['precio_base']; ?>
          </td>
          <td class="px-6 py-4">
            <?= "$" . number_format($precioConIVA, 2) ?>
          </td>
          <td class="px-6 py-4">
            <?= $product['id_categoria']; ?> - <?= $product['nombre_categoria']; ?>
          </td>
          <td class="px-6 py-4">
            <button class="text-red-600 hover:text-red-800" onclick="deleteProduct(<?= $product['id_producto']; ?>)">
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
  <p class="search-result-message pt-4 pl-4 text-sm text-gray-800 dark:text-gray-200 hidden font-medium" data-result-message="productTable"></p>
  <p class="message-product-table pt-4 pl-4 text-sm text-gray-800 dark:text-gray-200 hidden font-medium"></p>


</div>