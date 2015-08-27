<table class="software">
    <ul>
        <li class="carousel">
          <thead>
              <h3>Featured Projects</h3>
          </thead>
          <tbody>
              <ul>
                  <li>
                      <?php include'/assets/cdn/main/php/project-thumb.php'; ?>
                  </li>
              </ul>
          </tbody>
        </li>
        <li class="carousel">
          <thead>
              <h3>Recent Projects</h3>
          </thead>
          <tbody>
              <ul>
                  <li>
                      <?php include'/assets/cdn/main/php/project-thumb.php'; ?>
                  </li>
              </ul>
          </tbody>
        </li>
        <?php
        if ($_SERVER['PHP_SELF'] == "/projects/index.php") {
            ?><li class="carousel">
              <thead>
                  <h3>All Javascript Projects</h3>
              </thead>
              <tbody>
                  <ul>
                      <li>
                          <?php include'/assets/cdn/main/php/project-thumb.php'; ?>
                      </li>
                  </ul>
              </tbody>
            </li>
            <li class="carousel">
              <thead>
                  <h3>All Java/C++ Projects</h3>
              </thead>
              <tbody>
                  <ul>
                      <li>
                          <?php include'/assets/cdn/main/php/project-thumb.php'; ?>
                      </li>
                  </ul>
              </tbody>
            </li>
            <li class="carousel">
              <thead>
                  <h3>All Python Projects</h3>
              </thead>
              <tbody>
                  <ul>
                      <li>
                          <?php include'/assets/cdn/main/php/project-thumb.php'; ?>
                      </li>
                  </ul>
              </tbody>
            </li><?php
        }
        ?>
    </ul>
</table>
