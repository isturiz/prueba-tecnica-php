document.getElementById('addSellerForm').addEventListener('submit', function (event) {
  event.preventDefault(); // Evitar el envío del formulario tradicional

  // Recopilar datos del formulario
  const formData = new FormData(this);

  // Realizar la solicitud AJAX
  fetch('server-script.php', {
    method: 'POST',
    body: formData,
  })
    .then(response => response.json()) // Suponiendo que el servidor responde con JSON
    .then(data => {
      // Manejar la respuesta del servidor
      if (data.success) {
        // Actualizar la tabla o realizar otras acciones necesarias
        console.log('Registro insertado correctamente:', data.message);
        // Puedes utilizar esta sección para actualizar la tabla dinámicamente
      } else {
        console.error('Error al insertar el registro:', data.error);
      }
    })
    .catch(error => {
      console.error('Error en la solicitud AJAX:', error);
    });
});


