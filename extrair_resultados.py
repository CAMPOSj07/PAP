import requests
import json
from bs4 import BeautifulSoup

url = 'https://www.zerozero.pt/edition.php?id=177594'

# Enviar uma solicitação HTTP para obter o conteúdo da página
response = requests.get(url)

if response.status_code == 200:
    # Parse do conteúdo da página usando BeautifulSoup
    soup = BeautifulSoup(response.content, 'html.parser')

    # Exemplo de extração de dados
    resultados = []

    # Encontrar elementos HTML que contenham informações sobre os resultados
    result_blocks = soup.find_all('div', class_='resultados')

    for result_block in result_blocks:
        # Extraia informações específicas dentro de cada bloco
        equipas = result_block.find('span', class_='equipas').text
        resultado = result_block.find('span', class_='resultado').text

        # Adicione os resultados à lista
        resultados.append({'equipas': equipas, 'resultado': resultado})

        resultados = [
                    {"time1": "Equipa A", "resultado": "3 - 2", "time2": "Equipa B"},
                    # Adicione mais resultados conforme necessário
                ]

    # Exibir os resultados
    for resultado in resultados:
        print(resultado)
else:
    print('Erro ao fazer pedido HTTP. Código de status:', response.status_code)
