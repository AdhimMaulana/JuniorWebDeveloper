<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
            overflow: hidden;
        }

        .profile-picture {
            text-align: center;
            padding: 20px;
        }

        .profile-picture img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-details {
            padding: 20px;
        }

        .detail {
            margin-bottom: 15px;
        }

        .detail label {
            font-weight: bold;
            width: 150px;
            display: inline-block;
        }

        .detail span {
            display: inline-block;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-picture">
            <img src="image/motoclub.png" alt="Profile Picture">
        </div>
        <div class="profile-details">
            <h1>Profile Perusahaan</h1>
            <div class="detail">
                <label>Nama Perusahaan:</label>
                <span>BikeCode</span>
            </div>
            <div class="detail">
                <label>Pemilik:</label>
                <span>Adhim Maulana</span>
            </div>
            <div class="detail">
                <label>Email:</label>
                <span>adhimwiw@gmail.com</span>
            </div>
            <div class="detail">
                <label>Umur Perusahaan:</label>
                <span>2.5 tahun</span>
            </div>
            <div class="detail">
                <label>Lokasi:</label>
                <span>Indonesia, Banjarmasin</span>
            </div>
        </div>
    </div>
</body>

</html>