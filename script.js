document.addEventListener('DOMContentLoaded', () => {
    const chaveAPI = '7ac99b30aa88bf2823361ba43e9b97df';
    const cidade = 'Rio de Janeiro';
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&appid=${chaveAPI}&units=metric`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const descricaoTempo = traduzirDescricao(data.weather[0].description);
            const temperatura = data.main.temp;
            const umidade = data.main.humidity;

            const emoji = getEmojiForWeatherCondition(descricaoTempo);
            const agora = new Date();
            const hora = agora.getHours();
            
            document.getElementById('descricao-tempo').textContent = `Condição de Tempo: ${emoji} ${descricaoTempo}`;
            document.getElementById('temperatura').textContent = `Temperatura Atual: ${temperatura}°C`;
            document.getElementById('umidade').textContent = `Umidade Relativa do Ar: ${umidade}%`;

            const dicas = getDicasPlantio(descricaoTempo);
            document.getElementById('dicas-texto').textContent = dicas;

            if (emoji === '☀️' && (hora >= 19 || hora < 7)) {
                document.getElementById('descricao-tempo').textContent = `Condição: 🌙 ${descricaoTempo}`;
            }
        })
        .catch(error => {
            console.error('Erro ao obter a condição do tempo:', error);
            document.getElementById('descricao-tempo').textContent = 'Não foi possível obter a condição do tempo.';
        });
});

function traduzirDescricao(descricao) {
    switch (descricao.toLowerCase()) {
        case 'clear sky':
            return 'Céu Limpo';
        case 'few clouds':
            return 'Poucas Nuvens';
        case 'scattered clouds':
            return 'Nuvens Dispersas';
        case 'broken clouds':
            return 'Sol entre Nuvens';
        case 'overcast clouds':
            return 'Nublado';
        case 'light rain':
            return 'Chuva Leve';
        case 'moderate rain':
            return 'Chuva Moderada';
        case 'heavy intensity rain':
            return 'Chuva Intensa';
        case 'thunderstorm':
            return 'Tempestade';
        case 'snow':
            return 'Neve';
        case 'mist':
            return 'Névoa';
        default:
            return descricao;
    }
}

function getEmojiForWeatherCondition(descricao) {
    switch (descricao.toLowerCase()) {
        case 'céu limpo':
            return '☀️';
        case 'poucas nuvens':
        case 'nuvens dispersas':
        case 'sol entre nuvens':
            return '🌤️';
        case 'nublado':
            return '☁️';
        case 'chuva leve':
        case 'chuva moderada':
        case 'chuva intensa':
            return '🌧️';
        case 'tempestade':
            return '⛈️';
        case 'neve':
            return '❄️';
        case 'névoa':
            return '🌫️';
        default:
            return '';
    }
}

function getDicasPlantio(descricao) {
    switch (descricao.toLowerCase()) {
        case 'céu limpo':
            return 'Dia ensolarado! Regue suas plantas adequadamente pela manhã e proteja as mais sensíveis do sol forte.';
        case 'poucas nuvens':
        case 'nuvens dispersas':
        case 'sol entre nuvens':
            return 'Clima agradável para o cultivo. Aproveite para adubar suas plantas.';
        case 'nublado':
            return 'Clima nublado. Regue as plantas conforme necessário, pois a evaporação será menor.';
        case 'chuva leve':
        case 'chuva moderada':
        case 'chuva intensa':
            return 'Chuva chegando! Não é necessário regar as plantas, mas verifique o escoamento da água.';
        case 'tempestade':
            return 'Tempestade se aproximando. Proteja suas plantas mais frágeis do vento e da chuva intensa.';
        case 'neve':
            return 'Neve no ar! Proteja plantas sensíveis ao frio e evite regar durante períodos gelados.';
        case 'névoa':
            return 'Dia com névoa. Mantenha as plantas protegidas e evite molhá-las excessivamente.';
        default:
            return 'Condição desconhecida. Consulte as necessidades específicas de suas plantas para este clima.';
    }
}
