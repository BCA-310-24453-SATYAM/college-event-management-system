<?php
require_once 'utils/header.php';
require_once 'utils/styles.php';

$id = $_POST['usn'];

include_once 'classes/db1.php';

$result = mysqli_query($conn, "SELECT * FROM events e, event_info ef, student_coordinator st, staff_coordinator s WHERE e.event_id = ef.event_id AND e.event_id = st.event_id AND e.event_id = s.event_id");

$not_registered = mysqli_query($conn, "SELECT * FROM events e, event_info ef, student_coordinator st, staff_coordinator s WHERE e.event_id = ef.event_id AND e.event_id = st.event_id AND e.event_id = s.event_id AND e.event_id NOT IN (SELECT event_id FROM registered)");
?>

<div class="content">
    <div class="container">
        <h1>All Events</h1>
        <?php if ($result && mysqli_num_rows($result) > 0) { ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Student Co-ordinator</th>
                    <th>Staff Co-ordinator</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['event_title']; ?></td>
                    <td><?php echo $row['st_name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['Date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td>Rs. <?php echo $row['event_price']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else { echo '<p>No events found!</p>'; } ?>
    </div>
</div>

<?php include 'utils/footer.php'; ?>