# Esta es la prueba técnica de Marcos Méndez para Up Spain

He planteado la solución al problema con la creación de 2 entidades: Product & Variation:
Con los siguientes campos:

> product:

    -> id ,
    -> name,
    -> description,
    -> price,
    -> stock

> variation:

    -> id,
    -> product_id,
    -> name,
    -> size
    -> price,
    -> stock,
    -> color
    -> imagen_url

Un ejemplo sería:
Product -> (1, mesa, mesa de escritorio perfecta para estudiante, 100, 5)
Variation -> (1, 1, mesa roja, grande, 120, 2, rojo, https....)

#En nuestra carpeta src tenemos la estructura de la arquitectura Hexagonal, las tres capas.
Solamente he realizado el contenido para el 'product' por falta de tiempo.

He tratado de plantear la variante de enviar un correo en el momento de crear un producto, pero no he sido capaz. Había planteado que el hecho de enviar un email fuese un evento de Dominio, pero no me he visto capazitado. Iba a utilizar la herramienta https://resend.com/ que sirve para el envío gratuito de emails.

Están realizados 2 métodos:
-> GET buscar un producto específico
-> POST crear un nuevo producto

Podrán encontrarlos en routes/api.php

En el archivo [START.MD](START.md) se encontrán las especificaciones necesarias para iniciar el proyecto.
