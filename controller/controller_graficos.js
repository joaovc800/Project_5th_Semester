fetch("/model/graficos.php")
.then( res => res.json())
.then( (dados) => {
    const labelTipos = []; // Utilizada para manter os tipos de ativos !SUPER IMPORTANTE
    const cores = []; // cores
    const dias = [];  // mantem os dias, é o pilar do grafico
    const datasets = []; // dados finais para criação do grafico

    if (dados.MSG === 'Success') {
        console.log(dados);
        console.log(dados.MSG);

        dados.DADOS.map( (valor) =>  {
            // Gerar cores e pegar os dias
            let redColor = Math.round(Math.random() * 255);
            let greenColor = Math.round(Math.random() * 255);
            let blueColor = Math.round(Math.random() * 200);
            cores.push(`rgb(${redColor},${greenColor},${blueColor})`);
            // Array Dias
            if (dias.includes(valor.dia) === false) dias.push(valor.dia);
            // Array com as labels dos ativos
            if (labelTipos.includes(valor.ativo) === false) labelTipos.push(valor.ativo);
           
        }) 

        // Criar um objeto contendo todas as labels
        var objLabelsAtivo = {}
        for (const lbl of labelTipos) {
            objLabelsAtivo = { ...objLabelsAtivo, [lbl]: 0 }
        }

        // Extrair os valores e dar assign no objeto
        const objectDados = []
        for (const dia of dias) {
            var objAtivo = {};
            dados.DADOS.map( (val) => {
                if (dia === val.dia) {
                    // Adiciona o ultimo objAtivo ao novo
                    objAtivo = { ...objAtivo,
                        [val.ativo]: val.quantidade
                    }
                } 
            })
            // fusao dos objetos
            objectDados.push({
              [dia]: {...objLabelsAtivo,...objAtivo}
            })
        }

        // Utilizado para modelar os dados para o dataset
        var greatObject = {}
        for (const labels of labelTipos) {
            greatObject = {
                ...greatObject,
                [labels] : []
            }
        }

        // Retira os dados não modelados e passa para o greatObject, agora com os dados completos
        for (const obj of objectDados) {
            console.log("another, ",obj)
            let objIndex = Object.keys(obj)[0]; // pegar indice (dia)
            let object = obj[objIndex]; // pegar valor do indice (dia)
            let ativos = Object.keys(object); // pegar o array de ativos
            let quantidade = Object.values(object); // pegar o array de quantidade

            for (const index in ativos) {
                greatObject[ativos[index]].push(quantidade[index])
            }
        }

        // Criar o dataset apartir do greatObject
        for (const value of Object.keys(greatObject)) {
            datasets.push({
                label: value,
                data: Object.values(greatObject[value]),
                backgroundColor: cores[Math.floor(Math.random() * cores.length)],
                hoverOffset: 4  
            })
            console.log(value)
        }

        const data = {
            labels: dias,
            datasets: datasets
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