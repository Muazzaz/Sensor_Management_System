
<div class="row d-flex justify-content-center ">
     <div class="col-8 " >
     <div class="alert alert-success text-center" role="alert" data-aos='fade-up' data-aos-duration='1000'>
    Temperature Log
</div>
     <div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-hover text-center" data-aos='fade-up' data-aos-duration='2000'>
    <thead class="thead-dark">
        <tr class="mx-auto">
        <th scope="col">Sl No.</th>
        <th scope="col">Temperature</th>
        <th scope="col">Date & Time</th>
        </tr>
    </thead>
<?php
$sql = "SELECT Tempno_,Temp_ ,added_at FROM temp_log";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Tempno_"]. "</td><td>" . $row["Temp_"] . "</td><td>" . $row["added_at"] . "</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
?>
</table>
</div>
</div>
</div>