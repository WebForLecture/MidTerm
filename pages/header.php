<div id="header">
    <div class="header_content">
        <?php
            if (isset($_GET['user'])) {
                $temp = $_GET['user'];
            }
            else {
                $temp = '';
            }
            if ($temp == 'lectures') {
                include("header/lectures.php");
            }elseif ($temp == 'annoucements') {
                include("header/annoucements.php");
            }elseif ($temp == 'jobs') {
                include("header/jobs.php");
            }elseif ($temp == 'contact') {
                include("header/contact.php");
            }elseif ($temp == 'introduce') {
                include("header/index.php");
            }
        ?>
    </div>
</div>