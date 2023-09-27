<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza tu archivo de estilos CSS aquí -->
    <style>
        /* Estilos básicos para la ventana de informes */
        .report-window {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilos para las estadísticas */
        .statistics {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .statistics ul {
            list-style-type: none;
        }

        .statistics li {
            margin: 10px 0;
        }

        /* Estilos para las animaciones */
        .animated-number {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
            color: #9B59B6;
        }

        /* Animación para los números de estadísticas */
        .animated-number span {
            display: inline-block;
            transform: translateY(20px);
            opacity: 0;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        /* Aplicar animación solo cuando la clase "count" está presente */
        .count .animated-number span {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
    <script>
        // JavaScript para iniciar la animación de números
        document.addEventListener('DOMContentLoaded', function() {
            const animatedNumbers = document.querySelectorAll('.animated-number');
            animatedNumbers.forEach(function(animatedNumber) {
                const number = animatedNumber.querySelector('span');
                const targetNumber = parseInt(number.dataset.target);
                let currentNumber = 0;

                const incrementNumber = () => {
                    if (currentNumber < targetNumber) {
                        currentNumber += 1;
                        number.textContent = currentNumber;
                        requestAnimationFrame(incrementNumber);
                    }
                };

                incrementNumber();
            });
        });
    </script>
    <title>Informe de Compras</title>
</head>
<body>
    <div class="report-window">
        <h1>Informe de Compras de Utensilios de Limpieza</h1>
        

        <div class="selections">
            <label for="sucursal">Sucursal:</label>
            <select id="sucursal" name="sucursal">
                <option value="todas">Todas</option>
                <option value="sucursal1">Sucursal 1</option>
                <option value="sucursal2">Sucursal 2</option>
                <option value="sucursal3">Sucursal 3</option>
            </select>

            <label for="periodo">Período:</label>
            <select id="periodo" name="periodo">
                <option value="semana">Esta semana</option>
                <option value="mes">Este mes</option>
                <option value="personalizado">Personalizado</option>
            </select>
        </div>

        <div class="custom-date">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
        </div>
        <div class="statistics">
            <h2>Estadísticas:</h2>
            <ul>
                <li>Total Comprado: $<span class="animated-number" data-target="500">0</span></li>
                <li>Artículos Comprados: <span class="animated-number" data-target="75">0</span></li>
                <li>Compra Promedio: $<span class="animated-number" data-target="6.67">0</span></li>
                <li>Número de Usos: <span class="animated-number" data-target="15">0</span></li>
            </ul>
        </div>
    </div>
</body>
</html>
