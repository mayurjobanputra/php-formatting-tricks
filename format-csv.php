$myfile = fopen("list.csv", "r") or die("Unable to open file!");

//echo fread($myfile,filesize("list.csv"));

fclose($myfile);

$csv = array_map('str_getcsv', file('list.csv'));

//echo is_array($csv) ? 'Array' : 'not an Array';

//$line=1; //If you need to compare the array with your CSV to make sure all lines are included

foreach ($csv as $i => $row)
{
    $lastcountry=$country;
    $laststate=$state;

    $country="";
    $state="";
    $city="";

    $country=trim($row[0]);
    $state=trim($row[1]);
    $city=trim($row[2]);

    if ($country <> $lastcountry) {
        echo $country . "<br>";
    }
    if ($state <> $laststate) {
        echo "-" . $state . "<br>";
    }
    echo "--" . $city . "<br>";

    //$line++;
    //echo $line . " <strong>Country:</strong> " . $country;
    //echo " <strong>State: </strong> " . $state;
    //echo " <strong>City: </strong>" . $city . "<br>";
}
