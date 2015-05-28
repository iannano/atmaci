<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<center <p><h1> Post Berita </h1></p>
    
<form action="">
    <div class="field">
        <label>Judul</label>
        <input type="text" name="post_title" placeholder="Nama Lengkap">
    </div>
    <div class="field">
        <label>Isi</label>
        <textarea class="ckeditor" name="editor"></textarea>
    </div>
    <input type="submit" value="Post">
</form>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor' );
</script>