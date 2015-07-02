<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/header_template.html")?>
            <!-- navigation -->
            <nav>
                <b>Home</b>
                <br>
                <a href="/soft">Software</a>
                <br>
                <a href="/news">News</a>
                <br>
                <a href="/contact">Contact</a>
            </nav>
            <!-- content -->
            <div id="content">
                <h1>Welcome</h1>
                <p>Hi, im Greg and this is my site. Since there is almost nothing here yet, feel free to walk around.</p>
                <!-- upadtes -->
                <br>
                <h1 id="updates">Updates</h1>
                <p>2015-1-28 : Website Re-Designed.</p>
                <br>
                <!-- software -->
                <h1 id="software">Software</h1>
                <em>soon</em>
                <br>
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/footer_template.html")?>