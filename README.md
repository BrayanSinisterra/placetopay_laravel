### Aplicación Placetopay creacion de sesión y consulta

La apliación conciste en realizar un proceso de comrpra y conectarse con la pasarela de pagos de placetopay, después de realizar la compra y se devuleva al comercio se enseña un resumende del proceso con cada uno de sus estado, en tal caso de ser rechazada permite volver a realizar la comrpra. 

## Funcionamiento de la aplicación 

La primera pantalla que nos enseña cuando carga el index es el listado de las diferentes ordenes de compra que se han realizado. El cual nos permite ver el detalle en el resumen y también crear una orden de compra nueva. 

![Alt text](/public/img/capturas/index.PNG?raw=true "Imagen del index")

Cuando se ingresa a crear la orden de compra nos presenta el siguiente formulario, el cual todos sus campos son obligatorios para seguir con el proceso

![Alt text](/public/img/capturas/form.PNG?raw=true "Imagen del formulario")

Déspues de captura la información nos presenta un resumen de la compra, lo cual nos enseña los datos antes dado en el formulario.

![Alt text](/public/img/capturas/confirmacion.PNG?raw=true "Imagen de confirmacion")

Nos indica dos opciones la cual es cancelar y la otra es realizar el pago, lo cual si se toma la segunda opción se redirige a placetopay. 

![Alt text](/public/img/capturas/Placetopay_1.PNG?raw=true "Imagen de Placetopay")

La compra puede tomar diferentes estados, que son Fallida, pendiente y aprovada, lo cual placetopay los enseña y permite la opción de volver al aplicativo. 

![Alt text](/public/img/capturas/Placetopay_2.PNG?raw=true "Imagen de Placetopay")

![Alt text](/public/img/capturas/Placetopay_3.PNG?raw=true "Imagen de Placetopay")

Cuando se devuelve al comercio se enseña el siguiente resumen dependiendo los estados

![Alt text](/public/img/capturas/show_fallida.PNG?raw=true "Imagen de Placetopay")

![Alt text](/public/img/capturas/show_pendiente.PNG?raw=true "Imagen de Placetopay")

## Instalación de la aplicación 

Se debe ejecutar los siguientes comandos para la debida instalación de la aplicación

1. instalar las librerias de composer
    ```
    $ composer install 
    ```
2. Cambiarle el nombre archivo .env.example al .env

3. Despues de configurar el .env debe ejecutar
    ```
    $ php artisan migrate
    ```
4. Por ultimo debe correr el proyecto 
    ```
    $ php artisan serve
    ```

## Ejecución de pruebas unitarias

1. Para la ejecución de las pruebas unitarias debemos ejecutar
    ```
    $ php artisan test 
    ```
