<?php
    if (isset($_GET['childName']) && isset($_GET['date']) && isset($_GET['excuse']) && isset($_GET['teacherName'])) {
        $childName = htmlspecialchars($_GET['childName']);
        $date = htmlspecialchars($_GET['date']);
        $teacher = htmlspecialchars($_GET['teacherName']);
        $excuseType = htmlspecialchars($_GET['excuse']);

        $excuseMessage = "";

        switch ($excuseType) {
            case 'illness':
                $excuseMessage = "was feeling unwell.";
                break;
            case 'death':
                $excuseMessage = "due to the death of a pet or a family member.";
                break;
            case 'activity':
                $excuseMessage = "had a significant extra-curricular activity.";
                break;
            case 'appointment':
                $excuseMessage = "had a doctor's appointment.";
                break;
            default:
                $excuseMessage = "could not attend school.";
                break;
        }

        echo "<div class='note'>
                <p>Dear Teacher $teacher,</p>
                <p>Please excuse my child, <strong>$childName</strong>, from school activities on <strong>$date</strong> as they $excuseMessage</p>
                <p>Thank you for your understanding.</p>
                <p>Sincerely,</p>
            </div>";
    }
    ?>
    <form action="excuse.php" method="get">
        <label for="childName">Child's Name:</label>
        <input type="text" name="childName" required><br><br>

        <label>
        <input type="radio" name="gender" value="man"required> Boy
        </label>
        <label>
            <input type="radio" name="gender" value="woman"> Girl
        </label><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="teacherName">Teacher's Name:</label>
        <input type="text" name="teacherName" required><br><br>

        <label>Select an Excuse:</label><br>
        <input type="radio" id="illness" name="excuse" value="illness" required>
        <label for="illness">Illness</label><br>

        <input type="radio" id="death" name="excuse" value="death" required>
        <label for="death">Death of the pet (or a family member)</label><br>

        <input type="radio" id="activity" name="excuse" value="activity" required>
        <label for="activity">Significant extra-curricular activity</label><br>

        <input type="radio" id="appointment" name="excuse" value="appointment" required>
        <label for="appointment">Had a doctor's appointment.</label><br><br>

        <button type="submit">Generate Excuse Note</button>
    </form>