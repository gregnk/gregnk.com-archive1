<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/header_template.html")?>
            <!-- navigation -->
            <nav>
                <a href="/">Home</a>
                <br>
                <a href="/soft">Software</a>
                <br>
                <b>News</b>
                <br>
                <a href="/contact">Contact</a>
            </nav>
            <!-- content -->
            <div id="content">
                <h1>News</h1>
                <br>
                <h2>2015-1-28: Website re-designed</h2>
                <div>
                    So I re-designed my site because the old one looked weird. Here are this list of changes:
                    <br>
                    <ul>
                        <li>The games and downloads section were integrated with the software section.</li>
                        <li>The header, footer and a bunch of other things changed</li>
                        <li>News will now only be on one page, the news section</li>
                        <li>The news section was cleaned up</li>
                        <li>All downloads, tutorials, games are now be hidden/removed</li>
                        <li>The site is now more small scale and just focused on software</li>
                        <li>As with the above the tutorials and about page has been removed.</li>
                        <li>And a whole bunch of other changes</li>
                    </ul>
                </div>
                    I will do other things with this site, just not often.
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/footer_template.html")?>