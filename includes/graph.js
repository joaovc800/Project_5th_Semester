const data = {
    labels: [
      'Monitores',
      'Notebooks',
      'Macbooks',
      'Fones de Ouvido',
      'Teclados sem Fio',
      'Teclados com Fio',
      'Mouses'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [357, 50, 357, 200, 357, 130, 200],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 0, 0)',
        'rgb(0, 0, 0)',
        'rgb(100, 100, 40)',
        'rgb(10, 100, 40)',
        'rgb(0, 255, 46)'
      ],
      hoverOffset: 4
    }]
};

const options = {
    plugins: {
        legend: {
            labels: {
                padding: 20,
                usePointStyle: true,
                boxWidth: 6
            },
            display: true,
            position:'right'
            
        }
    }
}

const config = {
    type: 'doughnut',
    data: data,
    options: options
};



const myChart = new Chart(document.getElementById('myChart'), config);
console.log(myChart)