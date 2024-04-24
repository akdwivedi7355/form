<?php
echo "my name is ";
echo htmlspecialchars($_POST['name']);
echo "<br>";
echo "my age is ";
echo (int)$_POST['age'];