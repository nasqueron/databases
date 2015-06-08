    <footer>
        <div class="row">
            <div class="large-3 columns sep" style="text-align: center">
                <img src="{#StaticContentURL#}/img/Nasqueron.png" /></p>
                <p><strong>Nasqueron</strong> is a community of developers & creative people.</p>
                <hr />
                <p><strong>Nasqueron Databases</strong> is a collection of databases, and small applications build on the top of these databases.</p>
            </div>
            <div class="large-3 columns sep">
                <h4>License</h4>
                <p>This is <em>open data</em>, licensed under the Open Data Commons Open Database License (ODbL). </p>
                <p>Please note the lyrics excerpts are copyrighted, and have been included in the database per the right to quote.</p></p>

                <h4>Reuse data</h4>
                <p>You can freely reuse our data. We're willing to build API or prepare dumps to help you upon request.</p>
            </div>
            <div class="large-3 columns sep">
                <h4>Newsletter</h4>
                <p>Stay in touch and get informed when we add a new database.</p>
                <form method="post">
                    <div class="row collapse">
                        <div class="small-10 columns">
                            <input type="text" name="mail" id="mail" placeholder="username@domain.tld">
                        </div>
                        <div class="small-2 columns">
                            <input type="submit" class="button prefix" value="OK" />
                        </div>
                    </div>
                </form>
                <hr />
                <h4>Participate</h4>
                <p>If you wish to participate, your help is welcome.</p>
            </div>
            <div class="large-3 columns" style="text-align: right">
                <img src="http://www.clker.com/cliparts/i/D/E/7/A/J/database-symbol-md.png" style="margin-top: 2em;" />
            </div>
        </div>

        <div class="copyright">
            <div class="row">
                <div class="large-6 small-4 columns">
                    <p>2013, Nasqueron | Nasqueron Databases</p>
                    <p>{#NasqueronPoem#}</p>
                </div>
                <div class="large-6 small-8 columns">
                    <p style="text-align: right">{$version}</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.write('<script src={#StaticContentURL#}/' +
        ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
        '.js><\/script>')
    </script>
    <script src="{#StaticContentURL#}/js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
