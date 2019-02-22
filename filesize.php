<?php 
            if ($fileRow['filesize'] >= 1073741824)
            {

                $fileRow['filesize'] = number_format($fileRow['filesize'] / 1073741824, 2) . ' GB';

            }

            elseif ($fileRow['filesize'] >= 1048576)

            {

                $fileRow['filesize'] = number_format($fileRow['filesize'] / 1048576, 2) . ' MB';

            }

            elseif ($fileRow['filesize'] >= 1024)

            {

                $fileRow['filesize'] = number_format($fileRow['filesize'] / 1024, 2) . ' KB';

            }

            elseif ($fileRow['filesize'] > 1)

            {

                $fileRow['filesize'] = $fileRow['filesize'] . ' bytes';

            }

            elseif ($fileRow['filesize'] == 1)

            {

                $fileRow['filesize'] = $fileRow['filesize'] . ' byte';

            }

            else

            {

                $fileRow['filesize'] = '0 bytes';

            }
?>