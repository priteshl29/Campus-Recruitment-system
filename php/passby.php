<html>
    <body>
        <?php
function passval($num)
{
    echo "pass by value<br>";
    $num +=10;
    echo "updated num is :".$num;
    return $num;
}
function passref(&$num)
{
    echo "pass by ref<br>";
    $num+=10;
    return $num;

}
$n=10;
passval($n);
echo "$n<br >";
passref($n);
echo "$n";
?>
</body>
</html>