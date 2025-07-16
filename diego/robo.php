<?php
// URL da API de IA
$apiUrl = "https://api.exemplo-ia.com/v1/chat";

// Chave de API (substitua pela sua chave real)
$apiKey = "sua_chave_api_aqui";

// Dados de entrada para a IA
$data = [
    "prompt" => "Olá, como você está?",
    "max_tokens" => 100
];

// Configuração do cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Executa a requisição
$response = curl_exec($ch);

// Verifica erros
if (curl_errno($ch)) {
    echo "Erro na requisição: " . curl_error($ch);
} else {
    // Decodifica a resposta JSON
    $result = json_decode($response, true);
    echo "Resposta da IA: " . $result['response'];
}

// Fecha a conexão cURL
curl_close($ch);
?>