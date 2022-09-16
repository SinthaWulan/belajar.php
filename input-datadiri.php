<?php
    include('./input-config.php');
    echo "<a href=' in[ut-datadiri-tambah.php'>Tambah Data</a>";
    echo "<hr>";
    // READ - Menampilkan data dari database
    $no =1;
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM datadiri");
    while($row = mysqli_fetch_array($data)){
        $tabledata .="
        <tr>
            <td>".$no.".</td> 
             <td>".$row["nis"]."</td>
             <td>".$row["namalengkap"]."</td>
             <td>".$row["tanggal_lahir"]."</td>
             <td>".$row["nilai"]."</td>
             <td>
                <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                &nbsp;-&nbsp;
                <a href='input-datadiri-hapus.php?nis=".$row["nis"]."'>Hapus</a>
            </td>
        </tr>    
     ";
    $no++;
    }
    echo"
         <table cellpanding=5 border=1 cellspacing=0>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
                <th>Aksi</th>
             </tr>
             $tabledata
        </table>    
    ";        

?>