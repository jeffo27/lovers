<div class="row main light_blue">
    <div class="container bento">

        <div>
            <h1>如饥似渴的米娜桑</h1>
        </div>

        <div id="table">
            <table class="table table-striped">
                <?php 
                    
                    $keys = array('name','gender','major','grade','room_loc','phone','mail','team_name');
                    $i = $male = $female = 0;
                    $male_single = $female_single = 0;

                    echo "<tr>";
                    foreach ($keys_CH as $key => $value) {
                        echo '<td align="center">'.$value."</td>";
                    }
                    echo "</tr>";

                    foreach ($people as $person) {
                        echo "<tr>";
                        foreach ($keys as $key) {
                             # code...
                            echo '<td align="center">'.$person[$key]."</td>";
                        } 

                        if($person['gender'] == '男') {
                            $male++;
                            if($person['has_team'] == 0){
                                $male_single++;
                            }
                        }
                        else {
                            $female++;
                            if($person['has_team'] == 0) {
                                $female_single++;
                            }
                        }

                        echo "</tr>";
                        $i++;
                    }   
                ?>
            </table>
        </div>

        <div>
            <h5><?php 
                    echo "总共:".$i; 
                    echo " 男".$male;
                    echo " 女".$female;
                    echo " 单身男:".$male_single;
                    echo " 单身女".$female_single;
            ?></h5>
        </div>

    </div>
    <!-- End of .container -->
</div>
<!-- End of .row -->


<!--  /main  -->
