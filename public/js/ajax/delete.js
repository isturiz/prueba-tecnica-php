// Reusable function for deleting records
function deleteRecord(recordType, recordId, updateTableFunction) {
  if (confirm(`¿Estás seguro de que quieres eliminar este ${recordType}?`)) {
    console.log(`ajax/delete-${recordType}.php?id_${recordType}=${recordId}`)
    fetch(`ajax/delete-${recordType}.php?id_${recordType}=${recordId}`, {
      method: 'DELETE',
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          console.log(`${recordType} eliminado correctamente:`, data.message);
          updateTableFunction(); // Call the provided function to update the table
        } else {
          console.error(`Error al eliminar el ${recordType}:`, data.error);
        }
      })
      .catch(error => {
        console.error('Error en la solicitud AJAX:', error);
      });
  }
}

// Delete customer
function deleteCustomer(customerId) {
  deleteRecord('customer', customerId, updateCustomerTable);
}

// Delete seller
function deleteSeller(sellerId) {
  deleteRecord('seller', sellerId, updateSellerTable);
}

// Delete product
function deleteProduct(productId) {
  deleteRecord('product', productId, updateProductTable);
}