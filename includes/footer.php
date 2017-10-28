<footer>
    <p>&copy;&nbsp;
    <?php 
    $startyear = 2006;
	$currentYear = date('Y');	
	if ($startyear == $currentYear) {
		echo $currentYear;
	}else {
		echo "{$startyear}&ndash;{$currentYear}";
	}
    ?>
    David Powers</p>
</footer>
 