<h2>Reddetme Sebebi Gir</h2>

<form action="<?= site_url('IzinOnay/reddet'); ?>" method="post">

    <input type="hidden" name="id" value="<?= $id ?>">

    Sebep:
    <textarea name="red_sebep" required></textarea><br><br>

    <button type="submit">Kaydet</button>

</form>
