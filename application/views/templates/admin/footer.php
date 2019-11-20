</body>

<script src="<?= base_url() ?>assets/admin/js/jquery-3.3.1.js"></script>
<script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/script.js"></script>
<script src="<?= base_url() ?>assets/admin/js/iconify.min.js"></script>

<script>

    $(document).ready(function()
    {
        $("#jurusan").on('change', function()
        {
            var id_jurusan  = $(this).val();
            var tahun       = document.getElementById('tahun').value;

            $.ajax({
                url     : "<?= base_url('admin/kelas/detail_kelas') ?>",
                method  : "POST",
                data    : {id_tahun:tahun,id_jurusan:id_jurusan},
                dataType: 'json',
                success  : function(hasil)
                {
                    var baris = "<option value=''>-- Pilih Kelas --</option>";
                    for (i=0; i<hasil.length; i++)
                    {
                        baris+="<option value='"+hasil[i].id_kelas+"'>"
                        +hasil[i].nama_tingkat+ " "
                        +hasil[i].nama_kelas+"</option>";
                    }
                    $("select[name=id_kelas]").html(baris);
                }
            })
            
        })
    })

</script>

<script>

    function check_uncheck_checkbox(isChecked) {
        if(isChecked){
            $('input:checkbox').each(function(){
                this.checked = true;
            });
        } else {
            $('input:checkbox').each(function(){
                this.checked = false;
            });
        }
    }

</script>


<script>

    $(document).ready(function(){

        $("#lama").on('click', function(){
            var x = document.getElementById("password_lama");
            if (x.type === "password") {
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        })

        $("#konfirmasi").on('click', function(){
            var x = document.getElementById("password_konfirmasi");
            if (x.type === "password") {
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        })

        $("#baru").on('click', function(){
            var x = document.getElementById("password_baru");
            if (x.type === "password") {
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        })

    })

</script>