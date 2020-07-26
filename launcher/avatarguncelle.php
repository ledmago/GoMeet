<?php include("header.php"); ?>
<p class="baslik">Avatar Güncelle</p><hr style="margin: 0px;padding: 0;margin-top: 17px;border-top: 2px solid rgb(202, 153, 11);margin-bottom:11px">
<?php if($_GET["do"] == "newkayit"){echo '<p style="font-family: Roboto Condensed;text-align:center">Buralarda yenisin galiba ? Hemen avatarını güncelleyerek bize katıl !</p>';} ?>
<div id="suanavatar">
<div id="suanavatar-edit"><i class="fa fa-pencil"></i></div>

<img src="<?php echo uye_veri_cek("avatar"); ?>">
</div><!-- Suan Avatar son -->
<form id="avatardegis" style="display: none;" enctype="multipart/form-data" action="function_resimyukle.php" method="POST">
<input type="file" id="resim" name="resim">
</form>
<script>

$("#suanavatar-edit").click(function() {
    $("#resim").click();
})

$('#resim').change(function() {
    $('#avatardegis').submit();
});

</script>
<?php include("footer.php"); ?>