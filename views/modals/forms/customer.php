<!-- Add -->
<button data-modal-target="customer-add-modal" data-modal-toggle="customer-add-modal" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
  </svg>
  Nuevo cliente
</button>

<!-- Main modal -->
<div id="customer-add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-2xl shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
          Añadir nuevo cliente
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="customer-add-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Cerrar modal</span>
        </button>
      </div>

      <!-- Modal body -->
      <form id="addCustomerForm" class="p-4 md:p-5" method="POST" action="ajax/customer-form.php">

        <div class="grid gap-4 mb-4 grid-cols-2">

          <div class="col-span-2 sm:col-span-1">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Nombre</label>
            <input type="text" name="first_name" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre" required="" data-validate-only-letters="true">
          </div>

          <div class="col-span-2 sm:col-span-1">
            <label for="first_surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Apellido</label>
            <input type="text" name="first_surname" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Apellido" required="" data-validate-only-letters="true">
          </div>

          <div class="col-span-2 sm:col-span-1">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico</label>
            <input type="email" name="email" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Cédula o Rif" required="">
          </div>

          <div class="col-span-2 sm:col-span-1">
            <label for="identify_rif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cédula o Rif</label>
            <input data-validate-only-identify="true" type="text" name="identify_rif" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Cédula o Rif" required="">
          </div>

          <div class="col-span-2 sm:col-span-1">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
            <input type="text" name="phone" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Número de teléfono" required="" data-validate-only-numbers="true">
          </div>

          <div class="col-span-2 sm:col-span-1">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
            <input type="text" name="address" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Dirección" required="">
          </div>

        </div>

        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
          </svg>
          Añadir
        </button>

      </form>
    </div>
  </div>
</div>