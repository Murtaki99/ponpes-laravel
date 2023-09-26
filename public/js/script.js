document.getElementById('btnPilihSemua').addEventListener('click', function() {
        var checkboxes = document.querySelectorAll('input[name="selected_santri[]"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = true;
        });
});
//ceklis halaman laporan