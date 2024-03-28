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
![image](https://github.com/dneb8/fitflavors/assets/107234871/4cab2b47-3b09-456a-9a7d-4fe11df51138)


3. **Clonar el Repositorio en laragon**: 

   Clonar con GitHub Desktop, o:
   ```bash
   git clone https://github.com/dneb8/fitflavors.git fitflavors
   //Clonar en carpeta laragon/www
   ```
4. **Copiar archivo .env.example a .env:**
   ```bash
   cp .env.example .env
   
   //abrir Visual Studio para editarlo
   code .
   
   //buscar archivo env y configurar la Base de Datos con credenciales de mysql.

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=fitflavors
    DB_USERNAME=root
    DB_PASSWORD=   
   ```

5. **Generar clave de aplicación**:
   ```bash
   php artisan key:generate
   ```  
6. **Instalar Dependencias de Composer**: 
   ```bash
   composer install
   ```
7. **Instalar Dependencias de Node**: 
   ```bash
   npm install
   ```
8. **Ejecutar las Migraciones**:
   ```bash
   php artisan migrate 
   ```
10. **Iniciar el servidor**:
       ```bash
       php artisan serve
       ```

## **[Issues](ISSUES.md)**



