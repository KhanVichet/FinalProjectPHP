<header>
    <div class="container">
        <div class="logo">
            <a href="../Public/Home.php">
                <img src="../Image/TravelQuest.png" alt="">
            </a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="../Public/Home.php">HOME</a></li>
                <li><a>WHERE TO GO</a>
                    <div class="dropdown">
                        <div class="list1">
                            <div class="header-list">
                                <h2>Most Attractive In SEA</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-left">
                                    <ul>
                                        <?php
                                        $mostAttractiveInSea = [
                                            [
                                                "list" => "Thailand",
                                                "href" => "place_visit.php?fdID=1",
                                            ],
                                            [
                                                "list" => "Vietnam",
                                                "href" => "place_visit.php?fdID=2",
                                            ],
                                            [
                                                "list" => "Malaysia",
                                                "href" => "place_visit.php?fdID=3"
                                            ],
                                            [
                                                "list" => "Singapore",
                                                "href" => "place_visit.php?fdID=4 ",
                                            ],
                                            [
                                                "list" => "Indonesia",
                                                "href" => "place_visit.php?fdID=6",
                                            ],
                                            [
                                                "list" => "Laos",
                                                "href" => "place_visit.php?fdID=5",
                                            ],
                                        ];
                                        foreach ($mostAttractiveInSea as $list) {
                                            echo "<li>";
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="list2">
                            <div class="header-list">
                                <h2>Local</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Banteay Meanchey',
                                                'href' => 'place_visit.php?fdID=7',
                                            ],
                                            [
                                                'list' => 'Battambang',
                                                'href' => 'place_visit.php?fdID=8',
                                            ],
                                            [
                                                'list' => 'Kampong Cham',
                                                'href' => 'place_visit.php?fdID=9',
                                            ],
                                            [
                                                'list' => 'Kampong Chhnang',
                                                'href' => 'place_visit.php?fdID=10',
                                            ],
                                            [
                                                'list' => 'Kampong Speu',
                                                'href' => 'place_visit.php?fdID=11',
                                            ],
                                            [
                                                'list' => 'Kampong Thom',
                                                'href' => 'place_visit.php?fdID=12',
                                            ],

                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Kampot',
                                                'href' => 'place_visit.php?fdID=13',
                                            ],
                                            [
                                                'list' => 'Kandal',
                                                'href' => 'place_visit.php?fdID=14',
                                            ],
                                            [
                                                'list' => 'Koh Kong',
                                                'href' => 'place_visit.php?fdID=16',
                                            ],
                                            [
                                                'list' => 'Kratié',
                                                'href' => 'place_visit.php?fdID=17',
                                            ],
                                            [
                                                'list' => 'Mondulkiri',
                                                'href' => 'place_visit.php?fdID=18',
                                            ],
                                            [
                                                'list' => 'Phnom Penh',
                                                'href' => 'place_visit.php?fdID=21',
                                            ],


                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>

                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Preah Vihear',
                                                'href' => 'place_visit.php?fdID=23',
                                            ],
                                            [
                                                'list' => 'Prey Veng',
                                                'href' => 'place_visit.php?fdID=24',
                                            ],
                                            [
                                                'list' => 'Pursat',
                                                'href' => 'place_visit.php?fdID=25',
                                            ],
                                            [
                                                'list' => 'Ratanakiri',
                                                'href' => 'place_visit.php?fdID=26',
                                            ],
                                            [
                                                'list' => 'Siem Reap',
                                                'href' => 'place_visit.php?fdID=27',
                                            ],
                                            [
                                                'list' => 'Preah Sihanouk',
                                                'href' => 'place_visit.php?fdID=22',
                                            ],

                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Stung Treng',
                                                'href' => 'place_visit.php?fdID=28',
                                            ],
                                            [
                                                'list' => 'Svay Rieng',
                                                'href' => 'place_visit.php?fdID=29',
                                            ],
                                            [
                                                'list' => 'Takéo',
                                                'href' => 'place_visit.php?fdID=30',
                                            ],
                                            [
                                                'list' => 'Oddar Meanchey',
                                                'href' => 'place_visit.php?fdID=19',
                                            ],
                                            [
                                                'list' => 'Kep',
                                                'href' => 'place_visit.php?fdID=15',
                                            ],
                                            [
                                                'list' => 'Pailin',
                                                'href' => 'place_visit.php?fdID=20',
                                            ],
                                            [
                                                'list' => 'Tboung Khmum',
                                                'href' => 'place_visit.php?fdID=31',
                                            ]
                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="bus.php">HOW TO GO</a></li>
                <li>
                    <a>WHERE TO STAY</a>
                    <div class="dropdown stay">
                        <div class="list2">
                            <div class="header-list">
                                <h2>Local</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Banteay Meanchey',
                                                'href' => 'hotel.php?fdID=1',
                                            ],
                                            [
                                                'list' => 'Battambang',
                                                'href' => 'hotel.php?fdID=2',
                                            ],
                                            [
                                                'list' => 'Kampong Cham',
                                                'href' => 'hotel.php?fdID=3',
                                            ],
                                            [
                                                'list' => 'Kampong Chhnang',
                                                'href' => 'hotel.php?fdID=4',
                                            ],
                                            [
                                                'list' => 'Kampong Speu',
                                                'href' => 'hotel.php?fdID=5',
                                            ],
                                            [
                                                'list' => 'Kampong Thom',
                                                'href' => 'hotel.php?fdID=6',
                                            ],

                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Kampot',
                                                'href' => 'hotel.php?fdID=7',
                                            ],
                                            [
                                                'list' => 'Kandal',
                                                'href' => 'hotel.php?fdID=8',
                                            ],
                                            [
                                                'list' => 'Koh Kong',
                                                'href' => 'hotel.php?fdID=10',
                                            ],
                                            [
                                                'list' => 'Kratié',
                                                'href' => 'hotel.php?fdID=11',
                                            ],
                                            [
                                                'list' => 'Mondulkiri',
                                                'href' => 'hotel.php?fdID=12',
                                            ],
                                            [
                                                'list' => 'Phnom Penh',
                                                'href' => 'hotel.php?fdID=15',
                                            ],


                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>

                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Preah Vihear',
                                                'href' => 'hotel.php?fdID=17',
                                            ],
                                            [
                                                'list' => 'Prey Veng',
                                                'href' => 'hotel.php?fdID=18',
                                            ],
                                            [
                                                'list' => 'Pursat',
                                                'href' => 'hotel.php?fdID=19',
                                            ],
                                            [
                                                'list' => 'Ratanakiri',
                                                'href' => 'hotel.php?fdID=20',
                                            ],
                                            [
                                                'list' => 'Siem Reap',
                                                'href' => 'hotel.php?fdID=21',
                                            ],
                                            [
                                                'list' => 'Preah Sihanouk',
                                                'href' => 'hotel.php?fdID=16',
                                            ],

                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php
                                        $local = [
                                            [
                                                'list' => 'Stung Treng',
                                                'href' => 'hotel.php?fdID=22',
                                            ],
                                            [
                                                'list' => 'Svay Rieng',
                                                'href' => 'hotel.php?fdID=23',
                                            ],
                                            [
                                                'list' => 'Takéo',
                                                'href' => 'hotel.php?fdID=24',
                                            ],
                                            [
                                                'list' => 'Oddar Meanchey',
                                                'href' => 'hotel.php?fdID=13',
                                            ],
                                            [
                                                'list' => 'Kep',
                                                'href' => 'hotel.php?fdID=9',
                                            ],
                                            [
                                                'list' => 'Pailin',
                                                'href' => 'hotel.php?fdID=14',
                                            ],
                                            [
                                                'list' => 'Tboung Khmum',
                                                'href' => 'hotel.php?fdID=25',
                                            ]
                                        ];
                                        foreach ($local as $list) {
                                            echo '<li>';
                                            echo '<i class="fa-solid fa-location-dot"></i>';
                                            echo '<a href="' . $list["href"] . '">' . $list["list"] . '</a>';
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="about_us.php">ABOUT US</a></li>
            </ul>
        </div>

        <div class="wish-icon">
            <!-- <div class="wish">
                <i class="fa-brands fa-facebook"></i>
                <h3>Facebook</h3>
            </div>
            <div class="wish">
                <i class="fa-solid fa-magnifying-glass"></i>
                <h3>Search Here</h3>
            </div> -->
            <!-- <div class="wish">
                <i class="fa-regular fa-user"></i>
                <h3>Login</h3>
            </div> -->
        </div>
    </div>
</header>


<!-- login -->
<!-- <div class="wrapper">
    <div class="icon-close"><i class="fa-regular fa-circle-xmark close-login"></i></div>
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" required>
                <label for="">Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" required>
                <label for="">Password</label>
            </div>
            <button type="submit" class="btn btn-login">Login</button>
            <div class="login-register">
                <p>Don't have an account ?<a class="register-link">Register</a></p>
            </div>
        </form>
    </div>

    <div class="form-box register">
        <h2>Registration</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" required>
                <label for="">Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" required>
                <label for="">Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" required>
                <label for="">Password</label>
            </div>
            <div class="remember-forgot">
                <label for=""><input type="checkbox">I agree to the terms & conditions</label>
            </div>
            <button type="submit" class="btn btn-register">Register</button>
            <div class="login-register">
                <p>Already have an account ?<a class="login-link">Login</a></p>
            </div>
        </form>
    </div>
</div> -->
<!-- end login -->