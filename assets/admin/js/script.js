// data table
$(document).ready(function() {
    $('#datatable').DataTable();
} );


// mobile view
$(window).bind("load resize", function()
{
    if($(this).width() < 768)
    {
        $('div.sidebar-collapse').addClass('collapse')
    }
    else
    {
        $('div.sidebar-collapse').removeClass('collapse')
    }
});

// button collapse
$(document).ready(function(){
    $(".tr-tree").each(function(){
        var link = $(this).children("a").first();
        var submenu = $(this).children(".tr-tree-menu").first();
        var isActive = $(this).hasClass("active");
        if (isActive) {
            submenu.slideDown();
        }
        link.click(function(e){
            e.preventDefault();
            if (isActive){
                submenu.slideUp();
                isActive=false;
            }
            else
            {
                submenu.slideDown();
                isActive=true;
            }
        })
    })
})


/* */
$(document).ready(function(){
    $('#keyword').on('keyup', function(){
        $('#container').load('ajax/data.php?keyword=' + $('#keyword').val());
    });
});
$(document).ready(function() {
    
    var input = $("#focus");
    var len = input.val().length;
    input[0].focus();
    input[0].setSelectionRange(len, len);
    
});

// Dynamic Combobox Kelas
$(document).ready(function() {
    $('#tahun').change(function() {
        var tahun = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'http://localhost/SistemInformasiOrangtua/admin/nilai/ajax_kelas.php',
            data: 'id_tahun=' + tahun,
            success: function(response)
            {
                $('#kelas').html(response);
            }
        });
    });
})

// Dynamic Combobox Mapel
$(document).ready(function(){
    $('#semester').change(function(){
        var semester = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'http://localhost/SistemInformasiOrangtua/admin/nilai/ajax_mapel.php',
            data: 'id_semester=' + semester,
            success: function(response) 
            {
                $('#mapel').html(response);
            }
        });
    });
})
