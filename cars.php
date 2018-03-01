<?php

$link = mysqli_connect("localhost", "root", "root", "cars");


if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$sql = "SELECT * FROM cars";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";

                echo "<th>make</th>";

                echo "<th>model</th>";

                echo "<th>year</th>";
                echo "<th>color</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['make'] . "</td>";

                echo "<td>" . $row['model'] . "</td>";

                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";

            echo "</tr>";

        }

        echo "</table>";

        // Close result set

        mysqli_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

mysqli_close($link);

?>
