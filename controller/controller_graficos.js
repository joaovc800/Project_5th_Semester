fetch("/model/graficos.php")
.then( res => res.json())
.then( (dados) => {
    const quantidadeFinal = []; // quantidade de items por dia
    const cores = [];
    const dias = []; // array com as datas, vira a label depois
    if (dados.MSG === 'Success') {
        console.log(dados);
        console.log(dados.MSG);
        console.log("hey ",dados.DIA);
        dados.DADOS.map( (valor) =>  {
            // Gerar cores e pegar os dias
            let redColor = Math.round(Math.random() * 255);
            let greenColor = Math.round(Math.random() * 255);
            let blueColor = Math.round(Math.random() * 200);
            cores.push(`rgb(${redColor},${greenColor},${blueColor})`);

            // Dias
            if (dias.includes(valor.dia) === false) dias.push(valor.dia);
        }) 

        for (const dia of dias) {
            let quantidadePorDia = 0;
            dados.DADOS.map((val) => {
                if (dia === val.dia) {
                    quantidadePorDia = quantidadePorDia + Number(val.quantidade)
                }
            })
            quantidadeFinal.push(quantidadePorDia)
        }
        console.log(quantidadeFinal)

        console.log(dias);
        // Rgb randomico
        console.log(cores);
        const data = {
            labels: dias,
            datasets: [{
                label: "Datas",
                data: quantidadeFinal,
                backgroundColor: cores,
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
                    position:'top'
                    
                }
            }
        }
        
        const config = {
            type: 'line',
            data: data,
            options: options
        };
        
        const myChart = new Chart(document.getElementById('myChart'), config);

    } else {
        throw new Error('Nenhum dado enviado pelo servidor');
    }
})
.catch( err => console.log(err))