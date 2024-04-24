
# Landing-Cars - GOCARS

Prueba tecnica realizada laravel  .

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados lo siguiente en tu sistema:

- [PHP](https://www.php.net/) (versión recomendada)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) y [NPM](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) o cualquier otro sistema de gestión de bases de datos compatible

## Instalación

1. **Clonar el repositorio**
git clone https://github.com/Lans02/Landing-Cars.git

2. **Instalar dependencias de PHP con Composer**
cd nombre-del-proyecto
composer install

3. **Configurar la base de datos**

Editar el archivo `.env` y configurar los parámetros de la base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=nombre_de_usuario
DB_PASSWORD=contraseña

4. **Migrar y sembrar la base de datos**
php artisan migrate --seed

5. **Instalar dependencias de JavaScript con NPM**
npm install

6. **Compilar assets**

npm run dev

7. **Iniciar el servidor de desarrollo**

php artisan serve
El servidor de desarrollo estará disponible en `http://127.0.0.1:8000`.

## Uso

Describe cómo usar tu aplicación una vez que esté instalada. Esto podría incluir cómo iniciar sesión, cómo utilizar ciertas características, etc.

## Contribuciones

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del proyecto
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`)
3. Haz commit de tus cambios (`git commit -am 'Añadir nueva funcionalidad'`)
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Crea un nuevo Pull Request

