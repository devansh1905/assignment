<?php
for($i=1;$i<=6; ++$i, $k=0)
    {
        for($space=1;$space<=6-$i; ++$space)
        {
            echo"-";
        }

        while($k != 2*$i-1)
        {
            echo"*";
            ++$k;
        }

        echo"<br/>";
		}
?>