<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página HTML Básica</title>
</head>
<body>
  <header>
    <h1>Bienvenido a Mi Página Web</h1>
    <p>Esta es una sección de encabezado simple.</p>
  </header>
  
  <aside>
    <h2>Información Lateral</h2>
    <p>Esta es información adicional en un elemento aside.</p>
  </aside>

  <div>
    <h2>Página Web Simple</h2>

    <div>
      <p>Este es un elemento básico <code>div</code> que contiene algo de texto.</p>
    </div>

    <div>
      <p>Aquí hay una imagen:</p>
      <img src="https://via.placeholder.com/150" alt="Imagen de Ejemplo">
    </div>

    <form>
      <label for="name">Nombre:</label>
      <input type="text" id="name" name="name" />

      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" />

      <label for="message">Mensaje:</label>
      <textarea id="message" name="message" rows="4"></textarea>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <footer>
    <p>&copy; 2025 Mi Sitio Web Simple. Todos los derechos permitidos.</p>
  </footer>
</body>
</html>
