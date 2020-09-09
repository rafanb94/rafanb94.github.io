let canvas = document.getElementById("fungi");
let data = {
  "anos": ['0', '30', '60', '90', '120', '150', '180', '210', '240', '270', '300', '330', '360', ],
  "semOxira": [40, 35, 30, 25, 20, 19, 17, 16, 15, 15, 15, 15, 15],
  "comOxira": [10, 8, 6, 4, 3, 3, 2, 2, 1, 1, 1, 1, 1]
};
var fungi = new Chart(canvas, {
  type: 'line',
  data: {
    labels: data.anos,
    datasets: [{
      label: 'Com Oxira',
      data: data.comOxira,
      borderColor: 'green',
      backgroundColor: 'green',
      fill: 'false',
    }, {
      label: 'Sem Oxira',
      data: data.semOxira,
      borderColor: 'red',
      backgroundColor: 'red',
      fill: 'false',
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    title: {
      display: true,
      text: 'UFC X TEMPO',
      fontFamily: "'Poppins',sans-serif",
      fontSize: 32,
    },
    legend: {
      display: true,
      position: 'bottom',
      fillStyle: 'green',
    },
    scales: {
      xAxes: [{
        stacked: true,
        scaleLabel: {
          display: true,
          labelString: 'Tempo (MINUTOS)',
          fontFamily: "'Poppins',sans-serif",
          fontSize: '16'
        },
      }],
      yAxes: [{
        stacked: true,
        scaleLabel: {
          display: true,
          labelString: 'Unidades Formadoras de Colônias (UFC)',
          fontFamily: "'Poppins',sans-serif",
          fontSize: '16'
        },
      }]
    }
  }
});
canvas = document.getElementById("bacterium");
data = {
  "tempo": ['0', '50', '100', '150', '200'],
  "semOxira": [180, 155, 130, 105, 80, 82, 84, 86, 87, 85, 84, 83, 15],
  "comOxira": [20, 15, 11, 7, 6, 5, 4, 4, 4, 4, 4, 3, 2]
};
const bacterium = new Chart(canvas, {
  type: 'line',
  data: {
    labels: data.tempo,
    datasets: [{
      label: 'Com Oxira',
      data: data.comOxira,
      borderColor: 'green',
      backgroundColor: 'green',
      fill: 'false',
    }, {
      label: 'Sem Oxira',
      data: data.semOxira,
      borderColor: 'red',
      backgroundColor: 'red',
      fill: 'false',
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    title: {
      display: true,
      text: 'UFC X TEMPO',
      fontFamily: "'Poppins',sans-serif",
      fontSize: 32,
    },
    legend: {
      display: true,
      position: 'bottom',
      fillStyle: 'green',
    },
    scales: {
      xAxes: [{
        stacked: true,
        scaleLabel: {
          display: true,
          labelString: 'Tempo (MINUTOS)',
          fontFamily: "'Poppins',sans-serif",
          fontSize: '16'
        },
      }],
      yAxes: [{
        stacked: true,
        scaleLabel: {
          display: true,
          labelString: 'Unidades Formadoras de Colônias (UFC)',
          fontFamily: "'Poppins',sans-serif",
          fontSize: '16'
        },
      }]
    }
  }
});