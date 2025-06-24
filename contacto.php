<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Eternal Technology</title>
    <link rel="stylesheet" href="style/contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    
<?php include 'components/header.php'; ?>

<br><br><br>
    <main><br><br><br><br>
        <section class="contacto-hero">
            <div class="container">
                <h1>Contáctanos</h1>
                <p>Estamos aquí para ayudarte</p>
           
       
   
        <form action="enviar_correo.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form><br><br><br>
    </div>
    <?php include 'components/footer.php'; ?>
</body>
</html>
        </section>
    </main>
    


