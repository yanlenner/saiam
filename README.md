<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# S.A.I.A.M.

## Objetivo General del Proyecto:

Implementar una aplicación web que lleve el control de los procesos administrativos en cuanto a la atención integral del sector Adulto Mayor, facilitando la sistematización de datos de los adultos mayores y permitiéndoles a estos últimos el acceso para ingresar solicitudes que puedan ayudarlos en lo económico, en la salud, en su alimentación, etc., priorizando las solicitudes de cada quien según su necesidad.

---

#### Instalación:

- Considerando que tienes una buena conexión a internet;
- Puedes abrir una terminal y escribir las siguientes ordenes:


```bash
     git clone https://github.com/yanlenner/saiam.git
     cd saiam-master/
     composer update
     npm install && npm run dev
     php artisan key:generate && php artisan migrate
     php artisan serve
```


#### Instalación de la Base de Datos en el Sistema Gestor de Base de Datos Postgresql:

- Debes revisar el archivo `db.sql` ubicado en el directorio database, el cual contiene la estructura de la base de datos que vamos a utilizar.
- Tienes que crear el usuario que gestionará dicha base de datos, por lo que también se recomienda establecer las credenciales de acceso en el archivo `.env` del directorio raíz del proyecto.

```sql
CREATE DATABASE saiam
 WITH
 OWNER = tu_usuario
 ENCODING = 'UTF8'
 TABLESPACE = pg_default
 CONNECTION LIMIT = -1;

GRANT ALL ON DATABASE saiam TO tu_usuario;

```


#### Demostración:

http://127.0.0.1:8000

---

Este trabajo se encuentra bajo la [![License: CC BY-NC-SA 4.0](https://img.shields.io/badge/License-CC%20BY--NC--SA%204.0-lightgrey.svg)](https://creativecommons.org/licenses/by-nc-sa/4.0/).