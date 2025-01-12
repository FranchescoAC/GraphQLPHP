<?php
// Asegúrate de que el autoloader de Composer esté cargado
require 'vendor/autoload.php';

// Importa las clases necesarias de GraphQL
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;  // Correcta importación de Schema

// Define el tipo de objeto que se va a utilizar en la consulta
$helloType = new ObjectType([
    'name' => 'Hello',
    'fields' => [
        'message' => [
            'type' => Type::string(),
            'resolve' => function () {
                return '¡Hola Mundo desde GraphQL y PHP!';
            },
        ],
    ],
]);

// Crea el esquema de GraphQL usando el tipo de consulta
$schema = new Schema([
    'query' => $helloType
]);

// Obtén la consulta enviada desde la URL
$query = isset($_GET['query']) ? $_GET['query'] : null;

// Si hay una consulta, ejecuta la consulta GraphQL
if ($query) {
    try {
        $result = GraphQL::executeQuery($schema, $query);
        $output = $result->toArray();
        echo json_encode($output);  // Devuelve el resultado como JSON
    } catch (\Exception $e) {
        // Si ocurre un error, muestra el mensaje de error
        echo json_encode(['error' => 'Hubo un error en la consulta: ' . $e->getMessage()]);
    }
} else {
    // Si no se proporciona una consulta, muestra un mensaje de error
    echo json_encode(['error' => 'No query provided']);
}
