<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Pemrograman WebLanjut</title>
        <?php include "style.php"; ?>
    </head>
    <body>
        <table border="1px">
            <tr>
                <td colspan="2" style="text-align: center;">202143500686 - Hafidz al Fachridzi</td>
            </tr>
            <tr>
                <td>
                    <?php include "202143500686_list.php"; ?>
                </td>
                <td>
                    <h2>Generate Table</h2>

                        <form id="tableForm">
                        <label for="rows">Jumlah Baris:</label>
                        <input type="number" id="rows" name="rows" min="1" required><br><br>
                        
                        <label for="cols">Jumlah Kolom:</label>
                        <input type="number" id="cols" name="cols" min="1" required><br><br>
                        
                        <button type="submit">Buat Tabel</button>
                        </form>

                        <div id="tableContainer"></div>

                        <script>
                            document.getElementById('tableForm').addEventListener('submit', function(event) {
                                event.preventDefault();
                                
                                // Get values from form inputs
                                var rows = parseInt(document.getElementById('rows').value);
                                var cols = parseInt(document.getElementById('cols').value);
                                
                                // Generate table HTML
                                var tableHTML = '<table>';
                                for (var i = 0; i < rows; i++) {
                                tableHTML += '<tr>';
                                for (var j = 0; j < cols; j++) {
                                    tableHTML += '<td>baris ' + (i + 1) + ', kolom ' + (j + 1) + '</td>';
                                }
                                tableHTML += '</tr>';
                                }
                                tableHTML += '</table>';
                                
                                // Display the generated table
                                document.getElementById('tableContainer').innerHTML = tableHTML;
                            });
                        </script>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>