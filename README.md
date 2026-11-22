Gestor Financiero

Integrantes
Andersson Sinisterra Angulo

Descripción
Sistema web desarrollado en Laravel para la gestión de categorías, cuentas y transacciones financieras. Permite registrar ingresos y gastos, administrar cuentas y actualizar automáticamente los saldos disponibles.

Requisitos Previos
Antes de ejecutar el proyecto se debe tener instalado:
PHP 8.2 o superior
Composer
MySQL
Git
Node.js
NPM
XAMPP (opcional)

Clonar Repositorio
Shell
git clone https://github.com/Ander1216/Proyecto-Gestor-Financiero.git
Ingresar a la carpeta:
Shell
cd Proyecto-Gestor-Financiero

Instalar Dependencias
Instalar dependencias de PHP:
Shell
composer install
Instalar dependencias de Node:
Shell
npm install

Configurar Archivo .env
Copiar:
Shell
cp .env.example .env
o crear manualmente:
Plain Text
.env
Configurar:
Plain Text
env no es totalmente compatible. El resaltado de sintaxis se basa en Plain Text.
APP_NAME="Gestor Financiero"
 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestor_financiero
DB_USERNAME=root
DB_PASSWORD=

Generar Clave
Shell
php artisan key:generate

Crear Base de Datos
Crear una base llamada:
SQL
gestor_financiero
desde:
Plain Text
phpMyAdmin
o MySQL.

Importar Base de Datos
Importar el archivo:
Plain Text
gestor_financiero.sql
incluido en el proyecto.
Este archivo contiene:
Tablas
Relaciones
Datos de prueba

Ejecutar Migraciones (Opcional)
Si no se importa el SQL:
Shell
php artisan migrate

Ejecutar Servidor
Shell
php artisan serve
Abrir:
Plain Text
http://127.0.0.1:8000

Credenciales de Acceso
Opción 1
Registrar un nuevo usuario desde:
Plain Text
/register
Opción 2
Utilizar un usuario existente:
Plain Text
Correo:
administrador@correo.com
 
Contraseña:
12345678
(Solo si lo incluyeron en los datos de prueba)

Funcionalidades
Categorías
Permite:
Crear categorías
Editarlas
Eliminarlas
Ejemplos:
Plain Text
Salario
Ventas
Mercado
Transporte

Cuentas
Permite:
Crear cuentas
Editarlas
Eliminarlas
Ejemplos:
Plain Text
Bancolombia
Nequi
Efectivo

Transacciones
Permite:
Ingresos
Plain Text
Salario
$150.000
Gastos
Plain Text
Mercado
$20.000

Reglas de Negocio
Ingreso
Suma al saldo actual:
Plain Text
Saldo Anterior + Monto

Gasto
Resta del saldo actual:
Plain Text
Saldo Anterior - Monto

Saldo Insuficiente
No permite registrar gastos mayores al saldo disponible.

Eliminación de Transacciones
Al eliminar una transacción:
Si era ingreso, se descuenta del saldo.
Si era gasto, el dinero regresa a la cuenta.

Estructura del Proyecto
Plain Text
app/
database/
resources/
routes/
public/
 
composer.json
package.json
README.md

Tecnologías Utilizadas
Laravel 12
PHP
MySQL
Blade
Tailwind CSS
GitHub

Repositorio
Plain Text
https://github.com/Ander1216/Proyecto-Gestor-Financiero
