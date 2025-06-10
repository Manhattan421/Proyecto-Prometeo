<?php
session_start();
$_SESSION['usuario'] = 'admin';
$_SESSION['rol'] = 'admin';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Ejemplo Visual - Portal de Incidencias</title>
    <style>
        /* Estilos generales */

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff; /* fondo blanco limpio */
            margin: 20px auto;
            max-width: 960px;
            color: #2c3e50;
        }

        h2 {
            color: #222222;
            border-bottom: 2px solid #cccccc; /* línea gris clara */
            padding-bottom: 8px;
            margin-bottom: 20px;
        }

        /* Botones */

        .btn {
            background-color: #555555; /* gris oscuro */
            color: #fff;
            padding: 12px 22px;
            margin: 10px 5px 10px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            font-size: 17px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
            transition: background-color 0.25s ease, box-shadow 0.25s ease;
        }

        .btn:hover {
            background-color: #333333; /* gris más oscuro al pasar */
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }

        /* Tablas */

        table {
            border-collapse: separate;
            border-spacing: 0 10px;
            width: 100%;
            margin-top: 25px;
            background-color: #fff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
        }

        th {
            background-color: #e0e0e0; /* gris claro para encabezados */
            color: #222222;
            font-weight: 600;
            font-size: 15px;
        }

        /* Para separar filas y darle estilo más limpio */

        tbody tr {
            background-color: #fafafa;
            transition: background-color 0.3s ease;
        }

        tbody tr:hover {
            background-color: #f0f0f0;
        }

        /* Resaltar prioridad */

        td.prioridad-alta {
            background-color: #e74c3c;
            color: #fff;
            font-weight: 700;
            border-radius: 6px;
            text-align: center;
            width: 100px;
        }

        td.prioridad-media {
            background-color: #f39c12;
            color: #fff;
            font-weight: 700;
            border-radius: 6px;
            text-align: center;
            width: 100px;
        }

        td.prioridad-baja {
            background-color: #27ae60;
            color: #fff;
            font-weight: 700;
            border-radius: 6px;
            text-align: center;
            width: 100px;
        }

        /* Formularios */

        form label {
            font-weight: 600;
            color: #333333;
        }

        form select, form textarea, form input[type="text"], form input[type="submit"] {
            margin-top: 7px;
            margin-bottom: 20px;
            padding: 10px 15px;
            width: 100%;
            max-width: 450px;
            font-size: 15px;
            border: 1.5px solid #cccccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        form select:focus, form textarea:focus, form input[type="text"]:focus {
            border-color: #555555;
            outline: none;
        }

        /* Botón de envío */

        form input[type="submit"] {
            background-color: #555555;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #333333;
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['rol']; ?>)</h2>

    <p><a href="#" class="btn">Nueva incidencia</a></p>
    <p><a href="#" class="btn">Listado de incidencias</a></p>
    <p><a href="#" class="btn">Comentarios de soluciones</a></p>
    <p><a href="#" class="btn">Historial de incidencias</a></p>
    <p><a href="#" class="btn">Ver Registro de Actividad (Logs)</a></p>
    <p><a href="#" class="btn">Cerrar sesión</a></p>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Prioridad</th>
                <th>Categoría</th>
                <th>Subcategoría</th>
                <th>Fecha de creación</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Problema en impresora</td>
                <td>La impresora no funciona</td>
                <td>Abierta</td>
                <td class="prioridad-alta">Alta</td>
                <td>Hardware</td>
                <td>General</td>
                <td>20-05-2025 10:30</td>
                <td>juanperez</td>
                <td><button class="btn">Cerrar</button></td>
            </tr>
            <tr>
                <td>Fallo en software contable</td>
                <td>Error al generar reportes</td>
                <td>Abierta</td>
                <td class="prioridad-media">Media</td>
                <td>Software</td>
                <td>Sistema operativo</td>
                <td>19-05-2025 14:15</td>
                <td>mariaLopez</td>
                <td><button class="btn">Cerrar</button></td>
            </tr>
            <tr>
                <td>Router no responde</td>
                <td>Se pierde la conexión constantemente</td>
                <td>Abierta</td>
                <td class="prioridad-baja">Baja</td>
                <td>Redes</td>
                <td>Router</td>
                <td>18-05-2025 09:45</td>
                <td>carlosGomez</td>
                <td><button class="btn">Cerrar</button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

