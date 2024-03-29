// $(document).ready(function() {
//     $('[data-toggle="popoverIconos"]').popover({      
//        html: true,      
//        content: function() {
//        return $("#refer").html();
//      }
//    });
//  });  
  
  // Botones Info Plan
  $(document).ready(function() {
    $( '[data-toggle="popoverIconos"]').popover({content:'',html:true});
    });
    

  $(document).ready(function() {
    $('[data-toggle="popoverServiciosBasicos"]').popover({
      html: true,
      content: function() {
        return $('#infoPopServiciosBasicas').html();
      }
    });
  });

  $(document).ready(function() {
    $('[data-toggle="popoverVacunas"]').popover({
      html: true,
      content: function() {
        return $('#infoPopVacunas').html();
      }
    });
  });

  $(document).ready(function() {
    $('[data-toggle="popoverEsteticos"]').popover({
      html: true,      
      content: function() {
        return $('#infoPopEstetica').html();
      }
    });
  });

  // Botones Info Plan



// deslizamiento del raton
new WOW().init();
// deslizamiento del raton


// configuracin de mapa

    function regular_map(){
        
        var var_location = new google.maps.LatLng(-22.455891, -68.923640);// Latitud y longitud
        
        var var_mapoptions = {
            center: var_location, zoom: 14//zoom del mapa
        };

        var var_map = new google.maps.Map(document.getElementById
            ("map-container"),
                var_mapoptions);
        
        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "Clinica Lickan Pets"// titulo de ubicacion

        });

    }

    google.maps.event.addDomListener(window, 'load', regular_map);// inicializar maps

// configuracin de mapa

(function () {
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
}())