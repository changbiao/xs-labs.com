<div>
    <a href="https://github.com/macmade/XEOS-Software-License"><img src="/uploads/image/github.png" alt="GitHub" width="200" height="200" class="pull-right" /></a>
</div>
<p>
    The project is hosted on <a href="https://github.com/macmade/XEOS-Software-License">GitHub</a>.<br />
    Feel free to comment, request modifications, etc.
</p>
<h3 class="clearer">Latest commits</h3>
<?php
    $GIT = new \XS\GitHub\Repository( 'macmade', 'XEOS-Software-License' );
    
    print $GIT->commits();
?>
