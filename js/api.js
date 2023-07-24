// Esperamos a que el documento esté completamente cargado antes de ejecutar el código
document.addEventListener('DOMContentLoaded', () => {
    // Obtenemos una referencia al elemento con el ID "data-container"
    const dataContainer = document.getElementById('data-container');

    // URL de la API de PlugShare
    const apiUrl = 'https://www.plugshare.com/es';

    // Realizamos la solicitud GET a la API utilizando fetch (puedes usar también axios)
    fetch(apiUrl)
        .then(response => {
            // Verificamos si la respuesta es exitosa (código de estado 200)
            if (!response.ok) {
                throw new Error('La solicitud a la API no fue exitosa.');
            }
            // Parseamos la respuesta como JSON
            return response.json();
        })
        .then(data => {
            // La respuesta de la API está en la variable "data"
            // Aquí puedes manipular los datos obtenidos y mostrarlos en la página
            const locations = data.locations;
            let html = '<ul>';
            locations.forEach(location => {
                html += `<li>${location.name} - ${location.address}</li>`;
            });
            html += '</ul>';
            dataContainer.innerHTML = html;
        })
        .catch(error => {
            // Manejo de errores
            console.error(error);
            dataContainer.innerHTML = 'Error al obtener los datos de la API.';
        });
});