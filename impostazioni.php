<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Impostazioni</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: white;
    width: 400px;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
}

.menu button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 6px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    font-size: 14px;
}

.menu button:hover {
    background-color: #0056b3;
}

.section {
    display: none;
    margin-top: 15px;
    padding: 15px;
    border-radius: 8px;
    background: #f9f9f9;
}

.section input {
    width: 100%;
    padding: 8px;
    margin-top: 8px;
    margin-bottom: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.section button {
    width: 100%;
    padding: 8px;
    border: none;
    border-radius: 6px;
    background-color: #28a745;
    color: white;
    cursor: pointer;
}

.section button:hover {
    background-color: #1e7e34;
}

.profile-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    display: block;
    margin: 10px auto;
}
</style>
</head>

<body>

<div class="container">
    <h2>Impostazioni</h2>

    <div class="menu">
        <button>Modifica Foto Profilo</button>
        <button>Modifica Nome Cognome</button>
        <button>Modifica Numero di Telefono</button>
    </div>

</div>

</body>
</html>
