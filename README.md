# CONSUMIENDO-API-GOOGLE-MAP

He creado un servicio web cliente que hace peticiones a la api de google maps.

Funciona de una manera muy simple, he creado un formulario donde le pregunto a la persona que indique un sitio.

Cuando indica el sitio, hago una petición a la api de google map la cual me devolverá un array de objetos json.

Descodifico el formato json con json_decode y lo convierto en un array asociativo.

Recorro el array asociativo y le muestro solamente la latitud y la longitud.

Para probar el script de este proyecto debemos de ponerlo en /var/www/html y probarlo desde un cliente web
con la url localhost/proyecto.php
