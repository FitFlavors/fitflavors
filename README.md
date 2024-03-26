# **FitFlavors**

## Herramientas
- [GitHub Desktop](https://desktop.github.com/?ref_cta=download+desktop&ref_loc=installing+github+desktop&ref_page=docs) - Interfaz Gráfica para GitHub.

## Prerequisitos de Instalación

- [Laragon](https://www.youtube.com/watch?v=BKrYABnQiwM) - Entorno de desarrollo local que incluye Apache, MySQL, PHP y más.
- [Composer](https://getcomposer.org/doc/00-intro.md#installation-windows) - Administrador de dependencias para PHP.
- [Node.js](https://nodejs.org/en/download/current)- Para manejar las dependencias de frontend y ejecutar scripts.

**(Para checar si ya están instalados: `composer --version` `node --version`)**

  
## Instalación
1. **Ya que se haya instalado laragon, dar clic a Iniciar todo y abrir terminal**:
![image](https://github.com/dneb8/FitFlavors/assets/107234871/e97a9738-1c9e-449c-9275-81bb0d34f13e)

2. **Clonar el Repositorio en laragon**: 

   Clonar con GitHub Desktop, o:
   ```bash
   git clone https://github.com/dneb8/FitFlavors.git fitflavors
   //Clonar en carpeta laragon/www
   ```
3. **Copiar archivo .env.example a .env:**
   ```bash
   cp .env.example .env
   
   //abrir Visual Studio para editarlo
   code .
   
   //buscar archivo env y escribir:
   APP_URL=http://localhost/fitflavors/public
   ```

4. **Generar clave de aplicación**:
   ```bash
   php artisan key:generate
   ```  
5. **Instalar Dependencias de Composer**: 
   ```bash
   composer install
   ```
6. **Instalar Dependencias de Node**: 
   ```bash
   npm install
   ```
7. **Ejecutar las Migraciones y Seeders**:
   ```bash
   php artisan migrate --seed
   ```
   Configurar la Base de Datos en el archivo .env con credenciales de mysql.

8. **Crear un enlace simbólico para el almacenamiento público**: 
   ```bash
   php artisan storage:link
   ```
   Si el comando dice que ya existe el link, hacer lo siguiente:
    ```bash
    D:\laragon\www\FitFlavors(main -> origin)
    λ php artisan storage:link
       ERROR  The [D:\laragon\www\FitFlavors\public\storage] link already exists.
    D:\laragon\www\FitFlavors(main -> origin)
    λ cd public
    D:\laragon\www\FitFlavors\public(main -> origin)
    λ rm storage -r
    D:\laragon\www\FitFlavors\public(main -> origin)
    λ cd ..
    D:\laragon\www\FitFlavors(main -> origin)
    λ php artisan storage:link
    
       INFO  The [D:\laragon\www\FitFlavors\public\storage] link has been connected to [D:\laragon\www\FitFlavors\storage\app/public].
    ```
9. **Iniciar el servidor**:
   ```bash
   php artisan serve
   ```
10. **Entrar a la ruta: http://localhost/fitflavors/public/**


