(function () {
    "use strict";
  
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function () {
  
      var map = L.map('mapa').setView([19.575965, -448.03791], 17);
  
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
       attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
  
      L.marker([19.575965, -448.03791]).addTo(map)
       .bindPopup('GDLWebCamp <br> Boletos ya Disponibles')
       .openPopup();
  
  
    }); //DOM CONTENT LOADED
  })();
  