

// Datos para el gráfico (ejemplo)
const data = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [{
        label: 'Ventas mensuales',
        data: [12, 19, 3, 5, 2],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
    }]
};

// Configuración del gráfico
const config = {
    type: 'bar',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

// Crear el gráfico
var myChart = new Chart(
    document.getElementById('myChart'),
    config
);


// Función para abrir la ventana modal
function openAddModal() {
    document.getElementById('modal').style.display = 'block';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

function submitCategory() {
    // Aquí puedes agregar la lógica para enviar los datos del formulario a tu servidor
    // Por ejemplo, puedes obtener los valores de los campos y realizar una solicitud AJAX
    // para enviarlos a tu backend y procesarlos.
    // Luego de procesar la solicitud, puedes cerrar la ventana modal.

    closeModal(); // Cerrar la ventana modal al guardar los datos
}



