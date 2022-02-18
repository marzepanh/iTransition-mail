<?php
    require_once 'connect.php';

    if(isset($_COOKIE['user'])) {
        $user = $_COOKIE['user'];
        $result = mysqli_query($connect, "SELECT * FROM `messages` WHERE `sendTo` = '$user'");
        $i = 1;
        while ($message = mysqli_fetch_assoc($result)) {
            $sender = $message['sender'];
            $subject = $message['subject'];
            $msg = $message['message'];
            $date = $message['date'];
            $messageId = $message['id'];

            echo "
        <tr>
            <th scope=\"row\">$i</th>
            <td>$sender</td>
            <td>$date</td>
            <td>
                <div class=\"accordion accordion-flush\" id=\"accordionFlushExample$messageId\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"flush-headingOne$messageId\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne$messageId\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne$messageId\">
                    $subject
                </button>
            </h2>
            <div id=\"flush-collapseOne$messageId\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne$messageId\" data-bs-parent=\"#accordionFlushExample$messageId\">
                <div class=\"accordion-body\">$msg</div>
            </div>
        </div>
    </div>
            </td>
            <td><span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">$msg</span></td>
        </tr>
        ";
            $i++;
        };
    }
