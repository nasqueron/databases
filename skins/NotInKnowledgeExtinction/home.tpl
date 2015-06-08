    <section class="row" id="databases" style="min-height: 300px;">
            <div class="large-4 columns">
                <h4>Databases list</h4>
                <ul>
{foreach $databases as $database}
                    <li>{$database}</li>
{/foreach}
                </ul>
            </div>

        <div class="large-4 columns">
          <a href="grid.php" class="pic" id="featureGrid"></a>
          <h4><a href="grid.php">Flexible Grid</a></h4>

          <p>The flexible grid can adapt to any size screen, from phones to TVs.</p>

        </div>
        <div class="large-4 columns">
          <a href="prototyping.php" class="pic" id="featurePrototype"></a>
          <h4><a href="prototyping.php">Rapid Prototyping</a></h4>

          <p>Dozens of elements and styles to help you go from coded prototype to polished product.</p>

        </div>
    </section>
