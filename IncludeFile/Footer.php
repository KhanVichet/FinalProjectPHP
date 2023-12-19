<footer>
    <div class="footer">
        <div class="socail-media">
            <div class="title">
                <h3>FIND US MORE</h3>
            </div>
            <div class="icon-socail-media">
                <ul>
                    <li>
                        <i class="fa-brands fa-facebook"></i>
                        <a href="#">Travel Quest</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">travel_quest</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu-footer">
            <ul>
                <?php
                $menufooter = [
                    [
                        "name" => "HOME",
                        "href" => "Home.php",
                    ],

                    [
                        "name" => "ABOUT US",
                        "href" => "about_us.php",
                    ],
                ];
                foreach ($menufooter as $menufooter) {
                    echo '<li><a href="' . $menufooter["href"] . '">' . $menufooter["name"] . '</a></li>';
                }
                ?>

            </ul>
        </div>
        <div class="contant">
            <div class="title">
                <h3>QUICK CONTACT</h3>
            </div>
            <div class="icon-socail-media">
                <ul>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="#">+885 99 780 819</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-telegram"></i>
                        <a href="#">
                            travel_quest / +885 99 780 819
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-at"></i>
                        <a href="#">travelquest@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <h4>Copyright@IT30-33/45 PHP&MySQL Group II</h4>
    </div>
</footer>