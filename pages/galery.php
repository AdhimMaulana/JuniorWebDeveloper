<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto - Perusahaan Motor Club</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .image img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Galeri Foto</h1>
        <div class="gallery">
            <div class="image">
                <img src="image/motor1.png" alt="Foto 1">
            </div>
            <div class="image">
                <img src="image/motor2.png" alt="Foto 2">
            </div>
            <div class="image">
                <img src="image/motor3.png" alt="Foto 3">
            </div>
            <!-- Tambahkan gambar-gambar lainnya sesuai dengan galeri foto perusahaan motor club Anda -->
        </div>
    </div>
</body>

</html>