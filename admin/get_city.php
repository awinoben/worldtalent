<?php
include ('../connect/dbconn.php');
if(!empty($_POST["country"]))
{
    $country=$_POST['country'];
    $query="SELECT * FROM cities WHERE countryId='$country' ORDER BY cityName ASC";
    ?>
    <option value="">Select City/Town...</option>
    <?php
    $result = $db->query($query);
    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        ?>
        <option value="<?php echo htmlentities($row['cityName']); ?>"><?php echo htmlentities($row['cityName']); ?></option>
        <?php
    }
}
?>