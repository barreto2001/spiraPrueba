Configuración de base de datos:

Para importar correctamente la base de datos en MySQL, necesaria para el funcionamiento del aplicativo web seguir los siguientes pasos:

*Nombre de la base de datos = spiraprueba
*Cotejamiento = utf8_spanish_ci
*Importar el archivo sql guardado en la carpeta 'database' denominado 'spiraprueba.sql', donde se encuentra la estructura de la base de datos e información de prueba

Configuración de conexión a la base de datos:

Para configurar la conexion a las base de dados es necesario que acceda al archivo 'conexion.php' ubicado en el directorio 'model/conexion/conexion.php', donde podra asignar los valores del almacenamiento, usuario, contraseña y base de datos

Configuración de rutas de los roles:

En caso de ser necesario alterar las rutas, por los cambios de puertos de acceso al localhost puede hacerlo directamente desde el archivo 'controller/login/routesRols.php' donde puede determinar dichos puertos del localhost y para la navegación interna por medio del navbar puede cambiar las rutas de todos los navbar directamente en 'views/admin/components/navbarAdmin.php'