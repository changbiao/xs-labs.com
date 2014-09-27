<div>
    <a href="https://github.com/macmade/XSFoundation"><img src="/uploads/image/github.png" alt="GitHub" width="200" height="200" class="pull-right" /></a>
</div>
<p>
    XSFoundation source code is freely available ont <a href="https://github.com/macmade/XSFoundation">GitHub</a>.<br />
    Follow the instructions in the <?php print XS_Menu::getInstance()->getPageLink( '/projects/xsfoundation/documentation', 'documentation' ); ?> to build and use it.
</p>
<h3 class="clearer">Latest commits</h3>
<?php
    $GIT = new XS_GitHub_Repository( 'macmade', 'XSFoundation' );
    
    print $GIT->commits();
?>
