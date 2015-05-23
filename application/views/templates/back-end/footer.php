</html>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/jQuery-1.11.2/jquery-1.11.2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/Semantic-UI-1.12.0/dist/semantic.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/atma-main-asset/js/control-script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $('.dropdown').dropdown({
       transition: 'slide down',
       action: 'hide'
    });
    $('#tableProvinsi').DataTable();
    $('#dropdownProvinsi').dropdown({
        transition: 'slide down'
    });
</script>