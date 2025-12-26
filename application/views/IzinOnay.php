<div class="container">
    <h2>İzin Talepleri</h2>
    <table>
        <tr>
            <th>Ad Soyad</th>
            <th>Başlangıç</th>
            <th>Bitiş</th>
            <th>Sebep</th>
            <th>Durum</th>
            <th>İşlem</th>
        </tr>

        <?php foreach($izinler as $i): ?>
        <tr>
            <td><?= $i->adsoyad; ?></td>
            <td><?= $i->baslangic; ?></td>
            <td><?= $i->bitis; ?></td>
            <td><?= $i->sebep; ?></td>
            <td><?= $i->durum; ?></td>
            <td>
                <a href="<?= base_url('IzinOnay/onayla/'.$i->id); ?>" class="btn-onayla">Onayla</a>
                <a href="<?= base_url('IzinOnay/reddet/'.$i->id); ?>" class="btn-red">Reddet</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

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
