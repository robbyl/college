        <ul>
            <li class="first"><a href="index.php"  class="<?php if ($current_file_name === 'index.php') echo 'current' ?>">Home</a></li>
            <li><a href="#" class="<?php if ($current_file_name === 'about.php') echo 'current' ?>">About Us</a>
                <ul>
                    <li><a href="background.php">Background</a></li>
                    <li><a href="mission.php">Mission, Vision & Goals</a></li>
                    <li><a href="org_structure.php">Institute Structure</a></li>
                </ul>
            </li>
            <li><a href="#" class="<?php if ($current_file_name === 'admissions.php') echo 'current' ?>">Admissions</a>
                <ul>
                    <li><a href="requirements.php">Entry requirements</a></li>
                    <li><a href="applicationform.php">Application Form</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="#">Programmes</a></li>
                </ul>
            </li>
            <li><a href="#"  class="<?php if ($current_file_name === 'academics.php') echo 'current' ?>">Academics</a>
                <ul>
                    <li><a href="library.php">Library</a></li>
                    <li><a href="lab.php">Laboratory</a></li>
                </ul>
            </li>
            <li><a href="#" class="<?php if ($current_file_name === 'research.php') echo 'current' ?>">Research</a></li>
            <li><a href="#" class="<?php if ($current_file_name === 'campus.php') echo 'current' ?>">Campus Life</a>
                <ul>
                    <li><a href="#">Hostel Information</a></li>
                    <li><a href="#">Student Organization</a></li>
                    <li><a href="#">Religion Life</a></li>
                    <li><a href="#">Spots and Games</a></li>
                </ul>
            </li>
            <li><a href="gallery.php" class="<?php if ($current_file_name === 'gallery.php') echo 'current' ?>">Gallery</a></li>
            <li><a href="contact.php" class="<?php if ($current_file_name === 'contact.php') echo 'current' ?>">Contact Us</a>
            <li><a href="sitemap.php" class="last <?php if ($current_file_name === 'sitemap.php') echo 'current' ?>">Site Map</a>
            </li>
        </ul>
