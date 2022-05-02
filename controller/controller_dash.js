fetch("/model/dashboard.php")
.then( res => res.json())
.then( (dados) => {
    const labels = []; // Utilizado para as labels
    const da = []; // ta em ingles
    const cores = [];
    if (dados.MSG === 'Success') {
        console.log(dados);
        console.log(dados.MSG)
        dados.DADOS.map( (valor) =>  {
            // Cores randomicas utilizadas no grafico
            let redColor = Math.round(Math.random() * 255);
            let greenColor = Math.round(Math.random() * 255);
            let blueColor = Math.round(Math.random() * 200);
            cores.push(`rgb(${redColor},${greenColor},${blueColor})`);

            console.log(cores);
            labels.push(valor.ativo);
            da.push(valor.quantidade);
            var cards = `
            <div class="col-3">
                <div class="card acard mt-2 mt-lg-3" style="border:1px solid rgb(${redColor},${greenColor},${blueColor}); box-shadow: inset 0 0.5rem 0.25rem rgb(${redColor},${greenColor},${blueColor},100%);">
                    <div class="container card-body px-3">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="col-sm">
                                <label for="lname">${valor.ativo}:</label><br>
                                <h5>${valor.quantidade}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
            document.getElementById('cards').innerHTML += cards;
        }) 
        document.querySelector(".text-85").innerHTML = dados.DIA; 
        var cards = `
                <div class="col-3">
                <div class="card acard mt-2 mt-lg-3" style="box-shadow: inset 0 0.5rem 0.25rem rgb(0,0,0,100%);">
                <div class="container card-body px-3">
                    <div class="form-row">
                    <div class="form-group">
                        <div class="col-sm">
                        <label for="lname">Total:</label><br>
                        <h5>${dados.TOTAL}</h5>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            `;

        document.getElementById('cards').innerHTML += cards;
        // Rgb randomico
        console.log(cores)
        const data = {
            labels: labels,
            datasets: [{
                data: da,
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

    } else {
        throw new Error('Nenhum dado enviado pelo servidor');
    }
})
.catch( err => console.log(err))