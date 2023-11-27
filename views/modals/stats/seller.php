<!-- Main modal -->

<?php //echo $totalSalesAmountBySeller[68] ?>
<?php
// Suponiendo que $topThreeProductsBySeller[1] es un array de productos
// $products = $topThreeProductsBySeller;

// echo '<br><br>' . json_encode($products) . '<br><br>';

// foreach ($products as $product) {
//   echo 'Nombre del Producto: ' . $product['nombre_producto'] . '<br>';
//   echo 'Cantidad de Ventas: ' . $product['cantidad_ventas'] . '<br><br>';
// }
?>

<div id="stats-seller-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Estadísticas del vendedor
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="stats-seller-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-4 md:p-5 space-y-4">
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          Total de Ventas (monto): <span id="total-sales-for-seller"></span>
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          Número de Ventas: <span id="number-of-sales"></span>
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          Producto más vendido: <span id="top-product-for-seller"></span>
        </p>

      </div>

    </div>
  </div>
</div>

<script>
  function openStatsModal(sellerId) {
    // Obtén el total de ventas del vendedor
    const totalSales = <?php echo json_encode($totalSalesAmountBySeller); ?>;
    const numberOfSales = <?php echo json_encode($totalNumberOfSalesBySaller); ?>;
    const topThreeProducts = <?php echo json_encode($topThreeProductsBySeller); ?>;

    console.log(topThreeProducts)

    const totalSalesSeller = totalSales[sellerId];
    const numberOfSalesSeller = numberOfSales[sellerId];
    const topThreeProductsBySeller = topThreeProducts[sellerId];

    console.log(numberOfSalesSeller);

    // Actualiza el contenido del modal con el total de ventas del vendedor
    if (totalSalesSeller) {
      document.getElementById('total-sales-for-seller').innerText = totalSalesSeller;
    } else {
      document.getElementById('total-sales-for-seller').innerText = 0;
    }
    if (numberOfSalesSeller) {
      document.getElementById('number-of-sales').innerText = numberOfSalesSeller;
    } else {
      document.getElementById('number-of-sales').innerText = 0;
    }

    // if (topThreeProductsBySeller) {
    //   document.getElementById('top-product-for-seller').innerText = topThreeProductsBySeller;
    // } else {
    //   document.getElementById('top-product-for-seller').innerText = 0;
    // }
    // Accede al div donde mostrarás los productos más vendidos
    const topProductsDiv = document.getElementById('top-product-for-seller');
    
    // Limpia el contenido actual
    topProductsDiv.innerHTML = '';

    // Itera sobre el array de productos y agrega la información al div
    if (topThreeProductsBySeller) {
      topThreeProductsBySeller.forEach(product => {
        const productName = product.nombre_producto;
        const salesCount = product.cantidad_ventas;
        const totalSalesCount = product.total_ventas;


        const productInfo = document.createElement('p');
        productInfo.innerText = `${productName}: cantidad vendida: ${salesCount}, ventas asociadas: ${totalSalesCount}`;

        topProductsDiv.appendChild(productInfo);
      });
    } else {
      // Si no hay productos, muestra un mensaje
      topProductsDiv.innerText = 'No hay productos registrados.';
    }
  }
</script>