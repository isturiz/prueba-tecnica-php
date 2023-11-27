<?php
// controllers/sale.php
require_once 'models/sale.php';

class SalesController
{
  private $saleModel;

  public function __construct($db)
  {
    $this->saleModel = new SaleModel($db);
  }

  public function showSales()
  {
    $sales = $this->saleModel->getSales();

    // Obtener el total de ventas por vendedor
    $totalSalesAmountBySeller = $this->saleModel->getTotalSalesByAllSellers();

    $totalNumberOfSalesBySaller = $this->saleModel->getNumberOfSalesByAllSellers();

    $topThreeProductsBySeller = $this->saleModel->getTopThreeProductsBySeller();

    // Añadir el total de ventas por vendedor a cada venta
    foreach ($sales as &$sale) {
      $sale['total_ventas'] = $totalSalesAmountBySeller[$sale['id_vendedor']];
    }


    

    include 'views/modals/stats/seller.php';


    // Aquí puedes devolver o incluir la vista según tus necesidades
    // include 'views/sales.php';
  }
}
