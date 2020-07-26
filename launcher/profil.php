<?php include("header.php"); ?>
<p class="baslik" style="color:purple">Profil</p><hr style="margin: 0px;padding: 0;margin-top: 17px;border-top: 2px solid purple;margin-bottom:11px">
<?php if($_GET["do"] == "newkayit"){echo '<p style="font-family: Roboto Condensed;text-align:center">Buralarda yenisin galiba ? Hemen avatarını güncelleyerek bize katıl !</p>';} ?>
<div id="profilavatar">
<div id="profilavatar_envarter">s</div>

<img src="<?php echo uye_veri_cek("avatar"); ?>">
</div><!-- Suan Avatar son -->

<script>

$("#suanavatar-edit").click(function() {
    $("#resim").click();
})

$('#resim').change(function() {
    $('#avatardegis').submit();
});

</script>
<?php include("footer.php"); ?>