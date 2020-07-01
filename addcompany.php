<?php 
require "header.php";
function generateCode($length = 9) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<main>
    <h1>ADDCOMPANY</h1>
     <form action="includes/addcompany.inc.php" method="post"> 
        <input type="text" name="company_name" placeholder="Name">
        <input type="text" name="vacancy_category" placeholder="Category">
        <input type="text" name="pitch" placeholder="Message">
        <input type="text" name="serial" value="<?php echo generateCode($length = 9) ?>">
        <button type="submit" name="company-submit">ADDCOMPANY</button>
            </form>

    
</main>

<?php 
require "footer.php";

?>