document.addEventListener('DOMContentLoaded', function() {
    const reportForm = document.querySelector('.report-form');
    const lockerNumberInput = document.getElementById('lockerNumber');
    const reportDetailsInput = document.getElementById('reportDetails');
    const reportsList = document.getElementById('reportsList');
  
    reportForm.addEventListener('submit', function(event) {
      event.preventDefault();
  
      const lockerNumber = lockerNumberInput.value;
      const reportDetails = reportDetailsInput.value;
  
      if (lockerNumber && reportDetails) {
        const date = new Date().toLocaleString();
        const reportItem = document.createElement('li');
        reportItem.className = 'report-item';
        reportItem.innerHTML = `
          <p class="date">${date}</p>
          <p class="status">Locker ${lockerNumber}</p>
          <p>${reportDetails}</p>
        `;
        reportsList.prepend(reportItem);
  
        lockerNumberInput.value = '';
        reportDetailsInput.value = '';
  
        alert('El reporte ha sido enviado exitosamente.');
      } else {
        alert('Por favor, completa todos los campos del formulario.');
      }
    });
  });
  