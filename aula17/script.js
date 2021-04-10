function imprimirNome () {
    const input = document.getElementById('nome').value
    const retornarNome = document.getElementById('voltaNome')
    let data = new Date()
    let hora = data.getUTCHours()
    let saudacao = 'oi'
    hora -=3; //convertendo o horario UTC para o nosso horario
    
    if (hora >= 5 && hora < 12) {
        saudacao = 'Bom dia'
    }
    if (hora >= 12 && hora < 18) {
        saudacao = 'Boa tarde'
    }
    if (hora >=18 && hora <5) {
        saudacao = 'Boa noite'
    }
    else if (hora >= -3 && hora < 0){ 
        saudacao = 'Boa noite'
    }
    return retornarNome.innerHTML = `${saudacao} ${input}`
}

function imprimirNumeros () {
    const input = document.getElementById('numeros').value
    let numbers = input.split('*')
    const retornarNumeros = document.getElementById('voltaNumeros')

    return retornarNumeros.innerHTML = numbers[0] * numbers[1]
}