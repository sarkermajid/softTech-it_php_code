<?php 
// string funciton follow w3 schools.

echo strtoupper("sarkermajid")."<br>";
echo strtolower("SARKERMAJID")."<br>";
echo ucwords("sarker majid")."<br>";
echo str_word_count("sarker majid")."<br>";
echo strpos("sarker majid","e")."<br>";

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ducimus quos enim quisquam molestiae minima magni totam quia optio quasi.";
echo str_replace("Lorem","Sarker Majid",$text)."<br>";

$password = "12345";
echo crypt("password","sarkermajid")."<br>";
echo md5($password)."<br>";

print_r(explode(" ","I am bangladeshi and tarrorist"));


$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eius soluta necessitatibus possimus ab labore autem, laudantium, quasi neque deserunt provident doloremque repudiandae molestias sint adipisci eligendi culpa! Blanditiis, natus.";

$vengefelsi = explode(" ",$content);
print_r($vengefelsi)."<br>";
$arrayslice = array_slice($vengefelsi,0,5);
print_r($arrayslice)."<br>";
echo implode(" | ",$arrayslice)."<br><br><br><br>";

function string1($cont = null,$count = null){

    $content = $cont ;


    $vengefelsi = explode(" ",$content);
    $arrayslice = array_slice($vengefelsi,0,$count);
    echo implode(" ",$arrayslice)."<a href='#'> Read more...</a>"."<br>";

}

$artice = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dignissimos provident repudiandae sequi libero assumenda natus similique ullam dolorem quae!";

string1($artice,5) ."<br><br><br><br>";

?>
<?php 
if(isset($_POST['submit'])){
    $search = $_POST['search'];
    echo htmlspecialchars($search);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
     <form action="" method="POST">
        <input type="search" name="search">
        <input type="submit" value="search" name='submit'>
     </form>
    <br><br><br><br><br><br>
</body>
</html>

<?php 

    function menu(){

        return  '
        <div class="main-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>';

    }

    $replace = str_replace("<ul>","<div class='menu'>",menu());

    $replace2 = str_replace("<ul>","</div>",$replace);

    echo $replace3 = str_replace("<li>","<li class=single-items>",$replace2)."<br><br><br>";

    $txt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio magni omnis neque laborum repudiandae, impedit, nam fuga quasi nulla est assumenda iusto itaque qui aut possimus optio esse molestias dolores.";

    echo wordwrap("$txt","15","<br>",True);

?>