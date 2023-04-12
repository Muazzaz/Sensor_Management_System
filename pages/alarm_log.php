
    <div class="row d-flex justify-content-center ">
     <div class="col-8 " >
     <div class="alert alert-danger text-center" role="alert" data-aos='fade-up' data-aos-duration='1000'>
            Alarm Log
        </div>
     <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table table-hover table-striped text-center" data-aos='fade-up' data-aos-duration='2000'>
            <thead class="table-danger">
                <th scope="col">Sl No.</th>
                <th scope="col">Temperature</th>
                <th scope="col">Date & Time</th>
                </tr>
            </thead>
        <?php
        $sql = "SELECT Alarmno_,Alarm_,added_at FROM alarm_log";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Alarmno_"]. "</td><td>" . $row["Alarm_"] . "</td><td>" . $row["added_at"] . "</td></tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
        //$conn->close();
        ?>
        </table>
    </div>
        </div>
        </div>