function submitForm(formId, url, updateTableFunction) {
  console.log(formId)
  document.getElementById(formId).addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch(url, {
      method: 'POST',
      body: formData,
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          console.log('Registro insertado correctamente:', data.message);
          updateTableFunction();
        } else {
          console.error('Error al insertar el registro:', data.error);
        }
      })
      .catch(error => {
        console.error('Error en la solicitud AJAX:', error);
      });
  });
}

// Example usage for adding a customer
submitForm('addCustomerForm', 'ajax/add-customer.php', updateCustomerTable);

// Example usage for adding a seller
submitForm('addSellerForm', 'ajax/add-seller.php', updateSellerTable);

submitForm('addProductForm', 'ajax/add-product.php', updateProductTable);
submitForm('addCategoryProductForm', 'ajax/add-category-product.php', updateCategoryProductTable);


