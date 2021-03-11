Pasos para la instalación del proyecto Prueba Tecnica Claro Laravel
------------------------------------

## Pasos para la instalación:
- Confirmar que el archivo .env esté creado en la raiz del proyecto, sino crearlo.
- Crear base de datos con el nombre de su preferencia.
- Confirmar que en el archvo .env esten configuradas las credenciales de la siguiente forma:
- **DB_CONNECTION=mysql**
- **DB_DATABASE=NameBD**
- **DB_USERNAME=NAmeUsernameDB**
- **DB_PASSWORD=PasswordDB**



## Configuración de envio de Correos
Para que el modulo de envia de correo funcione correctamente debe configurar las crendeciales en el archivo .env
- **Yo utilize mailtrap.io muy facil de usar y de configurar con sensillos pasos**
- **MAIL_MAILER=smtp**
- **MAIL_HOST=smtp.mailtrap.io**
- **MAIL_PORT=2525**
- **MAIL_USERNAME=Su Usuario de Mailtra**
- **MAIL_PASSWORD=Su clave de Mailtra**
- **MAIL_ENCRYPTION=tls**
- **MAIL_FROM_ADDRESS=null**
- **MAIL_FROM_NAME="${APP_NAME}"**

- Ejecutar desde la consola o terminal el comando **composer install** , desde la raiz del proyecto.
- Ejecutar desde la consola o terminal el comando **php artisan key:generate** , desde la raiz del proyecto.
- Ejecutar desde la consola o terminal el comando **php artisan migrate** , desde la raiz del proyecto.
- Ejecutar desde la consola o terminal el comando **php artisan db:seed** , desde la raiz del proyecto.
- Ejecutar desde la consola o terminal el comando **npm install && npm run dev** , desde la raiz del proyecto.

		

## Sobre laravel

Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia divertida y creativa para ser verdaderamente satisfactorio. Laravel elimina la molestia del desarrollo al facilitar las tareas comunes que se utilizan en muchos proyectos web, como:

- [Motor de enrutamiento simple y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencias](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expresivo, intuitivo [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y robustas.


## License

El marco de Laravel es un software de código abierto con licencia de [MIT license](https://opensource.org/licenses/MIT).
