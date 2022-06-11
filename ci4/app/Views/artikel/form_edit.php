<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p><input type="text" name="judul" class="judul" value="<?= $data['judul'];?>" ></p>
    <p><textarea name="isi" cols="50" class="textarea" rows="10"><?= $data['isi'];?></textarea></p>
    <div>
        <button type="submit" value="Kirim" class="kirim">Kirim</button>
    </div>
</form>

<?= $this->include('template/admin_footer'); ?>