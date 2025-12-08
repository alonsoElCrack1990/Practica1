#Descripción
Aplicación web en PHP que consume un servicio REST API, filtra los resultados y exporta la respuesta.

Servicio consumido: https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items

Método: GET

Filtro aplicado: Solo elementos con la propiedad "color": "green"

Salida:

Respuesta formateada en consola.

Archivo Respuesta1.json generado automáticamente.

#Requerimientos
PHP >= 7.4

Servidor local (XAMPP, WAMP, Laragon o PHP embebido)

Navegador web moderno

#Instalación y ejecución
Clonar este repositorio o descargar los archivos.

Colocar la carpeta en el directorio de tu servidor local (htdocs en XAMPP).

Iniciar el servidor Apache.

Acceder en el navegador a:
http://localhost/ProyectoPHP/index.php

Presionar el botón en pantalla:

Se consumirá el servicio REST.

Se filtrarán los elementos con "color": "green".

Se mostrará la respuesta en consola.

Se exportará el archivo Respuesta1.json.
