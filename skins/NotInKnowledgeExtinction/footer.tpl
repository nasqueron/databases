    </div>

    <footer>
        <div class="row footer-info db">
            <div class="large-3 columns sep" style="text-align: center">
                <img src="{#StaticContentURL#}/img/Nasqueron.png" /></p>
                <p>{#WhatIsNasqueron#}</p>
                <hr />
                <p>{#WhatIsNasqueronDatabases#}</p>
            </div>
            <div class="large-3 columns sep" style="min-height: 280px;">
                <!-- This is a Nasqueron page.
                     So, we share a footer portion with other Nasqueron pages:-->
{include file='/var/wwwroot/nasqueron.org/assets/footer/common_column.tpl' source=databases}
                <!-- That's all folks. -->
            </div>
            <div class="large-3 columns sep">
                <h4>{#Newsletter#}</h4>
                <p>{#NewsletterCallForAction#}</p>
                <form method="post">
                    <div class="row collapse">
                        <div class="small-10 columns">
                            <input type="text" name="mail" id="mail" placeholder="{#NewsletterMailPlaceholder#}">
                        </div>
                        <div class="small-2 columns">
                            <input type="submit" class="button prefix" value="{#NewsletterSubmit#}" />
                        </div>
                    </div>
                </form>
                <hr />
                <h4>{#Participate#}</h4>
                <p>{#ParticipateCallForAction#}</p>
            </div>
            <div class="large-3 columns">
                <h4>{#License#}</h4>
                <p>{#LicenseOpenData#}</p>
                <p>{#LicenseNotes#}</p>

                <h4>{#Reuse#}</h4>
                <p>{#ReuseCallForAction#}</p>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="large-6 small-4 columns">
                    <p>{#NasqueronCopyright#}<br />
                    {#NasqueronPoem#}</p>
                </div>
                <div class="large-6 small-8 columns">
                    <p style="text-align: right">{$version}<br />
                    [ Privacy policy | Terms of Use ]
                    </p>
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
