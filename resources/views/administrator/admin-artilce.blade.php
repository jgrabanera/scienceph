<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Science PH" />
    <link rel="stylesheet" href="./style.css" />
    <title>Science PH | Admin Articles</title>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
</head>

<body>
    <div class="grid-container">
        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined">account_circle</span>
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="logo"><img src="./assets/images/scienceph-logo.png" alt="" /></div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="admin-dashboard.html" target=""> <span
                            class="material-icons-outlined">dashboard</span> Dashboard </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="admin-articles.html" target=""> <span
                            class="material-icons-outlined">inventory_2</span> Manage Articles </a>
                </li>
                <!-- <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">fact_check</span> Inventory </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">add_shopping_cart</span> Purchase Orders </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">shopping_cart</span> Sales Orders </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">poll</span> Reports </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank"> <span class="material-icons-outlined">settings</span> Settings </a>
          </li> -->
            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Main -->
        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">ARTICLES</p>
            </div>

            <input type="button" value="+ NEW ARTICLE" />
            <br>

            <div class="manage-article">
                <div class="new-article">
                    <div class="article-img">
                        <img src="./assets/images/img-placeholder.png" alt="" /><br />

                        <div>
                            <label for="author">Video Link:</label>
                            <input type="text" id="video" name="video" required /><br />
                        </div>
                    </div>
                    <div class="article-content">
                        <p class="font-weight-bold">Article Contents</p>
                        <form action="/submit" method="post">
                            <label for="title">Article Title:</label>
                            <input type="text" id="title" name="title" required /><br /><br />

                            <div class="article-author">
                                <div>
                                    <label for="author">Author:</label>
                                    <input type="text" id="author" name="author" required /><br />
                                </div>
                                <div>
                                    <label for="author">Article Moderator:</label>
                                    <input type="text" id="moderator" name="moderator" required /><br />
                                </div>
                                <div>
                                    <label for="category">Category:</label>
                                    <select id="category" name="category">
                                        <option value="technology">Health and Medical Sciences</option>
                                        <option value="lifestyle">Agriculture</option>
                                        <option value="travel">Food and Nutrition</option>
                                        <!-- Add more options as needed -->
                                    </select><br />
                                </div>
                                <div>
                                    <label for="author">Publish Date:</label>
                                    <input type="date" id="date" name="date" required /><br />
                                </div>

                            </div>
                            <label for="content">Content:</label><br />
                            <textarea id="content" name="content" rows="8" cols="50" required></textarea><br />
                            <div>
                                <label for="author">URL:</label>
                                <input type="text" id="url" name="url" /><br />
                            </div>
                            <div>
                                <label for="author">Tags:</label>
                                <input type="text" id="tag" name="tag" /><br />
                            </div>

                            <input type="button" value="SAVE" />
                        </form>
                    </div>


                </div>

            </div>


        </main>
        <!-- End Main -->
    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="./scripts.js"></script>
</body>

</html>
