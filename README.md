# Login
Este es un login hecho a partir de PHP y SQL(html,css,etc). Este codigo cuenta un sistema completo tanto de registro como de login, con 2 tipos de cifrados diferentes para poder manter seguro toda las informaciones de los usuarios y no ser tan visibles para los atacates los datos almacenados.

##Necesario (Guia)
Para esto es necesario una una base de datos en este caso llamada pedro y con una tabla llamada usuarios pero si usted justa realizar una base de datos diferente puede obtar por cambiar la siguiente linea de codigo de los siguientes archivo `<Conexion.php>` , `<IniciarSeccion.php>`  y `<Registrar.php>`  

![image](https://github.com/user-attachments/assets/66ba50a2-a6bc-4752-a1f9-f0c4d68ae562)
![image](https://github.com/user-attachments/assets/22b7d773-6f9b-4fa1-b23d-04bec264ace5)
![image](https://github.com/user-attachments/assets/19ff668d-08cc-4653-af9c-5a9694f9a16a)

### Crear Base De Datos 
Para este proyecto es de suma importancia utilizar las siguientes configuraciones
> Id (INT) (PRIMARY) (50)

> Usuario (VARCHAR) (50)

> Clave (VARCHAR) (255)

> Nombre_Completo (VARCHAR) (100) 

Si deseas hacerlo por por codigo puedes utilizar las siguientes lineas de codigo 
```
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Usuario VARCHAR(50) NOT NULL,
    Clave VARCHAR(255) NOT NULL,
    Nombre_Completo VARCHAR(100) NOT NULL
);

```

(Ignorar cualquier falta ortografica)


