<?php
if (isset($_GET['find'])) {
    try {
        echo '<div class="text-center"><pre>';
        include($_GET['find']);
        echo '</pre></div>';
        if (file_exists($_GET['find'])) {
            echo '<div class="text-center"><pre style="color: green;">Loaded '. $_GET['find'] . ' successfully..</pre></div>';
        }
        else {
            echo '<div class="text-center"><pre style="color: red;">Failed to load '. $_GET['find'] . '...</pre></div>';
        }
    }
    catch (Exception $e) {
        echo '<div class="text-center"><pre style="color: red;">Failed to load '. $_GET['find'] . '...</pre></div>';
    }
}
?>
