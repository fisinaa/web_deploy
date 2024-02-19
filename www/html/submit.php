 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save data
    $vname = $_POST["vname"];
    $vcpu = $_POST["vcpu"];
    $vmem = $_POST["vmem"];
    $message = $_POST["message"];
    $loc = $_POST["loc"];
    $loc_cl = $_POST["loc_cl"];
    $data_stor = $_POST["data_stor"];
    $dsize = $_POST["dsize"];
    $datacntr = $_POST["datacntr"];
    $file = fopen("names.yml","w");
    fwrite($file,"g_name: '$vname' \n");
    fwrite($file,"g_vcpu: '$vcpu' \n");
    fwrite($file,"g_vmem: '$vmem' \n");
    fwrite($file,"g_notes: '$message' \n");
    fwrite($file,"g_loc: '$loc' \n");
    fwrite($file,"g_loc_cl: '$loc_cl' \n");
    fwrite($file,"g_ds: '$data_stor' \n");
    fwrite($file,"g_dsz: '$dsize' \n");
    fwrite($file,"g_dcntr: '$datacntr' \n");
    fclose($file);

    return header('Location: names.yml'); // to redirect to names.yml page
}
?>
