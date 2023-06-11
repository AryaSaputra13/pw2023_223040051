<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>

<script src="../../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>


<script>
    $(document).ready(function () {
    $('#daftar-pengajar').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
                    { 
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf"></i> PDF',
                        className: 'btn btn-danger', 
                        orientation: 'landscape',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)',
                            modifier: {
                                page: 'current'
                            }
                        },
                        customize: function(doc) {
                            var table = doc.content[1].table;
                            var firstColumnWidth = 3;

                            var header = doc.content[1].table.body[0];

                            for (var i = 0; i < header.length; i++) {
                            header[i].alignment = 'left';
                            }

                            table.widths = Array(table.body[0].length).fill('*');
                            table.widths[0] = firstColumnWidth + '%';
                        }
                    }
                ],
    });
})
</script>

<script>
    $(document).ready(function () {
    $('#daftar-siswa').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
                    { 
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf"></i> PDF',
                        className: 'btn btn-danger', 
                        orientation: 'portrait',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)',
                            modifier: {
                                page: 'current'
                            }
                        },
                        customize: function(doc) {
                            var table = doc.content[1].table;
                            var firstColumnWidth = 2;

                            var header = doc.content[1].table.body[0];

                            for (var i = 0; i < header.length; i++) {
                            header[i].alignment = 'left';
                            }

                            table.widths = Array(table.body[0].length).fill('*');
                            table.widths[0] = firstColumnWidth + '%';
                        }
                    }
                ],
    });
})   
</script>



</body>
</html>