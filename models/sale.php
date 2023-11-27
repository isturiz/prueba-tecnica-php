<?php
// models/sale.php

require_once 'models/connexion.php';

class SaleModel extends BaseModel
{
  public function getSales()
  {
    $query = "SELECT * FROM ventas";
    $errorMessage = "Error to get sales: ";
    return $this->fetchData($query, $errorMessage);
  }

  public function getTotalSalesByAllSellers()
  {
    $query = "SELECT id_vendedor, SUM(total) as total_ventas FROM ventas GROUP BY id_vendedor";
    $errorMessage = "Error to get total sales by all sellers: ";
    $result = $this->fetchData($query, $errorMessage);

    $totals = [];
    foreach ($result as $row) {
      $totals[$row['id_vendedor']] = $row['total_ventas'];
    }

    return $totals;
  }

  public function getNumberOfSalesByAllSellers()
  {
    $query = "SELECT id_vendedor, COUNT(*) as total_ventas FROM ventas GROUP BY id_vendedor";
    $errorMessage = "Error to get number of sales by all sellers: ";
    $result = $this->fetchData($query, $errorMessage);

    $totals = [];
    foreach ($result as $row) {
      $totals[$row['id_vendedor']] = $row['total_ventas'];
    }

    return $totals;
  }
  public function getTopThreeProductsBySeller()
  {
    $query = "
      SELECT 
        v.id_vendedor,
        p.nombre AS nombre_producto,
        SUM(dv.cantidad) AS cantidad_ventas,
        COUNT(v.id_venta) AS total_ventas
      FROM detalles_venta dv
      JOIN ventas v ON dv.id_venta = v.id_venta
      JOIN productos p ON dv.id_producto = p.id_producto
      GROUP BY v.id_vendedor, p.nombre
      ORDER BY v.id_vendedor, cantidad_ventas DESC
    ";

    $errorMessage = "Error to get top three products by seller: ";
    $result = $this->fetchData($query, $errorMessage);

    $topProducts = [];
    foreach ($result as $row) {
      $vendedorId = $row['id_vendedor'];
      $producto = [
        'nombre_producto' => $row['nombre_producto'],
        'cantidad_ventas' => $row['cantidad_ventas'],
        'total_ventas' => $row['total_ventas']
      ];

      if (!isset($topProducts[$vendedorId])) {
        $topProducts[$vendedorId] = [];
      }

      // Asegúrate de que solo guardas los tres productos más vendidos
      if (count($topProducts[$vendedorId]) < 3) {
        $topProducts[$vendedorId][] = $producto;
      }
    }

    return $topProducts;
  }
}
