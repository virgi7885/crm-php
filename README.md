# 📋 CRM Básico en PHP + MySQL

Este es un sistema CRM (Customer Relationship Management) desarrollado en PHP puro con MySQL y Bootstrap. Permite gestionar clientes, sesiones de usuario y roles con una interfaz limpia y funcional.

---

## 🚀 Funcionalidades

- Login seguro con sesiones
- Roles de usuario (`admin` y `usuario`)
- Gestión completa de clientes (crear, ver, editar, eliminar)
- Filtro de búsqueda por nombre o email
- Estilo moderno con Bootstrap 5
- Protección de rutas y control de permisos
- Página de bienvenida visual (`index.php`)
- Base de datos incluida en el repositorio

---

## 🛠 Requisitos

- PHP 7.4 o superior
- MySQL o MariaDB
- MAMP / XAMPP / Laragon
- Navegador moderno (Chrome, Firefox, etc.)

---

## 📦 Instalación paso a paso

### 1. Clonar el repositorio

```bash
git clone https://github.com/virgi7885/crm-php
Reemplaza tu_usuario por tu nombre de usuario real en GitHub.

2. Colocar el proyecto en tu servidor local
En MAMP (Mac):
/Applications/MAMP/htdocs/crm-php/

En XAMPP (Windows):
C:\xampp\htdocs\crm-php\

🗂 Cómo importar la base de datos (crm_test.sql)
Abre phpMyAdmin

Crea una base de datos nueva llamada:

nginx
Copiar
Editar
crm_test
Ve a la pestaña "Importar"

Selecciona el archivo:

pgsql
Copiar
Editar
crm-php/database/crm_test.sql
Haz clic en "Continuar"

✅ Esto creará las tablas usuarios y clientes con datos de prueba incluidos.

🌐 Acceder a la aplicación
En MAMP:

bash
Copiar
Editar
http://localhost:8888/crm-php/index.php
En XAMPP:

arduino
Copiar
Editar
http://localhost/crm-php/index.php
🔐 Usuarios de prueba
Rol	Email	Contraseña
Admin	admin@crm.com	admin123
Usuario	usuario@crm.com	usuario123

🗃 Estructura del proyecto
graphql
Copiar
Editar
crm-php/
├── index.php                  # Página de bienvenida con Bootstrap
├── login.php                  # Formulario de acceso
├── procesar_login.php         # Verificación de credenciales y sesión
├── logout.php                 # Cierre de sesión
├── panel.php                  # Panel principal
├── clientes.php               # Lista de clientes con búsqueda
├── agregar_cliente.php        # Formulario para crear cliente
├── guardar_cliente.php        # Lógica para guardar cliente nuevo
├── editar_cliente.php         # Formulario para editar cliente
├── actualizar_cliente.php     # Lógica para guardar cambios
├── eliminar_cliente.php       # Eliminar cliente (solo admin)
├── conexion.php               # Conexión a base de datos
├── .gitignore                 # Archivos ignorados por Git
├── README.md                  # Documentación del proyecto
└── database/
    └── crm_test.sql           # Script SQL con estructura y datos
📌 Ideas para futuras mejoras
Exportar clientes a PDF o Excel

Agregar historial por cliente

Sistema de tareas o recordatorios

Responsive avanzado para móviles

Formulario de registro para nuevos usuarios

👩‍💻 Autor
Desarrollado por Virginia Nicoliello
GitHub: https://github.com/virgi7885