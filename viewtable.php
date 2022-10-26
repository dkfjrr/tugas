<html>
    <header>
        <h3>MENAMPILKAN DATA<h3>
    </header>
        <body>
            <table border='1'>
                <thead>
                    <tr>
                        <th>Nama Lukisan</th>
                        <th>Nama Pelukis</th>
                    </tr>
                </thead>

                <?php
                include "koneksi.php";
                $no = 1;
                $ambildata = mysqli_query($kon, 'SELECT * FROM vlukis');
                while ($data = mysqli_fetch_array($ambildata)) {
                    echo "
                <tr>
                    <td>$data[nama_lukisan]</td> 
                    <td>$data[nama_pelukis]</td> 
                </tr>";
                }
                ?>
            </table>
        </body> 
</html>