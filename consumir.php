<?php
$url = "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items";

// Consumir API con cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Convertir JSON a arreglo PHP
$data = json_decode($response, true);

// Filtrar solo color "green"
$data = array_filter($data, function($item) {
    return strtolower($item['color']) === "green";
});

// Exportar a archivo JSON
file_put_contents("Respuesta1.json", json_encode($data, JSON_PRETTY_PRINT));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consumo API con PHP</title>
</head>
<body>
    <h2>Respuesta filtrada</h2>
    <pre><?php print_r($data); ?></pre>

    <!-- Mostrar también en consola del navegador -->
    <script>
        let respuesta = <?php echo json_encode($data, JSON_PRETTY_PRINT); ?>;
        console.log("Respuesta filtrada:", respuesta);
    </script>
</body>
</html>
