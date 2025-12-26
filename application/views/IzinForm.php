<h2>Yurttan İzin Talep Formu</h2>

<form action="<?= site_url('IzinAl/kaydet'); ?>" method="post">

    Ad Soyad: 
    <input type="text" name="ogrenci_adi" placeholder="Ör: Salim Kavaklıçay" required><br><br>

    Başlangıç Tarihi: 
    <input type="date" name="baslangic" required><br><br>

    Bitiş Tarihi: 
    <input type="date" name="bitis" required><br><br>

    Sebep: 
    <textarea name="sebep" required placeholder="İzin talep sebebinizi yazın..."></textarea><br><br>

    <button type="submit">İzin Talep Et</button>

</form>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        background: #fff;
        width: 600px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input, form textarea, form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background: #fafafa;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #005bbb;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }

    button:hover {
        background: #004799;
    }

    /* Onay Tablosu */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background: #005bbb;
        color: white;
    }

    .btn-onayla {
        background: green;
        padding: 5px 10px;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-red {
        background: crimson;
        padding: 5px 10px;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }

    .message {
        padding: 10px;
        margin-bottom: 15px;
        text-align: center;
        border-radius: 5px;
        font-weight: bold;
    }

    .success {
        background: #4caf50;
        color: white;
    }

    .error {
        background: #f44336;
        color: white;
    }
</style>
