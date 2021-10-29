<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/p****ackages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre le proyecto

Evaluacion tecnica de Marvel, demostrar capacidades de programacion en un proyecto de conexion a un API para consumo de datos

##Instruciones

Esta prueba se centra en el desarrollo de un sistema de gestión de una tienda de cómics.
Para esto se debe realizar lo siguiente:
1. Con migraciones, crea una base de datos con las siguientes tablas:
   - Sucursales
   - Inventario
2. Sucursales
   - Se deberá crear la sección para gestionar el CRUD de sucursales
3. Cómics por tienda
   - Con el api public/comics deberás hacer una lista para seleccionar los cómics
   disponibles en cada una de las sucursales.
   - Se deberán mostrar los comics en forma de lista con casillas de verificación y en
   orden alfabético.
4. Listado de comics
   - Se deberá crear una sección que muestre los cómics mediante un grid de cómics
   con 4 elementos por línea.
   - Cada cómic debe mostrar lo siguiente:
     - Imagen (Si el comic no tiene imagen se deberá mostrar una imagen dummy)
     - Nombre
     - Volumen (En caso de tenerlo)
5. Información del comic
   - Al dar clic sobre un cómic se deberá mostrar la ficha de información con la siguiente
   API publ**i**c/comics/{comicId}. Se deberán mostrar los siguientes datos:
     - Imagen
     - Título
     - Volumen
     - Fecha de lanzamiento
     - Páginas
     - Descripción
     - Sucursales donde está disponible
     - Personajes (Se deberá consultar el api de personajes por cada personaje del
     cómic para mostrar la imagen).
