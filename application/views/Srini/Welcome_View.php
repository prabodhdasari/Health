
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<script type="text/javascript">
$(function(){
    $('select[name=country]').on('change',function(){
        $.ajax({
           // url: 'index.php/welcome/getState?country_id='+$(this).val(),
            url: 'welcome/getState?country_id='+$(this).val(),
            type: "GET",
         }).done(function(data) {
            $('select[name=state]').html(data);
         }).fail(function() {
            
         }).always(function() {
         
        });
    });
});
</script>
</head>
<body>
 
<div id="container">
    <?php echo $countryDropdown; ?>
    <?php echo $stateDropdown; ?>
</div>
 
</body>
</html>