<div id="main">
    <div class="main_content">
        <?php
            if (isset($_GET['user'])) {
                $temp = $_GET['user'];
            }
            else {
                $temp = '';
            }
            if ($temp == 'lectures') {
                include("main/lectures.php");
            }elseif ($temp == 'annoucements') {
                include("main/annoucements.php");
            }elseif ($temp == 'jobs') {
                include("main/jobs.php");
            }elseif ($temp == 'contact') {
                include("main/contact.php");
            }elseif ($temp == 'introduce') {
                include("main/index.php");
            }
        ?>
    </div>
</div>